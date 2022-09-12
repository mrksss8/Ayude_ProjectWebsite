<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Language;

class ProjectController extends Controller
{
    public function index($lang)
    {
        
        $item = Language::where('id',$lang)->with('project')->first(); 
       
        return view('frontend.landing_pages.projects', compact('item',));
    }

    public function show($lang_id)
    {
        $project =  Project::where('language_id',$lang_id)->with('language')->first();
        $languages = language::all();
        $current_language = language::where('id',$lang_id)->first();

        return view('backend.dashboard_pages.project-operation.show', compact('languages','project','current_language'));

    }


    public function create($lang_id)
    {   

        $language = language::findorfail($lang_id);
        return view('backend.dashboard_pages.project-operation.create',compact('language'));

    }
    
    public function store(Request $request){
        
        
        Project::create([
            'page_title' => $request->page_title,
            'page_des' => $request->page_des,
            'paragraph' => $request->paragraph,
            'language_id' => $request->lang_id,
        ]);

      

        return redirect()->route('project.show', $request->lang_id);
    }

    public function edit($lang_id)
    {

        $project =  Project::where('language_id',$lang_id)->with('language')->first();

        return view('backend.dashboard_pages.project-operation.edit',compact('project'));

    }

    public function update(Request $request, $lang_id)
    {   
        
        Project::where('language_id',$lang_id)->update([
            'page_title' => $request->page_title,
            'page_des' => $request->page_des,
            'paragraph' => $request->paragraph,
        ]);

        return redirect()->route('project.show', $lang_id)->with('update', 'Record updated successfully!');

    }
}
