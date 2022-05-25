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
                <a href="#" class="btn d-none d-md-inline-flex btn-success">
                    <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                    <!-- SVG icon code -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/device-floppy</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                        <circle cx="12" cy="14" r="2"></circle>
                        <polyline points="14 4 14 8 8 8 8 4"></polyline>
                     </svg>
                    Save
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
<div class="card card-md">
    <div class="card-body">
      <div class="row g-4">
        <div class="col-12 markdown">
            <div class="row">
                <div class="mb-1 col-6">

                    <label class="form-label">Main Header:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Mission and Vision">
                </div>
            </div>
            <div class="mb-1">
                <label class="form-label">Paragraph</label>
                <textarea class="form-control" data-bs-toggle="autosize" placeholder="The key mission of Ayude is to provide for the poorest of the poor – more specifically the numerous (street) children in less-developed countries. We try to improve the pitiful life circumstances of these children and their families by meeting their physical, mental and spiritual needs." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
              </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="col-md-12">
            <div class="card">
              <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                  <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">Mission</a>
                </li>
                <li class="nav-item">
                  <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">Vision</a>
                </li>
                <li class="nav-item">
                  <a href="#tabs-activity-17" class="nav-link" data-bs-toggle="tab">Community</a>
                </li>
              </ul>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="tabs-home-17">
                    <div class="col-md-12 markdown">
                        <div class="row">
                            <div class="mb-3 col-6">

                                <label class="form-label">Header One:</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Our Mission">
                            </div>
                            <div class="mb-3 col-6">
                                <div class="form-label">Picture / Image</div>
                                <input type="file" class="form-control">
                              </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Paragraph</label>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="1. Ayude supports local projects against structural poverty in southern less-developed countries." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                        </div>
                       <div class="row">
                        <div class="mb-3 col-4">
                            <label class="form-label">List One</label>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="Ayude, with the cooperation of partner organisations in third world countries,fights for improvement of life circumstances of (street) children by addressing the fundamental causes and consequences of poverty." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">List Two</label>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="We accompany local partners in their endeavors when setting up durable livelihood projects, e.g. such as granting microcredit, alternative learning methods for unskilled adults and parents etcetera…" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">List Three</label>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="The partner organisations of Ayude provide help to street- and underprivileged children and their communities, without making any distinction in religion, race, gender, age or political beliefs." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                        </div>
                       </div>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-profile-17">
                    <div class="col-md-12 markdown">
                        <div class="row">
                            <div class="mb-3 col-6">

                                <label class="form-label">Header Two:</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Our Vision">
                            </div>
                            <div class="mb-3 col-6">
                                <div class="form-label">Picture / Image</div>
                                <input type="file" class="form-control">
                              </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Paragraph</label>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="Ayude has as its vision to show as much as possible to underprivileged and less fortunate street children in this world that they too are important. Driven by our Christian world view we do not make a distinction in race, religion or political belief. For Ayude every child is unique and priceless in its worth." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Paragraph</label>
                            <textarea class="form-control" data-bs-toggle="autosize" placeholder="Through our programs we prevent that children, who are usually underprivileged and neglected, often leave their families out of necessity and consequently end up along the streets of the city into criminal environments like child prostitution and drug trafficking. We believe that sustainable development education is the key to get these children out of the vicious cycle of poverty and consequently to develop their self-esteem and self-confidence. Principally we are working towards a sustainable improvement of living circumstances and conditions for themselves, their families and communities. Hereby they can, with renewed hope and zest for life, provide in their own livelihood and learn to take responsibility inside the micro society (community) around them." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                        </div>


                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-activity-17">
                    <div class="mb-3">
                        <label class="form-label">Paragraph</label>
                        <textarea class="form-control" data-bs-toggle="autosize" placeholder="Through our programs we prevent that children, who are usually underprivileged and neglected, often leave their families out of necessity and consequently end up along the streets of the city into criminal environments like child prostitution and drug trafficking. We believe that sustainable development education is the key to get these children out of the vicious cycle of poverty and consequently to develop their self-esteem and self-confidence. Principally we are working towards a sustainable improvement of living circumstances and conditions for themselves, their families and communities. Hereby they can, with renewed hope and zest for life, provide in their own livelihood and learn to take responsibility inside the micro society (community) around them." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                    </div>
                    <div class="row-cards row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                              <div class="card-body text-center">
                                <div class="mb-4">
                                  <span class="avatar avatar-xl avatar-rounded" style="background-image: url(./static/avatars/006f.jpg)"></span>
                                </div>
                                <div class="card-title mb-3">Avivah Mugleston</div>
                                <div class="text-muted">* Position? *</div>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-9">
                            <div class="card">
                              <div class="card-body">
                                <div class="card-title">Basic info</div>
                                <div class="row">
                                    <div class="mb-3 col-9">

                                        <label class="form-label">Full Name:</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="John Doe">
                                    </div>
                                    <div class="mb-3 col-3">
                                        <div class="form-label">Picture / Image</div>
                                        <input type="file" class="form-control">
                                      </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-4">

                                        <label class="form-label">Company:</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Google">
                                    </div>
                                    <div class="mb-3 col-4">

                                        <label class="form-label">Position:</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="Machine Learning Expert">
                                    </div>
                                    <div class="mb-3 col-4">

                                        <label class="form-label">E-mail:</label>
                                        <input type="text" class="form-control" name="example-text-input" placeholder="admin@example.com">
                                    </div>

                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>

@endsection
