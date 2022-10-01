@extends('frontend.layouts.main_land_page')

@section('content')
<div class="hero-wrap" style="background-image: url('{{ asset('images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center text-center" data-scrollax-parent="true">
      <h1>{{ $success_msg -> header_msg }}</h1>
    </div>
  </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 d-flex ftco-animate">
<p>{{ $success_msg -> body_msg }}</p>
            </div>
        </div>
    </div>
</section>
@endsection

