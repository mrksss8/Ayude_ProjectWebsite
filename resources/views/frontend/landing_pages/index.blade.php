@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url('{{ asset('images/bg_7.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->home[0]->header) ? $item->home[0]->header : '' }}</h1>
              <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->home[0]->content) ? $item->home[0]->content : '' }}</p>
              {{-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p> --}}
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
          <p>Or</p>
          {{-- <button type="button" class="btn btn-success" id="donation-btn">Donate Now</button> --}}
          <p><a href="{{ route('helpus', $item->id) }}" class="btn btn-secondary px-3 py-2 mt-2" style="border-radius: 5px">Donate Now</a></p>

        </div>
      </div>
    </section>

@endsection

