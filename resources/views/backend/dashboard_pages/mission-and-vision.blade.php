@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-title">
              {{ __('History') }}
            </h1>
          </div>
          <div class="col-auto">
            <div class="btn-list">
              <a href="{{ route('dashboard.mission-and-vision.edit') }}" class="btn d-none d-md-inline-flex btn-primary">
                <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                <!-- SVG icon code -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                    <path d="M16 5l3 3"></path>
                 </svg>
                Edit
              </a>

            <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/select -->
	                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M9 11l3 3l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Languages') }}
                            </span>
            </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a class="dropdown-item" href="#">
                               <span><img src="{{ asset('images/en.png') }}" alt="" class="m-2">{{ __('English') }}</span>

                            </a>
                            <a class="dropdown-item" href="#">
                                <span><img src="{{ asset('images/fr.png') }}" alt="" class="m-2">{{ __('French') }}</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <span><img src="{{ asset('images/nl.png') }}" alt="" class="m-2">{{ __('Dutch') }}</span>
                            </a>
                        </div>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="page-body">
    <div class="container-xl">
      <div class="card card-lg">
        <div class="card-body">
          <div class="row g-4">
            <div class="col-12 markdown">
              <h1>Mission and Vision</h1>
              <p>The key mission of Ayude is to provide for the poorest of the poor – more specifically the numerous (street) children in less-developed countries. We try to improve the pitiful life circumstances of these children and their families by meeting their physical, mental and spiritual needs.</p>
            </div>
            <hr>
            <div class="col-md-6 markdown">
              <h2>Photo / Image</h2>
              <div class="row" style="width: 50%">
                <img src="https://www.ayude.be/wp-content/uploads/2021/05/FB_IMG_1620086337227_edit_349678056188307-1.jpg" alt="" srcset="">
            </div>
            </div>
            <div class="col-md-6 markdown">
            <h2>Our Mission</h2>
            <p> 1. Ayude supports local projects against structural poverty in southern less-developed countries.</p>
            <ul>
                <li>Ayude, with the cooperation of partner organisations in third world countries,fights for improvement of life circumstances of (street) children by addressing the fundamental causes and consequences of poverty.</li>
                <li>We accompany local partners in their endeavors when setting up durable livelihood projects, e.g. such as granting microcredit, alternative learning methods for unskilled adults and parents etcetera…</li>
                <li>The partner organisations of Ayude provide help to street- and underprivileged children and their communities, without making any distinction in religion, race, gender, age or political beliefs.</li>
            </ul>
            <p>2. We try to sensitize the people in Belgium and the West as much as possible for the North-South divide and to raise funds for projects aimed at relieving the plight of poor (street) children in the less-developed countries.</p>
            </div>
            <div class="col-md-6 markdown">
                <h2>Our Vision</h2>
                <p>Ayude has as its vision to show as much as possible to underprivileged and less fortunate street children in this world that they too are important. Driven by our Christian world view we do not make a distinction in race, religion or political belief. For Ayude every child is unique and priceless in its worth.</p>

                <p>Through our programs we prevent that children, who are usually underprivileged and neglected, often leave their families out of necessity and consequently end up along the streets of the city into criminal environments like child prostitution and drug trafficking. We believe that sustainable development education is the key to get these children out of the vicious cycle of poverty and consequently to develop their self-esteem and self-confidence. Principally we are working towards a sustainable improvement of living circumstances and conditions for themselves, their families and communities. Hereby they can, with renewed hope and zest for life, provide in their own livelihood and learn to take responsibility inside the micro society (community) around them.</p>
                </div>
            <div class="col-md-6 markdown">
                <h2>Photo / Image</h2>
                <div class="row" style="width: 50%">
                  <img src="https://www.ayude.be/wp-content/uploads/2021/02/FB_IMG_1613202447687_edit_89341461518658-2-450x600.jpg" alt="" srcset="">
              </div>
              </div>
              <hr>
            <div class="col-md-12 markdown">
             <p>After 20 years we can say that our approach is paying off! Today the children of 1995 who have been helped are working as certified accountants, psychologists, social workers etc. And many of them are now in turn actively involved in our projects because they experience the value and fruit of the help they have experienced themselves before. , want to pass on to the street children in their own living environment. The commitment of professional and well-trained people (teachers, doctor (s), dentists, nurses, etc.) is combined from the outset with the active commitment of all those directly involved, the children, their parents and all members of the communities.</p>
            </div>
            <div class="col-md-12 markdown">
                    <div class="card">
                      <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Title</th>
                              <th class="w-1"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Lorry Mion</div>
                                    <div class="text-muted"><a href="#" class="text-reset">lmiona@livejournal.com</a></div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Automation Specialist IV</div>
                                <div class="text-muted">Accounting</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2" style="background-image: url(./static/avatars/004f.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Leesa Beaty</div>
                                    <div class="text-muted"><a href="#" class="text-reset">lbeatyb@alibaba.com</a></div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Editor</div>
                                <div class="text-muted">Services</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2" style="background-image: url(./static/avatars/007m.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Perren Keemar</div>
                                    <div class="text-muted"><a href="#" class="text-reset">pkeemarc@yahoo.com</a></div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Analog Circuit Design manager</div>
                                <div class="text-muted">Services</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2">SA</span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Sunny Airey</div>
                                    <div class="text-muted"><a href="#" class="text-reset">saireyd@prlog.org</a></div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Nuclear Power Engineer</div>
                                <div class="text-muted">Engineering</div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex py-1 align-items-center">
                                  <span class="avatar me-2" style="background-image: url(./static/avatars/009m.jpg)"></span>
                                  <div class="flex-fill">
                                    <div class="font-weight-medium">Geoffry Flaunders</div>
                                    <div class="text-muted"><a href="#" class="text-reset">gflaunderse@loc.gov</a></div>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div>Software Test Engineer II</div>
                                <div class="text-muted">Accounting</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
  </div>

@endsection
