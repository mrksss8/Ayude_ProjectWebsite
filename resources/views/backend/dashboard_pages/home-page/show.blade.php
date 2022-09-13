@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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
                            <a class="dropdown-item" href="{{ route('homepage.show', $lang->id) }}">
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
            <h3 class="text-muted"><em>{{ $language->language }} </em><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png"></h3>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="page-pretitle">Header</div>
                <h2 class="page-title">{{ empty($language->home[0]->header) ? "Section 1" : $language->home[0]->header }}</h2>
            </div>
            <div class="col-6 d-flex justify-content-end">
                @if (empty($language->home[0]))
                    <a href="{{ route('homepage.create', ['sec' => 1, 'lang' => $language->id]) }}" class="btn d-none d-md-inline-flex btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Create
                    </a>
                @else
                    <a href="{{ route('homepage.edit', ['sec' => 1, 'lang' => $language->id, 'id' => $language->home[0]->id]) }}" class="btn d-none d-md-inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                            <path d="M16 5l3 3"></path>
                        </svg>
                        Edit
                    </a>
                @endif
            </div>
        </div>

        <div class="card-body">
            <h3 class="card-title text-muted">Content</h3>
            <p class="text-muted">{{ empty($language->home[0]->content) ? "Seems you have to add your content here" : $language->home[0]->content }}</p>
        </div>
        <hr>

        <div class="row mb-3">
            <div class="col-6 d-flex justify-content-start">
                @forelse ($section2 as $data)
                    <div class="col">
                        <div class="page-pretitle">Header</div>
                        <h2 class="page-title">{{ empty($data->subheader) ? 'Section 2' : $data->subheader }}</h2>
                    </div>
                    @if($loop->index = 1)
                        @break
                    @endif
                @empty
                    <div class="col">
                        <div class="page-pretitle">Header</div>
                        <h2 class="page-title">Section 2</h2>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="row">
            @foreach ($section2 as $data)
                <div class="col-4">
                    <div class="card" style="border: 2px dashed grey">
                        <div class="card-body">
                            <h3 class="card-title">{{ $data->header }}</h3>
                            <h1>{{ $data->content }}</h1>
                            <a href="{{ route('homepage.sec2.edit', ['lang' => $data->language_id, 'id' => $data->id]) }}">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                <path d="M16 5l3 3"></path>
                              </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if ($section2->count() < 3)
                <div class="col-4">
                    <div class="card py-3" style="border: 2px dashed grey">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        
        <!-- Add Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        @forelse ($section2 as $data)
                            <h5 class="modal-title" id="exampleModalLabel">{{ $data->subheader  }}</h5>
                            @if($loop->index = 1)
                                @break
                            @endif
                        @empty
                            <h5 class="modal-title" id="exampleModalLabel">Section 2</h5>
                        @endforelse
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('homepage.store', ['sec' => 2, 'lang' => $language->id]) }}" method="POST" id="homeForm">
                        @csrf
                        <div class="modal-body">
                            @forelse ($section2 as $data)
                                <div class="mb-3">
                                    <label class="form-label">Header</label>
                                    <input type="text" class="form-control" name="data1-title" value="{{ $data->subheader  }}" placeholder="Food Distribution">
                                </div>
                                @if($loop->index = 1)
                                    @break
                                @endif
                            @empty
                                <div class="mb-3">
                                    <label class="form-label">Header</label>
                                    <input type="text" class="form-control" name="subheader" placeholder="Helping Children and Communities since 1994">
                                </div>
                            @endforelse
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control @error('header') is-invalid @enderror" name="header" value="{{ old('header') }}" placeholder="Food Distribution">
                                @error('header')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Value</label>
                                <input type="number" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" placeholder="10788">
                                 @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <hr>

        <div class="row">
            <div class="col-6">
                <div class="page-pretitle">Header</div>
                <h2 class="page-title">{{ empty($language->home[1]->header) ? "Section 3" : $language->home[1]->header }}</h2>
            </div>
            <div class="col-6 d-flex justify-content-end">
                @if (empty($language->home[1]))
                    <a href="{{ route('homepage.create', ['sec' => 3, 'lang' => $language->id]) }}" class="btn d-none d-md-inline-flex btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Create
                    </a>
                @else
                    <a href="{{ route('homepage.edit', ['sec' => 3, 'lang' => $language->id, 'id' => $language->home[1]->id]) }}" class="btn d-none d-md-inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                            <path d="M16 5l3 3"></path>
                        </svg>
                        Edit
                    </a>
                @endif
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title text-muted">Content</h3>
            <p class="text-muted">{{ empty($language->home[1]->content) ? "Seems you have to add your content here" : $language->home[1]->content }}</p>
        </div>
    </div>
</div>
@endsection
