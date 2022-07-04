@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_7.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        {{ $item->aboutBoard->page_title }}</h1>
                    <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        {{ $item->aboutBoard->page_des }} </p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row mb-5 pb-3">
                @foreach ($boardPersons as $boardPerson)
                    <div class="col-4 text-center">
                        <img src="{{ url('storage/' . $boardPerson->image_path) }}" alt="Board Image"
                            style="width: 200px; height:auto;">
                        <p>{{ $boardPerson->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
