<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\HelpUs;

class HelpUsController extends Controller
{

    public function index($lang){
        $item = Language::where('id',$lang)->with('helpUs')->first(); 

        return view('frontend.landing_pages.help_us', compact('item'));
    }
    public function show($lang_id){

        $helpUs = HelpUs::where('language_id',$lang_id)->with('language')->first();
        $languages = language::all();
        $current_language = language::where('id',$lang_id)->first();

        return view('backend.dashboard_pages.help-us.show',compact('languages','helpUs','lang_id','current_language'));
    }


    public function create($lang_id)
    {   

        $language = language::findorfail($lang_id);
        return view('backend.dashboard_pages.help-us.create',compact('language'));

    }

    public function store(Request $request){
        
        
        HelpUs::create([
            'page_title' => $request->page_title,
            'sub_header1' => $request->sub_header1,
            'sub_header2' => $request->sub_header2,
            'paragraph1' => $request->paragraph1,
            
            'card_header' => $request->card_header,
            'card_des' => $request->card_des,

            'card_header2' => $request->card_header2,
            'card_des2' => $request->card_des2,
            'card2_list1' => $request->card2list1,
            'card2_list2' => $request->card2list2,
            
            'page_second_title' => $request->page_second_title,
            'paragraph2' => $request->paragraph2,

            'language_id' => $request->lang_id,
        ]);

      

        return redirect()->route('help-us.show', $request->lang_id);
    }

    public function edit($lang_id)
    {

        $helpUs =  HelpUs::where('language_id',$lang_id)->with('language')->first();
        $languages = language::all();

        return view('backend.dashboard_pages.help-us.edit',compact('languages','helpUs','lang_id'));
    }

    public function update(Request $request, $lang_id)
    {   
        
          HelpUs::where('language_id',$lang_id)->update([
            'page_title' => $request->page_title,
            'sub_header1' => $request->sub_header1,
            'sub_header2' => $request->sub_header2,
            'paragraph1' => $request->paragraph1,
            
            'card_header' => $request->card_header,
            'card_des' => $request->card_des,
            
            'page_second_title' => $request->page_second_title,
            'paragraph2' => $request->paragraph2,

            'language_id' => $request->lang_id,
        ]);

        return redirect()->route('help-us.show', $lang_id)->with('update', 'Record updated successfully!');

    }
}
