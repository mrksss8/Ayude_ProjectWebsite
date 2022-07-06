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
        $languages = Language::with('mainNavs.subNavs')->get();
        return view('backend.dashboard_pages.navigations.index', compact('languages'));
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

    public function translate(Request $request, $nav, $id, $navid)
    {
        if($nav == 'mainnav')
        {
            $mainnav = MainNav::find($id)->first();
            MainNav::create([
                'language_id' => $request->language,
                'nav_name' => $request->nav_name,
                'route_name' => $mainnav->route_name
            ]);
        } 

        if($nav == 'subnav') 
        {
            $subnav = SubNav::find($id)->first();
            SubNav::create([
                'language_id' => $request->language,
                'main_nav_id' => $navid,
                'nav_name' => $request->nav_name,
                'route_name' => $subnav->route_name
            ]);
        }

        return redirect()->back()->with('success', 'Data translated successfully');
    }
}
