@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_7.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
               {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Board</h1>
              {{-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">The key mission of Ayude is to provide for the poorest of the poor – more specifically the numerous (street) children in less-developed countries. We try to improve the pitiful life circumstances of these children and their families by meeting their physical, mental and spiritual needs. </p> --}}
            </div>
          </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <img src="https://www.ayude.be/wp-content/uploads/2021/05/All-board-2.png" alt="" srcset="">
            </div>
        </div>
    </section>
@endsection