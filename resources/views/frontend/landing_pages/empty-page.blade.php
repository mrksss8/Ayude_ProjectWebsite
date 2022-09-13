@extends('frontend.layouts.main_land_page')

@section('content')
<div class="hero-wrap" style="background-image: url('{{ asset('images/bg_7.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center text-center" data-scrollax-parent="true">
      <h1>The page's {{ $item->language }} version is currently unavailable.</h1>
    </div>
  </div>
</div>
@endsection

