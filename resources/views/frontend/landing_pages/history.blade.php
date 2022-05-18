@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_7.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
               {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">History</h1>
              {{-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">The key mission of Ayude is to provide for the poorest of the poor – more specifically the numerous (street) children in less-developed countries. We try to improve the pitiful life circumstances of these children and their families by meeting their physical, mental and spiritual needs. </p> --}}
            </div>
          </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h2 class="mb-4">How did Ayude originate?</h2>
                    <p>
                        After a visit to the Philippines, Charles Verberckmoes was moved by seeing the conditions in which the children of Manila (the capital) live in the slums. Together with a few friends (now the administrators) he founded an organization aimed at improving the economic, social and mental condition of poor (street) children.
                        <br>
                        <br>
                        We soon came into contact with a local Filipino aid organization (led by Steve Mirpuri) who shared the same vision as Ayude. Thus Ayude for a New Day (the Spanish word for Help Mee! For a new day) was founded as a non-profit organization in 1994.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-3">
                <img src="https://www.ayude.be/wp-content/uploads/2021/05/History-3.png" alt="" srcset="">
            </div>

        </div>
    </section>
@endsection