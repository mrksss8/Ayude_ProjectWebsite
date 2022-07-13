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
                                    <td><span><img src="https://flagcdn.com/16x12/{{ $mainNav->symbol($mainNav->language_id) }}.png" alt="" class="m-2">{{ $mainNav->lang($mainNav->language_id) }}</span></td>
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
                                                @foreach($languages as $lang)
                                                    @if ($mainNav->isNotTranslated($lang->id, $mainNav->position))
                                                        <a class="dropdown-item" href="{{ route('navigation.create', ['id' => $mainNav->id, 'lang' => $lang->id, 'type' => 0]) }}">
                                                            <span><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
                                                        </a>
                                                    @endif

                                                    @foreach ($mainNav->isNotTranslated($lang->id, $mainNav->position) as $navs)
                                                        <a class="dropdown-item" href="{{ route('navigation.create', ['id' => $mainNav->id, 'lang' => $lang->id, 'type' => 0]) }}">
                                                            <span><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
                                                        </a>
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-light">Edit</a>
                                    </td>
                                </tr>
                                @foreach ($mainNav->subNavs as $subnav)
                                    <tr>
                                        <td>{{ $subnav->nav_name }}</td>
                                        <td><span><img src="https://flagcdn.com/16x12/{{ $subnav->symbol($subnav->language_id) }}.png" alt="" class="m-2">{{ $subnav->lang($subnav->language_id) }}</span></td>
                                        <td>
                                            <div class="btn-list">
                                                <a class="btn nav-link dropdown-toggle ml-2"" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
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
                                                    @if ($mainNav->isNotTranslated($lang->id, $subnav->position))
                                                        <a class="dropdown-item" href="{{ route('navigation.create', ['id' => $mainNav->id, 'lang' => $lang->id, 'type' => 0]) }}">
                                                            <span><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
                                                        </a>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </td>
                                        <td class="d-flex">
                                            <a class="btn btn-light ml-5">Edit</a>
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


@endsection