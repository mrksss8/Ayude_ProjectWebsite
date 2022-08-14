@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">

                </div>
                <div class="col-auto">
                    <div class = "d-flex align-items-center" style = "gap:8px;">
                        @if ($abouthistory != null)
                            <a href="{{ route('about_history.edit', $current_language->id) }}"
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
                        @else
                          
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
                                {{ __('Languages') }}
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            @foreach ($languages as $language)
                                <a class="dropdown-item" href="{{ route('about_history.show', $language->id) }}">
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

    @if ($abouthistory != null)
        <div class="page-body">
            <div class="container-xl">
                @component('backend.components.alert')
                @endcomponent
                <div class="card card-lg">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h1 class="page-title">
                            {{ __('History') }}
                        </h1>
                        <span><img src="https://flagcdn.com/16x12/{{ $abouthistory->language->symbol }}.png"
                                alt="" class="m-2">{{ $abouthistory->language->language }}</span>
                    </div>
                    <div class="card-body ">
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <h1 class="text-center">{{ $abouthistory->page_title }}</h1>
                                <p class="text-center mb-5">{{ $abouthistory->page_des }}</p>
                                <h1>{{ $abouthistory->header }}</h1>
                                <p>
                                    {{ $abouthistory->paragraph }}
                                </p>
                            </div>
                            <div class="row justify-content-center mb-5 pb-3">
                                <img src="https://www.ayude.be/wp-content/uploads/2021/05/History-3.png" alt=""
                                    srcset="">
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
                            {{ __('History') }}
                        </h1>
                        <span><img src="{{ asset('images/' . $current_language->symbol . '.png') }}" alt=""
                                class="m-2">{{ $current_language->language }} Language</span>
                    </div>
                    <div class="card-body ">
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <div class="row mb-4">
                                    <div class="mb-3 col-12 text-center">
                                        <h3 class="text-warning">No {{ $current_language->language }}  Content / Translation has been added yet. </h3>
                                        <h3 class="text-warning">Click  <a href="{{ route('about_history.create', $current_language->id) }}"
                                            class="btn d-none d-md-inline-flex btn-yellow">
                                            Create
                                        </a> to add content/translation.</h3>
                                           
                                    </div>
                                </div>
                                    {{-- <div class="mb-3 col-6">
                                        <label class="form-label">Page Title:</label>
                                        <input type="text" class="form-control" disabled placeholder="History"
                                            name="page_title">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Description:</label>
                                        <input type="text" class="form-control" disabled
                                            placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, impedit!"
                                            name="page_des">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Header:</label>
                                        <input type="text" class="form-control" disabled
                                            placeholder="How did Ayude originate?" name="header">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paragraph</label>
                                    <textarea class="form-control" disabled data-bs-toggle="autosize"
                                        placeholder="After a visit to the Philippines, Charles Verberckmoes was moved by seeing the conditions in which the children of Manila (the capital) live in the slums. Together with a few friends (now the administrators) he founded an organization aimed at improving the economic, social and mental condition of poor (street) children."
                                        name="paragraph"></textarea>
                                </div> --}}
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection
