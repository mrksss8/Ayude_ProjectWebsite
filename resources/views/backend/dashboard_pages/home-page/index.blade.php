@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title">
                    {{ __('Home') }}
                </h1>
            </div>
            <div class="col-auto">
                <div class="btn-list">
                    <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
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
                        @foreach($languages as $lang)
                            <a class="dropdown-item" href="{{ route('contactus.show', $lang->id) }}">
                                <span><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        @component('backend.components.alert')@endcomponent
        <div class="row">
            <div class="col-6">
                <div class="page-pretitle">Header</div>
                <h2 class="page-title">Welcome to Ayude</h2>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{ route('homepage.create', ['sec' => 1, 'lang' => 1]) }}" class="btn d-none d-md-inline-flex btn-yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Create
                </a>
            </div>
        </div>

        <div class="card-body">
            <h3 class="card-title text-muted">Content</h3>
            <p class="text-muted">Ayude For a New Day is a Belgian organization, founded in 1994. The key mission of Ayude is to provide for the poorest of the poor – more specifically the numerous (street) children in less-developed countries. We believe that sustainable development education is the key to get these children out of the vicious cycle of poverty and consequently to develop their self-esteem and self-confidence.</p>
        </div>
        <hr>

        <div class="row">
            <div class="col-6 d-flex justify-content-start">
                <h2>Section 2</h2>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{ route('homepage.create', ['sec' => 2, 'lang' => 1]) }}" class="btn d-none d-md-inline-flex btn-yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Create
                </a>
            </div>
        </div>
        <div class="card-body">
            
            <div class="row">
                
            </div>
            <div class="row">

            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-6">
                <div class="page-pretitle">Header</div>
                <h2 class="page-title">HOW COULD YOU HELP?</h2>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{ route('homepage.create', ['sec' => 3, 'lang' => 1]) }}" class="btn d-none d-md-inline-flex btn-yellow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Create
                </a>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title text-muted">Content</h3>
            <p class="text-muted">Make a transfer stating: “donation from + NAME + ADDRESS”</p>
        </div>
    </div>
</div>
@endsection
