<?php
require_once __DIR__. '/../../../vendor/autoload.php';
\Stripe\Stripe::setApiKey(env('STRIPE_API_KEY'));
$session = \Stripe\Checkout\Session::create([
    'submit_type' => 'donate',
    'line_items' => [[
    'price' => 'price_1LeJECCx5e49mrnBUEn4CZqc',
    'quantity' => 1,
  ]],
    'mode' => 'payment',
    'success_url' => 'https://httplocalhost.sharedwithexpose.com/success/1',
    'cancel_url' => 'https://httplocalhost.sharedwithexpose.com/cancel',
  ]);
?>

@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <h1 class="mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->helpUs->page_title) ? $item->helpUs->page_title : '' }}</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div>
                <h3>{{ !empty($item->helpUs->sub_header1) ? $item->helpUs->sub_header1 : '' }}</h3>
                <h5 class="mt-4">{{ !empty($item->helpUs->sub_header2) ? $item->helpUs->sub_header2 : '' }}</h5>
                <p class="mt-4">{{ !empty($item->helpUs->paragraph1) ? $item->helpUs->paragraph1 : '' }}</p>
            </div>



            <div class="card-group mt-4">
                <div class="card">

                  <div class="card-body">
                    <h4 class="card-title">{{ !empty($item->helpUs->card_header) ? $item->helpUs->card_header : '' }}</h4>
                    <p class="card-text">{{ !empty($item->helpUs->card_des) ? $item->helpUs->card_des : '' }}</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ !empty($item->helpUs->card_header2) ? $item->helpUs->card_header2 : '' }}</h4>
                    <p class="card-text">{{ !empty($item->helpUs->card_des2) ? $item->helpUs->card_des2 : '' }}</p>
                    <ul>
                        <li>{{ !empty($item->helpUs->card2_list1) ? $item->helpUs->card2_list1 : '' }}</li>
                        <li>{{ !empty($item->helpUs->card2_list2) ? $item->helpUs->card2_list2 : '' }}</li>
                    </ul>
                  </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-success btn-lg mt-4"  style="border-radius: 5px;" data-toggle="modal" data-target="#exampleModalCenter">
                Donate Online
              </button>
            </div>
        </div>

    </section>

    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->helpUs->page_second_title) ? $item->helpUs->page_second_title : '' }}</h1>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
            <p>{{ !empty($item->helpUs->paragraph2) ? $item->helpUs->paragraph2 : '' }} </a></p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

<script src="https://js.stripe.com/v3/"></script>
<script>
const stripe = Stripe('pk_test_51LM11DCx5e49mrnBSS6rIt308P5hNxK2xdgj2wK87a4HKZW9a0gtbZ51kYLgWbwFchBRTs9oNATcs1gG3h9yVbKn009txQs5J8')
 const btn = document.getElementById('donation-btn')
 btn.addEventListener('click', function(e){
    e.preventDefault();
    stripe.redirectToCheckout({
        sessionId: '<?php echo $session->id ?>'
    })
 })
</script>

@endsection

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Important! (Please Read)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          When you donate any amount using this method. Ayude for a new day will not receive the full amount of money. Our payment processor deduct one small transaction fee per donation (2.9% + $0.30, which include debit and credit charges). This is deducted automatically from donations; the person receiving funds will receive all funds raised minus these transaction fees.
            <br>
            <br>
          Donating by bank account is by far the least expensive method of payment in terms of fees to payment processors. This means that us nonprofit gets more from your donation, putting more of your contribution to work to fulfill our mission.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary"  style="border-radius: 5px;" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="donation-btn" style="border-radius: 5px;">Donate Now</button>
        </div>
      </div>
    </div>
  </div>
