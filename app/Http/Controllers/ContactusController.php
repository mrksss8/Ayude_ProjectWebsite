<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\RegisteredOffice;
use App\Models\GeneralSecretariat;

class ContactusController extends Controller
{
    public function index($lang)
    {
        $item = Language::where('id','=',$lang)->with(['mainNavs.subNavs' => function($query) use($lang) {
            $query->where('language_id','=',$lang);
        }, 'registeredOffice','generalSecretariat'])->first();
        if($item->registeredOffice->isEmpty()){
          return view('frontend.landing_pages.empty-page', compact('item'));
        } else {
          return view('frontend.landing_pages.contact', compact('item'));
        }
    }

    public function create($lang)
    {
        $languages = Language::all();
        $language = Language::where('id','=',$lang)->with('registeredOffice','generalSecretariat')->first();
        return view('backend.dashboard_pages.contact-us.create', compact('language','languages'));
    }

    public function show($lang)
    {
        $languages = Language::all();
        $language = Language::where('id','=',$lang)->with('registeredOffice','generalSecretariat')->first();
        // dd($language);
        return view('backend.dashboard_pages.contact-us.show', compact('language','languages'));
    }

    public function edit($lang)
    {
        $languages = Language::all();
        $language = Language::where('id','=',$lang)->with('registeredOffice','generalSecretariat')->first();
        return view('backend.dashboard_pages.contact-us.edit', compact('language','languages'));
    }

    public function store(Request $request, $lang)
    {
        $request->validate([
            'reg_header' => 'required',
            'reg_address' => 'required',
            'reg_companyNumber' => 'required',
            'reg_tel' => 'required',
            'reg_email' => 'required|email',
            'reg_bank' => 'required',
            'gen_header' => 'required',
            'gen_name' => 'required',
            'gen_address' => 'required',
            'gen_gsm' => 'required',
        ]);

        RegisteredOffice::create([
            'language_id'      => $lang,
            'header'           => $request->reg_header,
            'address'          => $request->reg_address,
            'companyNumber'    => $request->reg_companyNumber,
            'tel'              => $request->reg_tel,
            'email'            => $request->reg_email,
            'bank'             => $request->reg_bank
        ]);
        
        GeneralSecretariat::create([
            'language_id'      => $lang,
            'header'           => $request->gen_header,
            'name'             => $request->gen_name,
            'address'          => $request->gen_address,
            'gsm'              => $request->gen_gsm
        ]);

        return redirect()->route('contactus.show', $lang)->with('success', 'Record saved successfully!');
    }

    public function update(Request $request, $lang, $reg_id, $gen_id)
    {
        $request->validate([
            'reg_header' => 'required',
            'reg_address' => 'required',
            'reg_companyNumber' => 'required',
            'reg_tel' => 'required',
            'reg_email' => 'required|email',
            'reg_bank' => 'required',
            'gen_header' => 'required',
            'gen_name' => 'required',
            'gen_address' => 'required',
            'gen_gsm' => 'required',
        ]);

        RegisteredOffice::where('id','=',$reg_id)->update([
            'language_id'      => $lang,
            'header'           => $request->reg_header,
            'address'          => $request->reg_address,
            'companyNumber'    => $request->reg_companyNumber,
            'tel'              => $request->reg_tel,
            'email'            => $request->reg_email,
            'bank'             => $request->reg_bank
        ]);
        
        GeneralSecretariat::where('id','=',$gen_id)->update([
            'language_id'      => $lang,
            'header'           => $request->gen_header,
            'name'             => $request->gen_name,
            'address'          => $request->gen_address,
            'gsm'              => $request->gen_gsm
        ]);

        return redirect()->route('contactus.show', $lang)->with('update', 'Record updated successfully!');
    }
}
