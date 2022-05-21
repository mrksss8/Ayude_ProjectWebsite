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
              <a href="{{ route('dashboard.edit.contact') }}" class="btn d-none d-md-inline-flex btn-primary">
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
        <h2>Registered Office</h2>
        <div class="card-body">
        <!-- Registered Office -->
        <div class="row">
            <h3 class="text-muted"><em>English </em><img src="{{ asset('images/en.png') }}"></h3>
            <div class="mb-3 col-6">

                <label class="form-label">Header:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Registered office Ayude for A New Day vzw" disabled>
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Address:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Daalstraat 71 1790 Affligem, Belgium" disabled>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Company Number:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="Company number: 452924672" disabled>
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Tel:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="053 68 21 50" disabled>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">E-mail:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="ayude4anewday@gmail.com" disabled>
            </div>
            <div class="mb-3 col-6">
                <label class="form-label">Bank:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="IBAN BE63 7805 7850 7508, BIC: GKCCBEBB" disabled>
            </div>
        </div>
    </div>

        <hr>

        <h2>General Secretariat</h2>
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col-12">
                <label class="form-label">Header:</label>
                <input type="text" class="form-control" name="example-text-input" placeholder="General Secretariat Ayude for A New Day" disabled>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-4">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Martine Verschueren" disabled>
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Address:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Ten Bos 5 9420 Burst" disabled>
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">GSM:</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="0475 237 285" disabled>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
