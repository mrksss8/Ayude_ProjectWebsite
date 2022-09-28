<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\LanguageDB;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
  public function index()
  {
    $languages = Language::all();
    $url = urldecode("https://flagcdn.com/en/codes.json");
    $json_data = json_decode(file_get_contents($url), true);
    
    return view('backend.dashboard_pages.languages.index', compact('languages', 'json_data'));
  }

  public function store(Request $request)
  {
    $symbol = LanguageDB::where('name', 'LIKE', '%'.$request->language.'%')->first();
    Language::create([
      'language' => $request->language,
      'symbol' => $symbol->symbol
    ]);
    return redirect()->back();
  }

  public function delete($id)
  {
    Language::where('id','=',$id)->delete();
    return redirect()->back();
  }
}
