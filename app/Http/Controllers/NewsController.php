<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Guest;
use App\Models\Comment;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function frontend($lang)
    {
      $item = Language::where('id','=',$lang)->first();
      $posts = Post::where('language_id','=',$lang)->paginate(6);
      return view('frontend.landing_pages.blog', compact('posts', 'lang', 'item'));
    }

    public function blog($lang, $id)
    {
      $condition = 'id';

      if($lang != 1)
      {
        $condition = 'post_id';
      }

      $item = Language::where('id','=',$lang)->with(['posts' => function($query) use($condition, $id){
        $query->where($condition,'=',$id)->first();
      }])->first();

      if(!empty($item->posts[0]))
      {
        return view('frontend.landing_pages.blog-single', compact('item', 'id'));
      } else {
        return redirect()->back();
      }

    }

    public function comment(Request $request, $id)
    {
      $guest = Guest::create([
        'name' => $request->name,
        'email' => $request->email,
        'website' => $request->website
      ]);

      // Cache::forever('guest_id', $guest->id);

      $comment = Comment::create([
        'post_id' => $id,
        'guest_id' => $guest->id,
        'comment_id' => 0,
        'comment' => $request->comment
      ]);

      return redirect()->back()->with('success', 'comment saved successfully!');
    }

    public function reply(Request $request, $post_id, $comment_id){

      $existing_guest = Guest::where('email','=',$request->email)->first();

      if(!$existing_guest)
      {
        $guest = Guest::create([
          'name' => $request->name,
          'email' => $request->email,
          'website' => $request->website
        ]);

        $comment = Comment::create([
          'post_id' => $post_id,
          'guest_id' => $guest->id,
          'comment_id' => $comment_id,
          'comment' => $request->comment
        ]);
      } else {
        $comment = Comment::create([
          'post_id' => $post_id,
          'guest_id' => $existing_guest->id,
          'comment_id' => $comment_id,
          'comment' => $request->comment
        ]);
      }

     return redirect()->back();
    }

    public function index($lang){
      $languages = Language::all();
      $posts = Post::where('language_id','=',$lang)->paginate(10);
      $lang_id = $lang;
      $toTranslate = Language::whereNot($lang)->get();
      return view('backend.dashboard_pages.news.index', compact('languages', 'lang_id', 'posts', 'toTranslate'));
    }

    public function create($lang){
      $languages = Language::all();
      $lang_id = $lang;
      return view('backend.dashboard_pages.news.create', compact('languages', 'lang_id'));
    }

    public function store(Request $request, $lang, $id)
    {
      $request->validate([
        'title' => 'required',
        'body' => 'required',
      ]);
      
      if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $request->image->storeAs('news-images', $image_name, 'public');
      } else {
        $image_name = $request->image;
      }

      Post::create([
        'language_id' => $lang,
        'user_id' => Auth::user()->id,
        'post_id' => $id,
        'title' => $request->title,
        'body' => $request->body,
        'image' => $image_name
      ]);

      return redirect()->route('news.index', $lang)->with('success', 'Post created successfully!');
    }

    public function edit($lang, $id)
    {
      $languages = Language::all();
      $post = Post::where([['language_id','=',$lang], ['id','=',$id]])->first();
      $lang_id = $lang;
      return view('backend.dashboard_pages.news.edit', compact('post', 'languages', 'lang_id'));
    }

    public function update(Request $request, $lang, $id)
    {
      $request->validate([
        'title' => 'required',
        'body' => 'required',
      ]);
      
      if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $request->file->storeAs('news-images', $image, 'public');
      } else {
        $image_name = $request->image;
      }

      Post::where([['language_id','=',$lang], ['id','=',$id]])->create([
        'language_id' => $lang,
        'user_id' => Auth::user()->id,
        'title' => $request->title,
        'body' => $request->body,
        'image' => $image_name
      ]);

      return redirect()->route('news.index')->with('update', 'Post updated successfully!');
    }

    public function show($lang, $id)
    {
      $languages = Language::all();
      $lang_id = $lang; 

      if($lang == 1)
      {
        $param = 'id';
      } else {
        $param = 'post_id';
      }
      
      // dd($param, $id);

      $post = Post::where([['language_id','=',$lang], [$param,'=',$id]])->first();
      return view('backend.dashboard_pages.news.blog', compact('post', 'languages','lang_id'));
    }

    public function delete($lang, $id)
    {
      $post = Post::destroy($id);
      return redirect()->route('news.index', $lang)->with('update', 'Post deleted successfully!');
    }

    public function translate($lang_id, $id)
    {
      $languages = Language::all();
      $post = Post::where('id','=',$id)->first();
      return view('backend.dashboard_pages.news.translate-blog', compact('post', 'languages', 'lang_id'));
    }
}