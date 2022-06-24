<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActiveLanguage;

class ActiveLanguageController extends Controller
{
    public function update($lang_id){
        
        ActiveLanguage::first()->update([ 
           'lang_id' => $lang_id,
       ]);

        return redirect()->back();
    }
}
