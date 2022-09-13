@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    {{-- <h1 class="page-title">
                        {{ __('Help Us') }}
                    </h1> --}}
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        @if ($financing != null)
                            <a href="#"
                                class="btn d-none d-md-inline-flex btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                                <!-- SVG icon code -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                                Edit
                            </a>
                            {{-- @else
                        <a href="{{ route('about_history.create', $lang_id) }}" class="btn d-none d-md-inline-flex btn-yellow" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Create --}}
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
                                <a class="dropdown-item" href="{{ route('financing.show', $language->id) }}">
                                    <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt=""
                                            class="m-2">{{ $language->language }}</span>

                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Under First Title -->
    @if ($financing != null)
        <div class="page-body">
            <div class="container-xl">
                @component('backend.components.alert')
                @endcomponent
                <div class="card card-lg">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h1 class="page-title">
                            {{ __('Financing and Target Areas') }}
                        </h1>
                        <span><img src="https://flagcdn.com/16x12/{{ $current_language->symbol }}.png" alt=""
                                class="m-2">{{ $current_language->language }}</span>

                    </div>
                    <div class="card-body ">
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <h1 class="text-center">{{ $financing->page_title_1 }}</h1>
                                <br>
                                <p class="mt-4">{{ $financing->page_title_1_paragraph1 }}</p>

                                <h3 class="mt-4">{{ $financing->page_title_1_sub_header1 }}</h3>
                                <ul>
                                    @foreach ($lists as $list)
                                        <li>{{ $list->page_title_1_sub_header1_list1 }}</li>
                                    @endforeach

                                </ul>
                                <p class="mt-4">{{ $financing->page_title_1_paragraph2 }}</p>
                            </div>
                            <!--Card-->
                            <div class="col-12 markdown">
                                <h1 class="text-center">{{ $financing->page_title2 }}</h1>
                                <p class="mt-4">{{ $financing->page_title_2_paragraph }}</p>
                                <h3 class="mt-4">{{ $financing->page_title_2_sub_header1 }}</h3>
                                <p class="mt-4">{{ $financing->page_title_2_sub_header1_description }}</p>
                                <br>
                                <div class="card-group mt-4">
                                    @foreach ($cards as $card)
                                        <div class="card">
                                            <!-- For each here -->
                                            <div class="card-img-top img-responsive img-responsive-21x9"
                                                style="background-image: url({{ url('storage/financing/' . $card->page_title_2_sub_header1_card_image) }})">
                                            </div>


                                            <div class="card-body">
                                                <h4 class="card-title">{{$card->page_title_2_sub_header1_card_head }}
                                                </h4>
                                                <p class="card-text">{{ $card->page_title_2_sub_header1_card_description }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="col-12 markdown">

                                <h3 class="mt-4">{{ $financing->page_title_2_sub_header2 }}</h3>
                                <p class="mt-4">{{ $financing->page_title_2_sub_header2_description }}</p>

                                <h3 class="mt-4">{{ $financing->page_title_2_sub_header3 }}</h3>
                                <p class="mt-4">{{ $financing->page_title_2_sub_header3_description }}</p>

                                <h3 class="mt-4">{{ $financing->page_title_2_sub_header4 }}</h3>
                                <p class="mt-4">{{ $financing->page_title_2_sub_header4_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="page-body">
            <div class="container-xl">
                @component('backend.components.alert')
                @endcomponent
                <div class="card card-lg">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h1 class="page-title">
                            {{ __('Financing and Target Areas') }}
                        </h1>
                        <span><img src="https://flagcdn.com/16x12/{{ $current_language->symbol }}.png" alt=""
                                class="m-2">{{ $current_language->language }}</span>

                    </div>
                    <div class="card-body ">
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <div class="row mb-4">
                                    <div class="mb-3 col-12 text-center">
                                        <h3 class="text-warning">No {{ $current_language->language }} Content /
                                            Translation has been added yet. </h3>
                                        <h3 class="text-warning">Click <a
                                                href="{{ route('financing.create', $current_language->id) }}"
                                                class="btn d-none d-md-inline-flex btn-yellow">
                                                Create
                                            </a> to add content/translation.</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
