@extends('frontend.layouts.main_land_page')

@section('content')
<div class="hero-wrap" style="background-image: url({{ asset('images/bg_7.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                {{ $item->project->page_title }}</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                {{ $item->project->page_des }} </p>
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
                <p> {{ $item->project->paragraph }}</p>
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
