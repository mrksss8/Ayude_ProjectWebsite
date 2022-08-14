@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                   
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        <a href="#" class="btn d-none d-md-inline-flex btn-success"
                            onclick="document.getElementById('helpUsForm').submit()">
                            <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                            <!-- SVG icon code -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <desc>Download more icon variants from https://tabler-icons.io/i/device-floppy</desc>
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                <circle cx="12" cy="14" r="2"></circle>
                                <polyline points="14 4 14 8 8 8 8 4"></polyline>
                            </svg>
                            Update
                        </a>

                        <a class="btn" data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-title">
                                <span><img src="{{ asset('images/' . $helpUs->language->symbol . '.png') }}" alt=""
                                        class="m-2">{{ $helpUs->language->language }}</span>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card card-lg">
                <div class="card-header d-flex align-items-center justify-content-between">

                    <h1 class="page-title">
                       Edit
                    <h1 class="page-title">
                        {{ __('Help Us') }}
                    </h1>
                </div>
                <div class="card-body ">
                    <form action="{{ route('help-us.update', $helpUs->language->id) }}" method="POST"
                        id="helpUsForm" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="text" value="{{ $helpUs->language->id }}" name="lang_id" hidden>
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <div class="row mb-4 flex justify-content-center">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Title:</label>
                                        <input type="text" class="form-control  @error('page_title') is-invalid @enderror"
                                            name="page_title" value=" {{ old('page_title', $helpUs->page_title) }}">
                                        @error('page_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Subheader 1:</label>
                                        <input type="text" class="form-control  @error('sub_header1') is-invalid @enderror"
                                            name="sub_header1"  value=" {{ old('sub_header1', $helpUs->sub_header1) }}">
                                        @error('sub_header1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Subheader 2:</label>
                                        <input type="text" class="form-control  @error('sub_header2') is-invalid @enderror"
                                            name="sub_header2"  value=" {{ old('sub_header2', $helpUs->sub_header2) }}">
                                        @error('sub_header2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paragraph</label>
                                    <textarea class="form-control  @error('paragraph1') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="paragraph1"> {{ old('paragraph1', $helpUs->paragraph1) }}</textarea>
                                    @error('paragraph1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Card Head:</label>
                                        <input type="text" class="form-control  @error('card_header') is-invalid @enderror"
                                            name="card_header"  value=" {{ old('card_header', $helpUs->card_header) }}">
                                        @error('card_header')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Card Description:</label>
                                    <textarea class="form-control  @error('card_des') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="card_des">{{ old('card_des', $helpUs->card_des) }}</textarea>
                                    @error('card_des')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-4 flex justify-content-center">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Second Title:</label>
                                        <input type="text" class="form-control  @error('page_second_title') is-invalid @enderror"
                                            name="page_second_title"  value=" {{ old('page_second_title', $helpUs->page_second_title) }}">
                                        @error('page_second_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paragraph</label>
                                    <textarea class="form-control  @error('paragraph2') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="paragraph2">  {{ old('paragraph2', $helpUs->paragraph2) }}"</textarea>
                                    @error('paragraph2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection
