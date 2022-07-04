@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_7.jpg') }});" data-stellar-background-ratio="0.5">
        
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class = "text-danger">{{ $item->aboutMissionVision->page_title }}</h1>
               {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $item->aboutMissionVision->page_title }}</h1>
              <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $item->aboutMissionVision->page_des}}</p>
            </div>
          </div>
        </div>
    </div>

  
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">

                    <div class="img img-about align-self-stretch" style="background-image: url(https://www.ayude.be/wp-content/uploads/2021/05/FB_IMG_1620086337227_edit_349678056188307-1.jpg); width: 100%;"></div>

                </div>
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">{{ $item->aboutMissionVision->header_one }}</h2>
                    <p>
                        {{ $item->aboutMissionVision->header_one_des1 }}
                        <br>
                        <span>
                            <ul>
                                <li>{{ $item->aboutMissionVision->list_1}}</li>
                                <li>{{ $item->aboutMissionVision->list_2 }}</li>
                                <li>{{ $item->aboutMissionVision->list_3 }}</li>
                            </ul>
                        </span>
                        <br>
                        {{ $item->aboutMissionVision->header_one_des2 }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">{{ $item->aboutMissionVision->two }}</h2>
                    <p>
                        {{ $item->aboutMissionVision->header_one_des1 }}                     
                        <br>
                        <br>
                        {{ $item->aboutMissionVision->header_one_des2 }}    
                    </p>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch" style="background-image: url(https://www.ayude.be/wp-content/uploads/2021/02/FB_IMG_1613202447687_edit_89341461518658-2-450x600.jpg); width: 100%;"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section ftco-animate text-center">
                  <p>{{ $item->aboutMissionVision->community_des }}    </p>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff p-5">
                        <div class="container d-flex flex-column align-items-center">
                            <div class="img" style="background-image: url({{ asset('images/person_1.jpg') }});"></div>
                            <div class="d-flex flex-column align-items-center">
                                <h3>Baltazar Mangaliman</h3>
                                <span class="position text-center">Senior Audit Manager at KPMG UK</span>

     
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff p-5">
                        <div class="container d-flex flex-column align-items-center">
                            <div class="img" style="background-image: url({{ asset('images/person_2.jpg') }});"></div>
                            <div class="d-flex flex-column align-items-center">
                                <h3>Lyza Pagapulan</h3>
                                <span class="position text-center">Faculty Designated as Research Extension Program Coordinator and Administrative Officer at Polytechnic University of the Philippines Calauan Campus</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff p-5">
                        <div class="container d-flex flex-column align-items-center">
                            <div class="img" style="background-image: url({{ asset('images/person_3.jpg') }});"></div>
                            <div class="d-flex flex-column align-items-center">
                                <h3>Mark Elson Leones</h3>
                                <span class="position text-center">Inventory Supervisor at Chemical Research Products Industrial Sales Inc. Water Treatment Facility</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff p-5">
                        <div class="container d-flex flex-column align-items-center">
                            <div class="img" style="background-image: url({{ asset('images/person_4.jpg') }});"></div>
                            <div class="d-flex flex-column align-items-center">
                                <h3>Liesel Pagapulan</h3>
                                <span class="position text-center">HR Manager at Care Techniques Saudi Arabia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff p-5">
                        <div class="container d-flex flex-column align-items-center">
                            <div class="img" style="background-image: url({{ asset('images/person_5.jpg') }});"></div>
                            <div class="d-flex flex-column align-items-center">
                                <h3>Michelle Makinano</h3>
                                <span class="position text-center">Administration and Human Resource Officer as SMSG Communication Ltd. Software Development</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection