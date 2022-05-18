<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function navigate($page)
    {
        switch($page) {
            case('index'):
                return view('frontend.landing_pages.index');
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
                return view('frontend.landing_pages.contact');
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
