<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutMissionVision;
use App\Models\Language;

class AboutMissionVisionController extends Controller
{

    public function index($lang)
    {
        
        $item = Language::where('id','=',$lang)->with('aboutMissionVision')->first(); 
        // dd($item->aboutMissionVision);
        if($item->aboutMissionVision){
          return view('frontend.landing_pages.mission_vision', compact('item'));
        } else {
          return view('frontend.landing_pages.empty-page', compact('item'));
        }

    }

    public function show($lang_id)
    {
      
        $about_mission_vision = AboutMissionVision::where('language_id',$lang_id)->with('language')->first();
        $languages = language::all();
        $current_language = language::where('id',$lang_id)->first();

        return view('backend.dashboard_pages.about.mission_vision.show', compact('languages','about_mission_vision','current_language'));

    }


    public function create($lang_id)
    {   
        
        $language = language::findorfail($lang_id);
        return view('backend.dashboard_pages.about.mission_vision.create',compact('language'));

    }

    public function store(Request $request){
         // AboutMissionVision::create([$request->all()]);

        $mission_image = $request->file('mission_image')->getClientOriginalName();
        $mission_path = $request->file('mission_image')->storeAs('mission_vision',  $mission_image, 'public');    
        $vision_image = $request->file('vision_image')->getClientOriginalName();
        $vision_path = $request->file('vision_image')->storeAs('vision_vision',  $vision_image, 'public');    

        AboutMissionVision::create([
            'language_id'       => $request->language_id,
            'team'       => $request->team,
            'mission_image' => $mission_image,
            'mission_image_path' => $mission_path,
            'vision_image' => $vision_image,
            'vision_image_path' => $vision_path,
            'page_title'       => $request->page_title,
            'page_des'       => $request->page_des,
            'header_one'       => $request->header_one,
            'header_one_des1'       => $request->header_one_des1,
            'header_one_des2'       => $request->header_one_des2,
            'list_1'       => $request->list_1,
            'list_2'       => $request->list_2,
            'list_3'       => $request->list_3,
            'header_two'       => $request->header_two,
            'header_two_des1'       => $request->header_two_des1,
            'header_two_des2'       => $request->header_two_des2,
            'community_des'       => $request->community_des,
            'full_name'       => $request->full_name,
            'company'       => $request->company,
            'position'       => $request->position,
            'email'       => $request->email,
        ]);
        return redirect()->route('about_mission_vision.show', $request->language_id);
    }

    public function edit($lang_id)
    {

        $about_mission_vision = AboutMissionVision::where('language_id',$lang_id)->with('language')->first();

        return view('backend.dashboard_pages.about.mission_vision.edit',compact('about_mission_vision'));

    }

    public function update(Request $request, $lang_id)
    {   

        $mission_image = $request->file('mission_image')->getClientOriginalName();
        $mission_path = $request->file('mission_image')->storeAs('mission_vision',  $mission_image, 'public');    
        $vision_image = $request->file('vision_image')->getClientOriginalName();
        $vision_path = $request->file('vision_image')->storeAs('mission_vision',  $vision_image, 'public');    

        AboutMissionVision::where('language_id', $lang_id)->update([
            'page_title'       => $request->page_title,
            'page_des'       => $request->page_des,
            'header_one'       => $request->header_one,
            'header_one_des1'       => $request->header_one_des1,
            'header_one_des2'       => $request->header_one_des2,
            'list_1'       => $request->list_1,
            'list_2'       => $request->list_2,
            'list_3'       => $request->list_3,
            'header_two'       => $request->header_two,
            'header_two_des1'       => $request->header_two_des1,
            'header_two_des2'       => $request->header_two_des2,
            'community_des'       => $request->community_des,
            'full_name'       => $request->full_name,
            'company'       => $request->company,
            'position'       => $request->position,
            'email'       => $request->email,


            'mission_image' => $mission_image,
            'mission_image_path' => $mission_path,
            'vision_image' => $vision_image,
            'vision_image_path' => $vision_path,
        ]);

        return redirect()->route('about_mission_vision.show', $lang_id)->with('update', 'Record updated successfully!');

    }

}
