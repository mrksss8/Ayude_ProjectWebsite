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
              <a href="{{ route('dashboard.history_edit') }}" class="btn d-none d-md-inline-flex btn-primary">
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
        <div class="card-body ">
          <div class="row g-4">
            <div class="col-12 markdown">
              <h1>How did Ayude Originate?</h1>
              <p>
                After a visit to the Philippines, Charles Verberckmoes was moved by seeing the conditions in which the children of Manila (the capital) live in the slums. Together with a few friends (now the administrators) he founded an organization aimed at improving the economic, social and mental condition of poor (street) children.
                We soon came into contact with a local Filipino aid organization (led by Steve Mirpuri) who shared the same vision as Ayude. Thus Ayude for a New Day (the Spanish word for Help Mee! For a new day) was founded as a non-profit organization in 1994.
                </p>
            </div>
            <div class="row justify-content-center mb-5 pb-3">
                <img src="https://www.ayude.be/wp-content/uploads/2021/05/History-3.png" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
