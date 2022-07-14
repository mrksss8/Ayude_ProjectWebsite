@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-title">
                        {{ __('Help Us') }}
                    </h1>
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        @if ($helpUs != null)
                            <a href="{{ route('help-us.edit', $helpUs->language_id) }}"
                                class="btn d-none d-md-inline-flex btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                                <!-- SVG icon code -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                                Edit
                            </a>
                        @else
                            <a href="{{ route('help-us.create', $lang_id) }}" class="btn d-none d-md-inline-flex btn-yellow" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Create
                            </a>
                        @endif


                        <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/select -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="16" rx="2" />
                                    <path d="M9 11l3 3l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{-- {{ __('Languages') }} --}}
                                Languages
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            @foreach ($languages as $language)
                                <a class="dropdown-item" href="{{ route('help-us.show', $language->id) }}">
                                    <span><img src="{{ asset('images/' . $language->symbol . '.png') }}" alt=""
                                            class="m-2">{{ $language->language }}</span>

                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($helpUs != null)
    <div class="page-body">
        <div class="container-xl">
            @component('backend.components.alert')
            @endcomponent
            <div class="card card-lg">
                <div class="card-header d-flex align-items-center justify-content-center">
                   <span><img src="{{ asset('images/' . $helpUs->language->symbol . '.png') }}" alt=""
                                class="m-2">{{ $helpUs->language->language }} Language</span>
                </div>
                <!-- Under First Title -->
                <div class="card-body ">
                    <div class="row g-4">
                        <div class="col-12 markdown">
                            <h1 class="text-center">{{ $helpUs->page_title }}</h1>
                            <h3>{{ $helpUs->sub_header1 }}</h3>
                            <br>
                            <h3 class="mt-4">{{ $helpUs->sub_header2 }}</h3>
                            <p class="mt-4">{{ $helpUs->paragraph1 }}</p>
                        </div>
                        <!--Card-->
                        <div class="col-12 markdown">
                            <div class="card-group mt-4">
                                <div class="card">
                                    <!-- For each here -->
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $helpUs->card_header }}</h4>
                                        <p class="card-text">{{ $helpUs->card_des }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card">

                                    <div class="card-body">
                                        <h4 class="card-title">One-time donations: these are of course also very welcome.
                                        </h4>
                                        <p class="card-text">Some examples:</p>
                                        <ul>
                                            <li>€ 40 is already sufficient for a complete treatment against the still fatal
                                                ailment tuberculosis, with an almost certain cure as a result.</li>
                                            <li>For only half a euro you can sponsor a meal for the malnourished children.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second Title -->
                        <h1 class="text-center">{{ $helpUs->page_second_title }}</h1>
                        <p>{{ $helpUs->paragraph2 }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
