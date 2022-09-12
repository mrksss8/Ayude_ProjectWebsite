@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Financing & Targeted Areas</span></p> --}}
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        {{ $item->financing->page_title_1 }}</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 pl-md-5 ftco-animate">
                    <p>{{ $item->financing->page_title_1_paragraph1 }}</p>

                    <h3>{{ $item->financing->page_title_1_sub_header1 }}</h3>
                    <ul>
                        @foreach ($lists as $list)
                            <li>{{ $list->page_title_1_sub_header1_list1 }}</li>
                        @endforeach 
                    </ul>

                    <p>
                        {{ $item->financing->page_title_1_paragraph2 }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_5.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span <h1
                            class="text-primary mb-3 bread" style="font-size: 32px;"
                            data-scrollax="properties: { translateY: '30%',}">{{ $item->financing->page_title2 }}</h1>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 pl-md-5 ftco-animate">
                    <p>{{ $item->financing->page_title_2_paragraph }}</p>

                    <h3>{{ $item->financing->page_title_2_sub_header1 }}</h3>

                    <p>
                        {{ $item->financing->page_title_2_sub_header1_description }}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 pl-md-5 ftco-animate">
                <div class="card-deck">

                    @foreach ($cards as $card)
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ url('storage/financing/' . $card->page_title_2_sub_header1_card_image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$card->page_title_2_sub_header1_card_head }}</h5>
                            <p class="card-text">{{ $card->page_title_2_sub_header1_card_description }}</p>

                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="card">
                        <img class="card-img-top"
                            src="https://www.ayude.be/wp-content/uploads/2021/02/WhatsApp-Image-2021-02-14-at-10.51.03-AM-6-1-1024x768.jpeg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Education</h5>
                            <p class="card-text">We believe that education is the key to breaking the cycle of the vicious
                                poverty circle. That is why we place education at the center of all our partner
                                organizations. Special attention is paid to girls who in certain societies still have no
                                right to education.</p>
                            <span id="dots3">...</span>
                            <p id="more3" style="display: none;"> Furthermore, the children are taught the most
                                important values ​​of life through regular activities and organization of events (often on
                                Saturdays) comparable to the youth movements of ours (Scouts, Chiro etc.). On these
                                occasions the children and teenagers are taught interact responsibly and how they can
                                contribute to the development of their communities.

                                Furthermore, there is also education in English for the low-skilled parents, tutoring for
                                the children, education in hygiene and food safety regulations, cut and seam courses, dance
                                and song.
                            </p>
                            </p>

                            <button onclick="myFunction3()" id="myBtn3" class="btn btn-primary">Read more</button>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://www.ayude.be/wp-content/uploads/2021/02/2-1.jpeg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Food Distribution</h5>
                            <p class="card-text">Regular food distribution for malnourished children (1st, 2nd or 3rd
                                degree)</p>

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 pl-md-5 ftco-animate">
                    <h3>{{ $item->financing->page_title_2_sub_header2 }}</h3>
                    <p>
                       {{ $item->financing->page_title_2_sub_header2 }}
                    </p>

                    <h3>{{ $item->financing->page_title_2_sub_header3 }}</h3>

                    <p>{{ $item->financing->page_title_2_sub_header3 }}

                    <h3>{{ $item->financing->page_title_2_sub_header4 }}</h3>

                    <p>{{ $item->financing->page_title_2_sub_header4 }}
                   
                    {{-- <h3>3. Emergency Aid and Reconstruction <button onclick="myFunction()" id="myBtn"
                            class="btn btn-primary">Read more</button></h3>

                    <p>Ayude also occasionally provides assistance with natural disasters such as floods and earthquakes.
                        The first priority in these cases is to provide the affected areas with potable water and food. At a
                        later stage, help is also given in the reconstruction of the houses, schools, etc.<span
                            id="dots">...</span>
                    <p id="more" style="display: none;">Fathers of children from the programs, otherwise partially or
                        completely unemployed without benefits, actively participate in the construction of “houses” and the
                        construction of streets. Numerous testimonies of responsible parenting, restored marriages and
                        reunited families have been reaching us for many years, with the result very often community
                        gatherings and parent associations.</p>
                    </p> --}}

                    {{-- <h3>4. Supporting the often inferior position of women in certain societies <button
                            onclick="myFunction2()" id="myBtn2" class="btn btn-primary">Read more</button></h3>

                    <p>In addition to the professional care providers, it is not uncommon for the mothers who, as
                        “first-line volunteers”, actively participate in the implementation of the programs and the guidance
                        of the children and their families.
                        <span id="dots2">...</span>
                    <p id="more2" style="display: none;"> They prepare meals, help with medical assignments, receive and
                        teach in food safety, hygiene and family planning (according to the so-called “train the trainer”
                        principle) and often act as project coordinators.
                        India we have set up an education project especially for girls because in this country they are
                        still not treated equally in terms of education in many of the cases.</p>
                    </p> --}}


                </div>
            </div>
    </section>
@endsection

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction2() {
        var dots = document.getElementById("dots2");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

    function myFunction3() {
        var dots = document.getElementById("dots3");
        var moreText = document.getElementById("more3");
        var btnText = document.getElementById("myBtn3");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
