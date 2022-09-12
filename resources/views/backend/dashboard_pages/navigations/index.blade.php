@extends('backend.layouts.app')

@section('content')
<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title">
                    {{ __('Navigations') }}
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
                            <a class="dropdown-item" href="{{ route('navigation.show', $lang->id) }}">
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
        <div class="card">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ __('Navigation') }}</th>
                            <th>{{ __('Language') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($languages as $lang)
                            @foreach ($lang->mainNavs as $mainNav)
                                <tr>
                                    <td>{{ $mainNav->nav_name }}</td>
                                    <td><span><img src="https://flagcdn.com/16x12/{{ $mainNav->lang($lang->id) }}.png" alt="" class="m-2">{{ $lang->language }}</span></td>
                                    <td>
                                        <a class="btn btn-light edit" 
                                        data-title="Edit"
                                        data-nav="mainnav"
                                        data-id="{{ $mainNav->id }}"
                                        data-navigation="{{ $mainNav->nav_name }}"
                                        data-language="{{ $lang->language }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-report">Edit</a>
                                        <a class="btn btn-primary" 
                                        data-title="Translate"
                                        data-nav="mainnav"
                                        data-id="{{ $mainNav->id }}"
                                        data-mainNavId="0"
                                        data-navigation="{{ $mainNav->nav_name }}"
                                        data-language="{{ $lang->language }}"
                                        data-langid="{{ $lang->id }}"
                                        {{-- data-bs-toggle="modal"  --}}
                                        {{-- data-bs-target="#modal-report" --}}
                                        href="{{ route('navigation.create', ['current_lang' => $mainNav->language_id, 'type' => 0]) }}"
                                        >Translate</a>
                                    </td>
                                </tr>
                                @foreach ($mainNav->subNavs as $subnav)
                                    <tr>
                                        <td>{{ $subnav->nav_name }}</td>
                                        <td><span><img src="https://flagcdn.com/16x12/{{ $subnav->symbol($subnav->language_id) }}.png" alt="" class="m-2">{{ $subnav->lang($subnav->language_id) }}</span></td>
                                        <td>
                                            <a class="btn btn-light edit"  
                                            data-title="Edit"
                                            data-nav="subnav"
                                            data-id="{{ $subnav->id }}"
                                            data-navigation="{{ $subnav->nav_name }}"
                                            data-language="{{ $lang->language }}"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#modal-report">Edit</a>
                                            <a class="btn btn-primary"  
                                            data-title="Translate"
                                            data-nav="subnav"
                                            data-id="{{ $subnav->id }}"
                                            data-mainnavid="{{ $mainNav->id }}"
                                            data-navigation="{{ $subnav->nav_name }}"
                                            data-language="{{ $lang->language }}"
                                            data-langid="{{ $lang->id }}"
                                            {{-- data-bs-toggle="modal"  --}}
                                            {{-- data-bs-target="#modal-report" --}}
                                            href="{{ route('navigation.create', ['current_lang' => $mainNav->language_id, 'type' => 0]) }}"
                                            >Translate</a>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReportTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="modalReportForm">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="nav_name" id="navInput">
                    </div>
                    <div class="mb-3" id="languageSelect">
                        <label class="form-label">Language</label>
                        <select class="form-select" id="langSelect" name="language">
                            @foreach ($languages as $lang)
                                <option value="{{ $lang->id }}" id="{{ "select".$lang->language }}">{{ $lang->language }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                    Cancel
                </a>
                <button type="submit" class="btn btn-primary ms-auto" id="submitBtn" onclick="document.getElementById('modalReportForm').submit()">
                </button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom_scripts')
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection