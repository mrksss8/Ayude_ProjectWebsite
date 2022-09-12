<?php

namespace App\Http\Controllers;

use App\Models\SubNav;
use App\Models\MainNav;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NavigationsController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('backend.dashboard_pages.navigations.index', compact('languages'));
    }

    public function create($id, $lang, $type)
    {
        $language = Language::find($lang);
        $type = $type;

        switch ($type) {
            case 1:
                $nav = SubNav::where('id','=',$id)->with('mainNav')->first();
                $mainnavId = $nav->mainNav->navByLang($lang, $nav->mainNav->position)->id;
                // dd($mainnavId);
                $subnavId = $nav->id;
                if($subnavId == null){
                    Session::flash('modalAlert');
                    $message = "You have to translate ".$nav->mainNav->nav_name." navigation first";
                    return redirect()->back()->with(['message' => $message, 'id' => $nav->mainNav->id, 'language' => $lang]);
                } 
                break;
                
            default:
                $nav = MainNav::find($id);
                $mainnavId = $nav->id;
                $subnavId = 0;
                break;
        }
    
        // dd($subnavId->id);
        return view('backend.dashboard_pages.navigations.create', compact('language', 'nav', 'type', 'mainnavId', 'subnavId'));
    }

    public function show($id)
    {
        $languages = Language::all();
        $data = Language::where('id','=',$id)->with(['mainNavs.subNavs' => function($query) use($id) {
            $query->where('language_id','=',$id);
        }])->get();
        return view('backend.dashboard_pages.navigations.show', compact('data','languages'));
    }

    public function edit($id, $type)
    {
        switch ($type) {
            case 1:
                $nav = SubNav::find($id);
                break;
            
            default:
                $nav = MainNav::find($id);
                break;
        }


        return view('backend.dashboard_pages.navigations.edit', compact('nav', 'type'));
    }

    public function update(Request $request, $id, $type)
    {
        switch ($type) {
            case 1:
                $nav = SubNav::find($id)->update([
                    'nav_name' => $request->nav_name
                ]);
                break;
            
            default:
                $nav = MainNav::find($id)->update([
                    'nav_name' => $request->nav_name
                ]);
                break;
        }
        return redirect()->route('navigation.show', $request->language)->with('success', 'Data updated successfully');
    }

    public function translate(Request $request, $mainnav, $subnav, $type)
    {   
        $mainNav = MainNav::where('id','=',$mainnav)->first();
        $subNav = SubNav::where('id','=',$subnav)->first();
        if($type == 0)
        {
            MainNav::create([
                'language_id' => $request->language,
                'position' => $mainNav->position,
                'nav_name' => $request->nav_name,
                'route_name' => $mainNav->route_name
            ]);
            return redirect()->route('navigation.show', $mainNav->language_id)->with('success', 'Data translated successfully');
        } 

        if($type == 1) 
        {
            
            SubNav::create([
                'language_id' => $request->language,
                'position' => $subNav->position,
                'main_nav_id' => $mainNav->id,
                'nav_name' => $request->nav_name,
                'route_name' => $subNav->route_name
            ]);

            return redirect()->route('navigation.show', $subNav->language_id)->with('success', 'Data translated successfully');
        }
    }
}
