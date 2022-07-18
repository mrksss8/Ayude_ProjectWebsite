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
                            <th>{{ __('Translate to') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $lang)
                            @foreach ($lang->mainNavs as $mainNav)
                                <tr>
                                    <td>{{ $mainNav->nav_name }}</td>
                                    <td><span><img src="https://flagcdn.com/16x12/{{ $mainNav->symbol($mainNav->language_id) }}.png" alt="" class="m-2">{{ $mainNav->lang($mainNav->language_id)->language }}</span></td>
                                    <td>
                                        <div class="btn-list">
                                            <a class="btn nav-link dropdown-toggle ml-2" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
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
                                                @foreach ($mainNav->isNotTranslatedTo($mainNav->position) as $language)
                                                    <a class="dropdown-item" href="{{ route('navigation.create', ['id' => $mainNav->id, 'lang' => $language->id, 'type' => 0]) }}">
                                                        <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt="" class="m-2">{{ $language->language }}</span>
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-light" href="{{ route('navigation.edit', ['id' => $mainNav->id, 'type' => 0]) }}">Edit</a>
                                    </td>
                                </tr>
                                @foreach ($mainNav->subNavs as $subnav)
                                    <tr>
                                        <td>{{ $subnav->nav_name }}</td>
                                        <td><span><img src="https://flagcdn.com/16x12/{{ $subnav->symbol($subnav->language_id) }}.png" alt="" class="m-2">{{ $subnav->lang($subnav->language_id)->language }}</span></td>
                                        <td>
                                            <div class="btn-list">
                                                <a class="btn nav-link dropdown-toggle ml-2" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
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
                                                    @foreach ($subnav->isNotTranslatedTo($subnav->position) as $language)
                                                        <a class="dropdown-item" href="{{ route('navigation.create', ['id' => $subnav->id, 'lang' => $language->id, 'type' => 1]) }}">
                                                            <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt="" class="m-2">{{ $language->language }}</span>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td class="d-flex">
                                            <a class="btn btn-light ml-5" href="{{ route('navigation.edit', ['id' => $subnav->id, 'type' => 1]) }}">Edit</a>
                                        </td>
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


<div class="modal modal-blur fade" id="modal-translate" tabindex="-1" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-yellow"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-yellow icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 9v2m0 4v.01"></path><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path></svg>
                <h3>{{ session('message') }}</h3>
                <div class="text-muted">Do you want to translate it now?</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a>
                            </div>
                            <div class="col">
                                <?php 
                                    $id = session('id'); 
                                    $lang = session('language'); 
                                ?>
                                <a href="/navigations/create/{{ $id }}/{{ $lang }}/{{ 0 }}" class="btn btn-yellow w-100">
                                    {{ $id }}
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @if(Session::has('modalAlert'))
        <script type="text/javascript">
            $(document).ready(function() {
                $('#modal-translate').modal('show');
            });
        </script>
    @endif
@endsection