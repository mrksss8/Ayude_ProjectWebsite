@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Overview
          </div>
          <h2 class="page-title">
            Dashboard
          </h2>
        </div>
      </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">

        <div class="alert alert-success alert-dismissible" role="alert">
            <div>
                <h4 class="alert-title">{{ __('Welcome') }} {{ auth()->user()->name ?? null }}</h4>
                <div class="text-muted">{{ __('You are logged in!') }}</div>
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
        <div class="row row-deck row-cards">

            <!-- The code below is displaying the total donations for the day, week, month, and year. -->

            <div class="col-sm-6 col-lg-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="subheader">Donated Today</div>
                  </div>
                  <div class="h1 mb-3"> € {{number_format($daily, 2)  }}</div>
                  {{-- <div class="d-flex justify-content-end">
                        <button class="btn btn-primary btn-pill">View</button>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Donated This Week</div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2"> € {{number_format($weekly, 2)  }}</div>
                        <div class="me-auto">
                          {{-- <span class="text-green d-inline-flex align-items-center lh-1">
                            8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                          </span> --}}
                        </div>
                      </div>
                    {{-- <div class="d-flex justify-content-end">
                          <button class="btn btn-primary btn-pill">View</button>
                    </div> --}}
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Donated This Month</div>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <div class="h1 mb-3 me-2"> € {{number_format($monthly, 2)  }}</div>
                        <div class="me-auto">
                          {{-- <span class="text-green d-inline-flex align-items-center lh-1">
                            8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                          </span> --}}
                        </div>
                      </div>
                    {{-- <div class="d-flex justify-content-end">
                          <button class="btn btn-primary btn-pill">View</button>
                    </div> --}}
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-primary">
                  <div class="card-stamp">
                    <div class="card-stamp-icon bg-white text-primary">
                      <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash-banknote" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/cash-banknote</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                        <rect x="3" y="6" width="18" height="12" rx="2"></rect>
                        <line x1="18" y1="12" x2="18.01" y2="12"></line>
                        <line x1="6" y1="12" x2="6.01" y2="12"></line>
                    </svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Total Donations</h3>
                    <div class="h1 mb-3 me-2">€ {{number_format($total, 2)  }}</div>
                  </div>
                </div>
            </div>

            <!-- Creating a card with a scrollable body. -->

            <div class="col-md-12">
                <div class="card" style="height: calc(24rem + 10px)">
                  <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    <div class="divide-y">
                      @forelse ($news as $post)
                        <div>
                          <a href="{{ route('news.show', ['id'=>$post->id, 'lang'=>$post->language_id]) }}" style="color: inherit;">
                            <div class="row">
                              <div class="col-auto">
                                <span class="avatar">AD</span>
                              </div>
                              <div class="col">
                                <div class="text-truncate">
                                  <strong>{{ $post->title }}</strong>
                                  <p class="text-truncate">{{ $post->body }}</p>
                                </div>
                                <div class="text-muted">{{ $post->updated_at }}</div>
                              </div>
                            </div>
                          </a>
                        </div>
                      @empty
                        
                      @endforelse
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
