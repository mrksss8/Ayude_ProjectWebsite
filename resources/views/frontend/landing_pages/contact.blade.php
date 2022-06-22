@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="{{ route('navigate', ['page' => 'index', 'lang' => $item->id]) }}">Home</a></span> <span>Contact</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4 text-center">
                    <h2>Contact Information</h2>
                </div>

                <div class="col-6">

                    <div class="col-md-12 mb-4">
                        <h2 class="h4">{{ $item->registeredOffice[0]->header }}</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p><span>Address:</span>{{ $item->registeredOffice[0]->address }}</p>
                    </div>
                    <div class="col-md-12">
                        <p><span>Company No.:</span> {{ $item->registeredOffice[0]->companyNumber }}</p>
                    </div>
                    <div class="col-md-12">
                        <p><span>Tel:</span> {{ $item->registeredOffice[0]->tel }}</p>
                    </div>
                    <div class="col-md-12">
                        <p><span>Email:</span> <a href="{{ "mailto:".$item->registeredOffice[0]->email }}">{{ $item->registeredOffice[0]->email }}</a></p>
                    </div>
                    <div class="col-md-12">
                        <p>{{ $item->registeredOffice[0]->bank }}</p>
                    </div>
                </div>
                <div class="col-6">


                    <div class="col-md-12 mb-4">
                        <h2 class="h4">{{ $item->generalSecretariat[0]->header }}</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p> {{ $item->generalSecretariat[0]->name }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>{{ $item->generalSecretariat[0]->address }}</p>
                    </div>

                    <div class="col-md-12">
                        <p>GSM: {{ $item->generalSecretariat[0]->gsm }}</p>
                    </div>

                </div>



            </div>
            <div class="row d-flex mb-5 contact-info">

            </div>

            {{-- <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <h4 class="mb-4">Do you have any questions?</h4>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6" id="map"></div>
            </div> --}}
        </div>
    </section>
@endsection
