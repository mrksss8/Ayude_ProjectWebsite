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
        $language = Language::find($lang);
        $type = $type;

        switch ($type) {
            case 1:
                $nav = SubNav::find($id);
                break;
                
            default:
                $nav = MainNav::find($id);
                break;
        }
    
        // dd($nav);
        return view('backend.dashboard_pages.navigations.create', compact('language', 'nav', 'type'));
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
        switch ($variable) {
            case 1:
                SubNav::find($id)->update([
                    'nav_name' => $request->nav_name
                ]);
                break;
            
            default:
                MainNav::find($id)->update([
                    'nav_name' => $request->nav_name
                ]);
                break;
        }

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function translate(Request $request, $id, $type)
    {   
        $mainnav = MainNav::find($id);
        $subnav = SubNav::find($id);
        if($type == 0)
        {
            MainNav::create([
                'language_id' => $request->language,
                'position' => $mainnav->position,
                'nav_name' => $request->nav_name,
                'route_name' => $mainnav->route_name
            ]);
            return redirect()->route('navigation.show', $mainnav->language_id)->with('success', 'Data translated successfully');
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

            dd($mainnav->id);
            return redirect()->route('navigation.show', $subnav->language_id)->with('success', 'Data translated successfully');
        }
    }
}
