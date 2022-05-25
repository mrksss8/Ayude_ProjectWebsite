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
        <h2>Member Information</h2>
        <div class="row-cards row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-3">
                      <span class="avatar avatar-xl avatar-rounded" style="background-image: url(./static/avatars/006f.jpg)"></span>
                    </div>
                    <div class="card-title mb-2">Avivah Mugleston</div>
                    <div class="text-muted">* Position? *</div>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">Basic info</div>
                    <div class="mb-2">
                      <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/mail</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <polyline points="3 7 12 13 21 7"></polyline>

                     </svg>
                        E-mail: <strong>admin@example.com</strong>
                    </div>
                    <div class="mb-2">
                      <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/briefcase</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="12" y1="12" x2="12" y2="12.01"></line>
                        <path d="M3 13a20 20 0 0 0 18 0"></path></svg>
                      Worked at: <strong>Devpulse</strong>
                    </div>
                    <div class="mb-2">
                      <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/home</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                    </svg>
                      Lives in: <strong>Šentilj v Slov. Goricah, Slovenia</strong>
                    </div>
                    <div class="mb-2">
                      <!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><desc>Download more icon variants from https://tabler-icons.io/i/map-pin</desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><circle cx="12" cy="11" r="3"></circle><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path></svg>
                      From: <strong><span class="flag flag-country-si"></span>
                        Slovenia</strong>
                    </div>
                    <div class="mb-2">
                      <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><desc>Download more icon variants from https://tabler-icons.io/i/calendar</desc><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
                      Birth date: <strong>13/01/1985</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>

            <div class="row">
                <div class="mb-3 col-6">

                    <label class="form-label">Full Name:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Avivah Mugleston">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Position:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="* Position? *">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">E-mail:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="admin@example.com">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Workplace:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Devpulse">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">Address:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Šentilj v Slov. Goricah, Slovenia">
                </div>
                <div class="mb-3 col-3">
                    <label class="form-label">Country:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Slovenia">
                </div>
                <div class="mb-3 col-3">
                    <label class="form-label">Birth date:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="13/01/1985">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-6">
                    <div class="form-label">Picture / Image</div>
                    <input type="file" class="form-control">
                  </div>
            </div>
    </div>
</div>


@endsection
