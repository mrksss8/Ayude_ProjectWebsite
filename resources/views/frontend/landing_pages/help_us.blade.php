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
    'success_url' => 'https://httplocalhost.sharedwithexpose.com/success',
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
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $item->helpUs->page_title}}</h1>

                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div>
                <button type="button" class="btn btn-lg btn-success mb-4" id="donation-btn" style="border-radius: 5px;"">Donate Now</button>
                <h3>{{ $item->helpUs->sub_header1 }}</h3>
                <h5 class="mt-4">{{ $item->helpUs->sub_header2 }}</h5>
                <p class="mt-4">{{ $item->helpUs->paragraph1 }}</p>
            </div>



            <div class="card-group mt-4">
                <div class="card">

                  <div class="card-body">
                    <h4 class="card-title">{{ $item->helpUs->card_header }}</h4>
                    <p class="card-text">{{ $item->helpUs->card_des }}</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">{{ $item->helpUs->card_header2 }}</h4>
                    <p class="card-text">{{ $item->helpUs->card_des2 }}</p>
                    <ul>
                        <li>{{ $item->helpUs->card2_list1 }}</li>
                        <li>{{ $item->helpUs->card2_list2 }}</li>
                    </ul>
                  </div>
                </div>

            </div>

        </div>

    </section>

    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $item->helpUs->page_second_title }}</h1>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
            <p>{{ $item->helpUs->paragraph2}} </a></p>
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
