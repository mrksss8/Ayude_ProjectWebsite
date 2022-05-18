@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
               {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p> --}}
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Mission & Vision</h1>
              <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">The key mission of Ayude is to provide for the poorest of the poor – more specifically the numerous (street) children in less-developed countries. We try to improve the pitiful life circumstances of these children and their families by meeting their physical, mental and spiritual needs. </p>
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
                    <h2 class="mb-4">Our Mission</h2>
                    <p>
                        1. Ayude supports local projects against structural poverty in southern less-developed countries.
                        <br>
                        <span>
                            <ul>
                                <li>Ayude, with the cooperation of partner organisations in third world countries,fights for improvement of life circumstances of (street) children by addressing the fundamental causes and consequences of poverty.</li>
                                <li>We accompany local partners in their endeavors when setting up durable livelihood projects, e.g. such as granting microcredit, alternative learning methods for unskilled adults and parents etcetera…</li>
                                <li>The partner organisations of Ayude provide help to street- and underprivileged children and their communities, without making any distinction in religion, race, gender, age or political beliefs.</li>
                            </ul>
                        </span>
                        <br>
                        2. We try to sensitize the people in Belgium and the West as much as possible for the North-South divide and to raise funds for projects aimed at relieving the plight of poor (street) children in the less-developed countries.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 pl-md-5 ftco-animate">
                    <h2 class="mb-4">Our Vision</h2>
                    <p>
                        Ayude has as its vision to show as much as possible to underprivileged and less fortunate street children in this world that they too are important. Driven by our Christian world view we do not make a distinction in race, religion or political belief. For Ayude every child is unique and priceless in its worth.                     
                        <br>
                        <br>
                        Through our programs we prevent that children, who are usually underprivileged and neglected, often leave their families out of necessity and consequently end up along the streets of the city into criminal environments like child prostitution and drug trafficking. We believe that sustainable development education is the key to get these children out of the vicious cycle of poverty and consequently to develop their self-esteem and self-confidence. Principally we are working towards a sustainable improvement of living circumstances and conditions for themselves, their families and communities. Hereby they can, with renewed hope and zest for life, provide in their own livelihood and learn to take responsibility inside the micro society (community) around them.
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
                  <p>After 20 years we can say that our approach is paying off! Today the children of 1995 who have been helped are working as certified accountants, psychologists, social workers etc. And many of them are now in turn actively involved in our projects because they experience the value and fruit of the help they have experienced themselves before. , want to pass on to the street children in their own living environment. The commitment of professional and well-trained people (teachers, doctor (s), dentists, nurses, etc.) is combined from the outset with the active commitment of all those directly involved, the children, their parents and all members of the communities.</p>
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