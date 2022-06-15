<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class NavController extends Controller
{
    public function navigate($page, $lang)
    {
        switch($page) {
            case('index'):
                $item = Language::where('id','=',$lang)->with(['home' => function ($query) {
                    $query->where('section_no','=',1)->orWhere('section_no','=',3);
                }])->first();
                $section2 = Home::where([['language_id','=',$lang],['section_no','=',2]])->get();
                // dd($item);
                return view('frontend.landing_pages.index', compact('section2', 'item'));
                break;
            case('landing_page_about'):
                return view('frontend.landing_pages.about');
                break;
            case('causes'):
                return view('frontend.landing_pages.causes');
                break;
            case('donation'):
                return view('frontend.landing_pages.donation');
                break;
            case('blog'):
                return view('frontend.landing_pages.blog');
                break;
            case('gallery'):
                return view('frontend.landing_pages.gallery');
                break;
            case('events'):
                return view('frontend.landing_pages.event');
                break;
            case('financing'):
                return view('frontend.landing_pages.financing');
                break;
            case('projects') :
                return view('frontend.landing_pages.projects');
                break;
            case('news'):
                return view('frontend.landing_pages.news');
                break;
            case('help_us'):
                return view('frontend.landing_pages.help_us');
                break;
            case('contact'):
                $item = Language::where('id','=',$lang)->with('registeredOffice','generalSecretariat')->first();
                return view('frontend.landing_pages.contact', compact('item'));
                break;
            case('blog-single'):
                return view('frontend.landing_pages.blog-single');
                break;
            case('board'):
                return view('frontend.landing_pages.board');
                break;
            case('history'):
                return view('frontend.landing_pages.history');
                break;
        }
    }
}
