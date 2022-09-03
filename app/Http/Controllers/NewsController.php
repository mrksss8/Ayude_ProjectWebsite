<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($lang){
      $languages = Language::all();
      return view('backend.dashboard_pages.news.index', compact('languages'));
    }
}
