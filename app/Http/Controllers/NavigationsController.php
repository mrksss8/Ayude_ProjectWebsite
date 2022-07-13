<?php

namespace App\Http\Controllers;

use App\Models\SubNav;
use App\Models\MainNav;
use App\Models\Language;
use Illuminate\Http\Request;

class NavigationsController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('backend.dashboard_pages.navigations.index', compact('languages'));
    }

    public function create($id, $lang, $type)
    {
        $languages = Language::all();
        $language = $lang;
        $type = $type;
        $subnav = SubNav::where('id','=',$id)->first();
        if($type == 0) {
            $nav = MainNav::where('id','=',$id)->first();
        } else {
            $mainnav = MainNav::where([['id','=',$subnav->main_nav_id]])->first();
            $nav = MainNav::where([['position','=',$mainnav->position],['language_id','=',$lang]])->first();
        }
        return view('backend.dashboard_pages.navigations.create', compact('languages', 'language', 'nav', 'type', 'subnav'));
    }

    public function show($id)
    {
        $languages = Language::all();
        $data = Language::where('id','=',$id)->with('mainNavs.subNavs')->get();
        return view('backend.dashboard_pages.navigations.show', compact('data','languages'));
    }

    public function update(Request $request, $nav, $id)
    {
        if($nav == 'mainnav')
        {
            MainNav::find($id)->update([
                'nav_name' => $request->nav_name
            ]);
        } 

        if($nav == 'subnav') 
        {
            SubNav::find($id)->update([
                'nav_name' => $request->nav_name
            ]);
        }

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function translate(Request $request, $id, $subnav, $type)
    {
        $mainnav = MainNav::find($id);
        $subnav = SubNav::find($subnav);
        if($type == 0)
        {
            MainNav::create([
                'language_id' => $request->language,
                'position' => $mainnav->position,
                'nav_name' => $request->nav_name,
                'route_name' => $mainnav->route_name
            ]);
        } 

        if($type == 1) 
        {
            SubNav::create([
                'language_id' => $request->language,
                'position' => $subnav->position,
                'main_nav_id' => $mainnav->id,
                'nav_name' => $request->nav_name,
                'route_name' => $subnav->route_name
            ]);
        }

        return redirect()->route('navigation.show', $subnav->language_id)->with('success', 'Data translated successfully');
    }
}
