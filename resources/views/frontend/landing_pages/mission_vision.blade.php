@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_7.jpg') }});" data-stellar-background-ratio="0.5">

        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class = "text-warning">{{ !empty($item->aboutMissionVision->page_title) ? $item->aboutMissionVision->page_title : '' }}</h1>
              {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
              {{-- <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $item->aboutMissionVision->page_title }}</h1> --}}
              <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ !empty($item->aboutMissionVision->page_des) ? $item->aboutMissionVision->page_des : ''}}</p>
            </div>
          </div>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex ftco-animate">

                    <div class="img img-about align-self-stretch" style="background-image: url({{ !empty($item->aboutMissionVision->mission_image_path) ? url('storage/'.$item->aboutMissionVision->mission_image_path) : asset('images/mission.jpg') }}); width: 100%;"></div>
                    {{-- <img src="{{ url('storage/'.$item->aboutMissionVision->mission_image_path) }}" alt=""> --}}
                    {{-- <div class="img img-about align-self-stretch" style="background-image: url({{ url('storage/'.$item->aboutMissionVision->vision_image_path) }}); width: 100%;"></div> --}}
                </div>
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">{{ !empty($item->aboutMissionVision->header_one) ? $item->aboutMissionVision->header_one : '' }}</h2>
                    <p>
                        {{ !empty($item->aboutMissionVision->header_one_des1) ? $item->aboutMissionVision->header_one_des1 : '' }}
                        <br>
                        <span>
                            <ul>
                                <li>{{ !empty($item->aboutMissionVision->list_1) ? $item->aboutMissionVision->list_1 : ''}}</li>
                                <li>{{ !empty($item->aboutMissionVision->list_2) ? $item->aboutMissionVision->list_2 : '' }}</li>
                                <li>{{ !empty($item->aboutMissionVision->list_3) ? $item->aboutMissionVision->list_3 : '' }}</li>
                            </ul>
                        </span>
                        <br>
                        {{ !empty($item->aboutMissionVision->header_one_des2) ? $item->aboutMissionVision->header_one_des2 : '' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">{{ !empty($item->aboutMissionVision->header_two) ? $item->aboutMissionVision->header_two : '' }}</h2>
                    <p>
                        {{ !empty($item->aboutMissionVision->header_two_des1) ? $item->aboutMissionVision->header_two_des1 : '' }}
                        <br>
                        <br>
                        {{ !empty($item->aboutMissionVision->header_two_des2) ? $item->aboutMissionVision->header_two_des2 : '' }}
                    </p>
                </div>
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-about align-self-stretch" style="background-image: url({{ !empty($item->aboutMissionVision->vision_image_path) ? url('storage/'.$item->aboutMissionVision->vision_image_path) : asset('images/vision.jpg') }}); width: 100%;"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section ftco-animate text-center">
                  <p>{{ !empty($item->aboutMissionVision->community_des) ? $item->aboutMissionVision->community_des : '' }}</p>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                    <div class="staff p-5">
                        <div class="container d-flex flex-column align-items-center">
                            <div class="img" style="background-image: url({{ asset('images/Baltazar.png') }});"></div>
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
                            <div class="img" style="background-image: url({{ asset('images/Lyza.png') }});"></div>
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
                            <div class="img" style="background-image: url({{ asset('images/Leones.png') }});"></div>
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
                            <div class="img" style="background-image: url({{ asset('images/Liesel.png') }});"></div>
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
                            <div class="img" style="background-image: url({{ asset('images/Makinano.png') }});"></div>
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
