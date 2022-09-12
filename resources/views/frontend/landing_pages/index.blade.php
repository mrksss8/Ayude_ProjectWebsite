@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url('{{ asset('images/bg_7.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->home[0]->header) ? $item->home[0]->header : '' }}</h1>
              <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->home[0]->content) ? $item->home[0]->content : '' }}</p>
              <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p>
            </div>
            @foreach ($section2 as $data)
              <h2 class="text-white px-3 text-center" style="position: absolute; bottom: 15%" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $data->subheader }}</h2>
              @if($loop->index = 1)
                @break
              @endif
            @endforeach
          </div>
        </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
      <div class="container d-flex flex-column align-items-center">
        <div class="row no-gutters w-100">
          @foreach ($section2 as $data)
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 color-1 align-items-stretch">
                <div class="text">
                  <span>{{ $data->header }}</span>
                  <strong class="number" data-number="{{ $data->content }}">0</strong>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container d-flex flex-column align-items-center">
        <div class="col-md-7 heading-section ftco-animate text-center mb-5">
          <h2 class="mb-4">{{ !empty($item->home[1]->header) ? $item->home[1]->header : '' }}</h2>
          <p>{{ !empty($item->home[1]->content) ? $item->home[1]->content : '' }}</p>
          <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
        </div>
        {{-- <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Make Donation</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Become A Volunteer</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Sponsorship</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div> --}}
      </div>
    </section>


      
   