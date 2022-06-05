<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeSec1;
use App\Models\HomeSec2;
use App\Models\HomeSec3;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('backend.dashboard_pages.home-page.index', compact('languages'));
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
        $language = Language::where('id','=',$lang)->with('home')->first();
        // dd($language)
        return view('backend.dashboard_pages.home-page.show', compact('language','languages'));
    }

    public function store(Request $request, $sec, $lang)
    {
        $request->validate([
            'header' => 'required',
            'content' => 'required'
        ]);

        Home::create([
            'language_id' => $lang,
            'section_no' => $sec,
            'header' => $request->header,
            'content' => $request->content
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
}
