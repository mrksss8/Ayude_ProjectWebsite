@extends('backend.layouts.app')

@section('content')
<div class="container-xl mb-3">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title">
                    {{ __('Navigations') }}
                </h1>
            </div>
            <div class="col-auto">
                <div class="btn-list">
                    <a href="#" class="btn d-none d-md-inline-flex btn-success" onclick="document.getElementById('modalReportForm').submit()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/device-floppy</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                            <circle cx="12" cy="14" r="2"></circle>
                            <polyline points="14 4 14 8 8 8 8 4"></polyline>
                        </svg>
                        Save
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xl">
    <div class="subheader">You are translating</div>
    <div class="row mb-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-stamp">
                    <div class="card-stamp-icon">
                        <img src="https://flagcdn.com/16x12/{{ $nav->symbol($nav->language_id) }}.png" alt="" class="m-2" height="85">
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $nav->nav_name }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-1 d-flex justify-content-center align-items-center">
            <h1>To</h1>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-stamp">
                    <div class="card-stamp-icon">
                        <img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt="" class="m-2" height="85">
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">{{ $language->language }}</h3>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('navigation.translate', ['mainnav' => $mainnavId, 'subnav' => $subnavId, 'type' => $type]) }}" method="post" id="modalReportForm">
        {{-- @method('PUT') --}}
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="nav_name" id="navInput">
        </div>
        <div class="mb-3" id="languageSelect">
            <label class="form-label">Language</label>
            <select class="form-select" id="langSelect" name="language">
                <option value="{{ $language->id }}" id="{{ "select".$language->language }}">{{ $language->language }}</option>
            </select>
        </div>
    </form>
</div>

@endsection