@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
              <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Gallery</span></p>
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Galleries</h1>
            </div>
          </div>
        </div>
    </div>

    <section class="ftco-section ftco-gallery">
        <div class="container">
          <div class="d-md-flex flex-wrap">
            @forelse ($photos as $photo)
              <a href="{{ asset('storage/gallery-images/'.$photo->filename) }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url({{ asset('storage/gallery-images/'.$photo->filename) }});">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search"></span>
                </div>
              </a>
            @empty
            @endforelse
          </div>
        </div>
    </section>
@endsection