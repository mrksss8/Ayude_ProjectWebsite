<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\AboutHistory;

class AboutHistoryController extends Controller
{

    public function index($lang)
    {
      $item = Language::where('id','=',$lang)->with('aboutHistory')->first();
      if($item->aboutHistory){
        return view('frontend.landing_pages.history', compact('item'));
      } else {
        return view('frontend.landing_pages.empty-page', compact('item'));
      }
    }

    public function show($lang_id)
    {
      
      $abouthistory = AboutHistory::where('language_id',$lang_id)->with('language')->first();
      $languages = language::all();
      $current_language = language::where('id',$lang_id)->first();
      
      return view('backend.dashboard_pages.about.history.show',compact('abouthistory','languages', 'current_language'));

    }

    public function edit($lang_id)
    {

        $abouthistory = AboutHistory::where('language_id',$lang_id)->with('language')->first();

        return view('backend.dashboard_pages.about.history.edit',compact('abouthistory'));

    }

    public function update(Request $request, $lang_id)
    {

        $request->validate([
            'header' => 'required',
            'paragraph' => 'required',
            'page_title' => 'required',
            'page_des' => 'required',
          
        ]);
        
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('history',  $image, 'public');    
        
        AboutHistory::where('language_id', $lang_id)->update([
            'page_title'       => $request->page_title,
            'page_des'         => $request->page_des,
            'header'           => $request->header,
            'image'            => $image,
            'paragraph'        => $request->paragraph,
        ]);

        return redirect()->route('about_history.show', $lang_id)->with('update', 'Record updated successfully!');

    }

    public function create($lang_id)
    {   

        $language = language::findorfail($lang_id);
        return view('backend.dashboard_pages.about.history.create',compact('language'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'header' => 'required',
            'paragraph' => 'required',
            'page_title' => 'required',
            'page_des' => 'required',
          
        ]);

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('history',  $image, 'public');     

        AboutHistory::create([
            'page_title'       => $request->page_title,
            'page_des'         => $request->page_des,
            'header'           => $request->header,
            'paragraph'        => $request->paragraph,
            'image'            => $image,
            'language_id'      => $request->lang_id,

        ]);

        return redirect()->route('about_history.show', $request->lang_id)->with('update', 'Record updated successfully!');

    }
}
