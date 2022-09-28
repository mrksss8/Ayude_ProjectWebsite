<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Language;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($lang)
    {
      $photos = Gallery::all();
      $item = Language::where('id',$lang)->first(); 
      return view('frontend.landing_pages.gallery', compact('photos', 'item'));
    }

    public function show()
    {
      $photos = Gallery::paginate(6);
      return view('backend.dashboard_pages.gallery.index', compact('photos'));
    }

    public function store(Request $request)
    {
      if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $request->image->storeAs('gallery-images', $image_name, 'public');
      }

      Gallery::create([
        'filename' => $image_name
      ]);

      return redirect()->back();
    }

    public function delete($id)
    {
      Gallery::where('id','=',$id)->delete();
      return redirect()->back();
    }
}
