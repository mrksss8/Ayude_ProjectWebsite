@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-title">
              {{ __('Board') }}
            </h1>
          </div>
          <div class="col-auto">
            <div class="btn-list">
              {{-- <a href="#" class="btn d-none d-md-inline-flex btn-primary">
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
              </a> --}}

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
        <h2>Members</h2>
        <!-- Table -->
        <div class="col-12">
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
                      <td>
                        <a href="{{ route('dashboard.show_board') }}">Edit</a>
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
                      <td>
                        <a href="#">Edit</a>
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
                      <td>
                        <a href="#">Edit</a>
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
                      <td>
                        <a href="#">Edit</a>
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
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

</div>



@endsection
