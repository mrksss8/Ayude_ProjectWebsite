@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
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
                        <h2 class="h4">Registered Office: Ayude for A New Day VZW</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p><span>Address:</span> Daalstraat 71 <br>
                            1790 Affligem, Belgium</p>
                    </div>
                    <div class="col-md-12">
                        <p><span>Company No.:</span> 452924672</p>
                    </div>
                    <div class="col-md-12">
                        <p><span>Tel:</span> 053 68 21 50</p>
                    </div>
                    <div class="col-md-12">
                        <p><span>Email:</span> <a href="mailto:ayude4anewday@gmail.com">ayude4anewday@gmail.com</a></p>
                    </div>
                    <div class="col-md-12">
                        <p>IBAN BE63 7805 7850 7508, BIC: GKCCBEBB</p>
                    </div>
                </div>
                <div class="col-6">


                    <div class="col-md-12 mb-4">
                        <h2 class="h4">General Secretariat: Ayude for A New Day</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p> Martine Verschueren</p>
                    </div>
                    <div class="col-md-12">
                        <p>Ten Bos 5</p>
                    </div>
                    <div class="col-md-12">
                        <p>9420 Burst</p>
                    </div>

                    <div class="col-md-12">
                        <p>GSM: 0475 237 285</p>
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
