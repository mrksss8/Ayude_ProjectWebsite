@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make a Gift</h1>

                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <h3>Make a transfer stating: "Donation from + NAME + ADDRESS"</h3>

                <h5 class="mt-4">Tax Deductability: Your Generosity Pays Off! After all, Ayude is authorized to issue tax certificates for donations from € 40 in total per year.</h5>
                <p class="mt-4">The administration of Ayude is provided completely free of charge by volunteers with personal resources and materials. In this way, the support received in sponsorship money is almost entirely passed on (subject to a small deduction for unavoidable bank transfer costs) to the projects in the slums.</p>
            </div>



            <div class="card-group mt-4">
                <div class="card">

                  <div class="card-body">
                    <h4 class="card-title">Monthly donations via standing order:</h4>
                    <p class="card-text">For € 30 per month you help us to continue to finance children from our projects sustainably (over many years). The support itself mainly provides for costs for food, medical care, school counseling and mental welfare.</p>
                  </div>
                </div>
                <div class="card">

                  <div class="card-body">
                    <h4 class="card-title">One-time donations: these are of course also very welcome.</h4>
                    <p class="card-text">Some examples:</p>
                    <ul>
                        <li>€ 40 is already sufficient for a complete treatment against the still fatal ailment tuberculosis, with an almost certain cure as a result.</li>
                        <li>For only half a euro you can sponsor a meal for the malnourished children.</li>
                    </ul>
                  </div>
                </div>

            </div>
        </div>
    </section>

    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Include Ayude in Your Will</h1>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
            <p>You can of course also contact us for advice on the taxation of gifts, gifts and bequests, wills and duo legacies. Send an email for more information to <a href="mailto:ayude4anewday@gmail.com">ayude4anewday@gmail.com </a></p>
            </div>
        </div>
    </section>
@endsection
