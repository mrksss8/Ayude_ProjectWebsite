@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        @if ($boardTitle != null)
                            <a href="{{ route('about_board.edit', $current_language->id) }}"
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
                                <a class="dropdown-item" href="{{ route('about_board.show', $language->id) }}">
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

    @if ($boardTitle != null)
        <div class="page-body">
            <div class="container-xl">
                @component('backend.components.alert')
                @endcomponent
                <div class="card card-lg">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h1 class="page-title">
                            {{ __('Board') }}
                        </h1>
                        <span><img src="https://flagcdn.com/16x12/{{ $boardTitle->language->symbol }}.png" alt=""
                            class="m-2">{{ $boardTitle->language->language }}</span>
                       
                    </div>
                    <div class="card-body ">
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <h1 class="text-center">{{ $boardTitle->page_title }}</h1>
                                <p class="text-center mb-5">{{ $boardTitle->page_des }}</p>
                            </div>
                            <div class="row">
                                @foreach ($boardPersons as $boardPerson)
                                    <div class="col-4">
                                        <div class="text-center p-3 border rounded">

                                            <img src="{{ url('storage/' . $boardPerson->image_path) }}" alt="Board Image"
                                                style="width: 200px; height:auto;">
                                            <p class="pt-3 m-0">{{ $boardPerson->name }}</p>

                                        </div>
                                    </div>
                                @endforeach
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
                            {{ __('Board') }}
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
                                                href="{{ route('about_board.create', $current_language->id) }}"
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
