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
                  <div class="h1 mb-3">$143</div>
                  <div class="d-flex justify-content-end">
                        <button class="btn btn-primary btn-pill">View</button>
                  </div>
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
                        <div class="h1 mb-3 me-2">$1,200</div>
                        <div class="me-auto">
                          <span class="text-green d-inline-flex align-items-center lh-1">
                            8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                          </span>
                        </div>
                      </div>
                    <div class="d-flex justify-content-end">
                          <button class="btn btn-primary btn-pill">View</button>
                    </div>
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
                        <div class="h1 mb-3 me-2">$4,300</div>
                        <div class="me-auto">
                          <span class="text-green d-inline-flex align-items-center lh-1">
                            8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="3 17 9 11 13 15 21 7" /><polyline points="14 7 21 7 21 14" /></svg>
                          </span>
                        </div>
                      </div>
                    <div class="d-flex justify-content-end">
                          <button class="btn btn-primary btn-pill">View</button>
                    </div>
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
                    <div class="h1 mb-3 me-2">$4,300</div>
                  </div>
                </div>
            </div>

            <!-- Creating a card with a scrollable body. -->

            <div class="col-md-12">
                <div class="card" style="height: calc(24rem + 10px)">
                  <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    <div class="divide-y">
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar">JL</span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Jeffie Lewzey</strong> commented on your <strong>"I'm not a witch."</strong> post.
                            </div>
                            <div class="text-muted">yesterday</div>
                          </div>
                          <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/002m.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              It's <strong>Mallory Hulme</strong>'s birthday. Wish him well!
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                          <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/003m.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Dunn Slane</strong> posted <strong>"Well, what do you want?"</strong>.
                            </div>
                            <div class="text-muted">today</div>
                          </div>
                          <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/000f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Emmy Levet</strong> created a new project <strong>Morning alarm clock</strong>.
                            </div>
                            <div class="text-muted">4 days ago</div>
                          </div>
                          <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/001f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Maryjo Lebarree</strong> liked your photo.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar">EP</span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Egan Poetz</strong> registered new client as <strong>Trilia</strong>.
                            </div>
                            <div class="text-muted">yesterday</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/002f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Kellie Skingley</strong> closed a new deal on project <strong>Pen Pineapple Apple Pen</strong>.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/003f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Christabel Charlwood</strong> created a new project for <strong>Wikibox</strong>.
                            </div>
                            <div class="text-muted">4 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar">HS</span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Haskel Shelper</strong> change status of <strong>Tabler Icons</strong> from <strong>open</strong> to <strong>closed</strong>.
                            </div>
                            <div class="text-muted">today</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/006m.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Lorry Mion</strong> liked <strong>Tabler UI Kit</strong>.
                            </div>
                            <div class="text-muted">yesterday</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/004f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Leesa Beaty</strong> posted new video.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/007m.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Perren Keemar</strong> and 3 others followed you.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar">SA</span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Sunny Airey</strong> upload 3 new photos to category <strong>Inspirations</strong>.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/009m.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Geoffry Flaunders</strong> made a <strong>$10</strong> donation.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/010m.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Thatcher Keel</strong> created a profile.
                            </div>
                            <div class="text-muted">3 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/005f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Dyann Escala</strong> hosted the event <strong>Tabler UI Birthday</strong>.
                            </div>
                            <div class="text-muted">4 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/006f.jpg)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Avivah Mugleston</strong> mentioned you on <strong>Best of 2020</strong>.
                            </div>
                            <div class="text-muted">2 days ago</div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar">AA</span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong>Arlie Armstead</strong> sent a Review Request to <strong>Amanda Blake</strong>.
                            </div>
                            <div class="text-muted">2 days ago</div>
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
