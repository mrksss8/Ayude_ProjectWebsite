<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Guest;
use App\Models\Comment;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function frontend($lang)
    {
      $item = Language::where('id','=',$lang)->with('posts')->first();
      return view('frontend.landing_pages.blog', compact('item'));
    }

    public function blog($lang, $id)
    {
      $item = Language::where('id','=',$lang)->with(['posts' => function($query) use($id){
        $query->find($id)->first();
      }])->first();
      return view('frontend.landing_pages.blog-single', compact('item', 'id'));
    }

    public function comment(Request $request, $id)
    {
      $quest = Guest::create([
        'name' => $request->name,
        'email' => $request->email,
        'website' => $request->website
      ]);

      $comment = Comment::create([
        'post_id' => $id,
        'guest_id' => $quest->id,
        'comment_id' => 1,
        'comment' => $request->comment
      ]);

      return redirect()->back()->with('success', 'comment saved successfully!');
    }

    public function index($lang){
      $languages = Language::all();
      $posts = Post::all();
      $lang_id = $lang;
      return view('backend.dashboard_pages.news.index', compact('languages', 'lang_id', 'posts'));
    }

    public function create($lang){
      $languages = Language::all();
      $lang_id = $lang;
      return view('backend.dashboard_pages.news.create', compact('languages', 'lang_id'));
    }

    public function store(Request $request, $lang)
    {
      $request->validate([
        'title' => 'required',
        'body' => 'required',
      ]);
      
      if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $request->image->storeAs('news-images', $image_name, 'public');
      }

      Post::create([
        'language_id' => $lang,
        'user_id' => Auth::user()->id,
        'title' => $request->title,
        'body' => $request->body,
        'image' => $image_name
      ]);

      return redirect()->route('news.index', $lang)->with('success', 'Post created successfully!');
    }

    public function edit($lang, $id)
    {
      $post = Post::where([['language_id','=',$lang], ['id','=',$id]])->first();
      return view('backend.dashboard_pages.news.edit', compact('post'));
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
      $post = Post::where([['language_id','=',$lang], ['id','=',$id]])->first();
      return view('backend.dashboard_pages.news.blog', compact('post'));
    }

    public function delete($id)
    {
      Post::destroy($id);
      return redirect()->route('news.index')->with('update', 'Post deleted successfully!');
    }
}
