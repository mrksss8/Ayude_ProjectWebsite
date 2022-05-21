@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-title">
              {{ __('Contact Us') }}
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
        <h2>Registered Office</h2>
        <div class="card-body">
        <!-- Registered Office -->
        <div class="row">
            <h3 class="text-muted"><em>English </em><img src="{{ asset('images/en.png') }}"></h3>
            <div class="mb-3 col-6">

                <label class="form-label">Header:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Registered office Ayude for A New Day vzw">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Address:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Daalstraat 71 1790 Affligem, Belgium">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Company Number:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Company number: 452924672">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Tel:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="053 68 21 50">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">E-mail:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="ayude4anewday@gmail.com">
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Bank:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="IBAN BE63 7805 7850 7508, BIC: GKCCBEBB">
            </div>
        </div>
    </div>

        <hr>

        <h2>General Secretariat</h2>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-12">
                <label class="form-label">Header:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="General Secretariat Ayude for A New Day">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Martine Verschueren">
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Address:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Ten Bos 5 9420 Burst">
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">GSM:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="0475 237 285">
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
