@extends('frontend.layouts.main_land_page')

@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Projects</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Projects</h1>
        </div>
      </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-about align-self-stretch" style="background-image: url(https://www.ayude.be/wp-content/uploads/2021/01/map.png); width: 100%;"></div>
            </div>
            <div class="col-md-6 pl-md-5 ftco-animate">
                <p>Ayude has projects in different countries. We are currently active in the Philippines, India and cooperation in Brazil . We hope to expand our projects as much as possible to help children around the world.</p>
                <p>When you click on one of the countries, you will learn more about our project in that country.</p>
                <ul>
                    <li><a href="#">Philippines</a></li>
                    <li><a href="#">India</a></li>
                    <li><a href="#">Brazil</a></li>
                </ul>
            </div>

        </div>


    </div>
</section>
@endsection
