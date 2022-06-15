<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\AboutHistory;

class AboutHistoryController extends Controller
{
    public function show($lang_id)
    {
      
        $abouthistory = AboutHistory::where('language_id',$lang_id)->with('language')->first();
        $languages = language::all();
        
        return view('backend.dashboard_pages.about.history.show',compact('abouthistory','languages', 'lang_id'));

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
        
        AboutHistory::where('language_id', $lang_id)->update([
            'page_title'       => $request->page_title,
            'page_des'         => $request->page_des,
            'header'           => $request->header,
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
        
        AboutHistory::create([
            'page_title'       => $request->page_title,
            'page_des'         => $request->page_des,
            'header'           => $request->header,
            'paragraph'        => $request->paragraph,
            'language_id'      => $request->lang_id,

        ]);

        return redirect()->route('about_history.show', $request->lang_id)->with('update', 'Record updated successfully!');

    }
}
