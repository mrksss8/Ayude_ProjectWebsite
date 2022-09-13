<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
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

        // $endpoint_secret = env('WEBHOOK_KEY');

        // $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        // $payload = @file_get_contents('php://input');

        // try {
        //     $event = \Stripe\Webhook::constructEvent(
        //         $payload, $sig_header, $endpoint_secret
        //     );
        // } catch(\UnexpectedValueException $e) {
        //     // Invalid payload
        //     http_response_code(400);
        //     exit();
        // } catch(\Stripe\Exception\SignatureVerificationException $e) {
        //     // Invalid signature
        //     http_response_code(400);
        //     exit();
        // }

    }


}
