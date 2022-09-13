<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutBoard;
use App\Models\Language;
use Illuminate\Support\Facades\Storage;

class AboutBoardController extends Controller
{
    public function index($lang)
    {
        
        $item = Language::where('id',$lang)->with('aboutBoard')->first(); 
        $boardPersons = AboutBoard::where('language_id',$lang)->where('board_member','board_member')->with('language')->get();
        
        if($item->aboutBoard){
          return view('frontend.landing_pages.board', compact('item','boardPersons'));
        } else {
          return view('frontend.landing_pages.empty-page', compact('item','boardPersons'));
        }
        
    }

    public function show($lang_id)
    {
        $boardTitle =  AboutBoard::where('language_id',$lang_id)->where('board_member',null)->with('language')->first();
        $boardPersons = AboutBoard::where('language_id',$lang_id)->where('board_member','board_member')->with('language')->get();
        $languages = language::all();
        $current_language = language::where('id',$lang_id)->first();

        return view('backend.dashboard_pages.about.board.show', compact('languages','boardPersons','boardTitle','current_language'));

    }


    public function create($lang_id)
    {   

        $language = language::findorfail($lang_id);
        return view('backend.dashboard_pages.about.board.create',compact('language'));

    }
    
    public function store(Request $request){
        
        AboutBoard::create([
            'page_title' => $request->page_title,
            'page_des' => $request->page_des,
            'language_id' => $request->lang_id,
        ]);

        foreach($request->name as $key => $name){

        $image = $request->file('image')[$key]->getClientOriginalName();
        $path = $request->file('image')[$key]->storeAs('boards',  $image, 'public');      

        AboutBoard::create([
            'board_member' =>'board_member',
            'name' => $name,
            'image' => $image,
            'image_path' => $path,
            'language_id' => $request->lang_id,
        ]);
    }

        return redirect()->route('about_board.show', $request->lang_id);
    }

    public function edit($lang_id)
    {

        $boardTitle =  AboutBoard::where('language_id',$lang_id)->where('board_member',null)->with('language')->first();
        $boardPersons = AboutBoard::where('language_id',$lang_id)->where('board_member','board_member')->with('language')->get();

        return view('backend.dashboard_pages.about.board.edit',compact('boardTitle','boardPersons'));

    }

    public function update(Request $request, $lang_id)
    {   
        
        AboutBoard::where('language_id',$lang_id)->update([
            'page_title' => $request->page_title,
            'page_des' => $request->page_des,
        ]);

        
        foreach($request->board_member_id as $key => $board_member_id){
            
            $image_id = 'image'.$board_member_id;    
            if($request->hasFile($image_id)){
                $image = $request->$image_id->getClientOriginalName();
                $path = $request->$image_id->storeAs('boards',  $image, 'public');  
            }
            else{
                $image = null;
                $path = null;
            }

            $board_member = AboutBoard::findorfail($board_member_id);
                AboutBoard::findorfail($board_member_id)->update([
                'board_member' =>'board_member',
                'name' => $request->name[$key],
                'image' => $image != null ? $image: $board_member->image,
                'image_path' =>  $image != null ? $path : $board_member->image_path,
                ]);  

        }

        return redirect()->route('about_board.show', $lang_id)->with('update', 'Record updated successfully!');

    }
}
