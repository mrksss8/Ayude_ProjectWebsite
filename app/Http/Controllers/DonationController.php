<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\SuccessMessage;
use Stripe;
use App\Models\Home;
use App\Models\Language;


class DonationController extends Controller
{
    public function stripePost(Request $request)
    {
        if ($request->type === 'charge.succeeded') {

            try {

                Donation::create([
                    'stripe_id' => $request->data['object']['id'],
                    'amount' => $request->data['object']['amount']/100,
                    'email' => $request->data['object']['billing_details']['email'],
                    'name' => $request->data['object']['billing_details']['name'],
                    'receipt_url' => $request->data['object']['receipt_url'],
                ]);


            } catch (\Exception $e) {
                return $e->getMessage();
            }

        }
    }

    public function success($lang)
    {
        $item = Language::where('id','=',$lang)->with(['home' => function ($query) {
            $query->where('section_no','=',1)->orWhere('section_no','=',3);
        }, 'mainNavs.subNavs' => function($query) use($lang) {
            $query->where('language_id','=',$lang);
        }])->first();

        $section2 = Home::where([['language_id','=',$lang],['section_no','=',2]])->get();

        $success_msg = SuccessMessage::where('id', $lang)->first();

          return view('frontend.landing_pages.success-page', compact('section2', 'item', 'success_msg'));

    }

    public function show($lang){

        $success_msg = SuccessMessage::where('id', $lang)->first();
        return view('backend.dashboard_pages.success.show', compact('success_msg'));

    }


    public function edit($id){

        $success_msg = SuccessMessage::where('id', $id)->first();
        return view('backend.dashboard_pages.success.edit', compact('success_msg'));

    }

    public function update(Request $request, $id){

        SuccessMessage::where('id', $id)->update($request->except([
            '_token', '_method'
        ]));

        return redirect()->route('success.show', $id);
    }



}
