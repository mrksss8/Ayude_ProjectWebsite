<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    // Frontend
    public function index($lang)
    {
        $item = Language::where('id','=',$lang)->with(['home' => function ($query) {
            $query->where('section_no','=',1)->orWhere('section_no','=',3);
        }, 'mainNavs.subNavs' => function($query) use($lang) {
            $query->where('language_id','=',$lang);
        }])->first();

        $section2 = Home::where([['language_id','=',$lang],['section_no','=',2]])->get();
        
        if($item->home->isEmpty()){
          return view('frontend.landing_pages.empty-page', compact('section2', 'item'));
        } else {
          return view('frontend.landing_pages.index', compact('section2', 'item'));
        }
    }

    public function create($sec, $lang)
    {
        $languages = Language::all();
        $language = Language::where('id','=',$lang)->with('home')->first();
        $section = $sec;
        return view('backend.dashboard_pages.home-page.create', compact('language','languages', 'section'));
    }

    public function edit($sec, $lang, $id)
    {
        $languages = Language::all();
        $language = Language::where('id','=',$lang)->with('home')->first();
        $data = Home::where('id','=',$id)->first();
        $section = $sec;
        return view('backend.dashboard_pages.home-page.edit', compact('language','languages', 'section', 'data'));
    }

    public function show($lang)
    {
        $languages = Language::all();
        $language = Language::where('id','=',$lang)->with(['home' => function ($query) {
            $query->where('section_no','=',1)->orWhere('section_no','=',3);
        }])->first();
        $section2 = Home::where([['language_id','=',$lang],['section_no','=',2]])->get();
        // dd($language);
        return view('backend.dashboard_pages.home-page.show', compact('language','languages','section2'));
    }

    public function store(Request $request, $sec, $lang)
    {
        $request->validate([
            'header' => 'required',
            'content' => 'required',
        ]);

        Home::create([
            'language_id' => $lang,
            'section_no' => $sec,
            'header' => $request->header,
            'content' => $request->content,
            'subheader' => $request->subheader
        ]);

        return redirect()->route('homepage.show', $lang)->with('success', 'Record saved successfully!');
    }

    public function update(Request $request, $sec, $lang, $id)
    {
        $request->validate([
            'header' => 'required',
            'content' => 'required'
        ]);

        Home::where('id','=',$id)->update([
            'language_id' => $lang,
            'section_no' => $sec,
            'header' => $request->header,
            'content' => $request->content
        ]);

        return redirect()->route('homepage.show', $lang)->with('success', 'Record saved successfully!');
    }
    
    public function editSec2($lang, $id)
    {
      $language = Language::where('id','=',$lang)->first();
      $lang_id = $lang;
      $data = Home::where('id','=',$id)->first();
      $languages = Language::all();
      return view('backend.dashboard_pages.home-page.edit-sec2', compact('data', 'language', 'languages', 'lang_id'));
    }
}
