@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-title">
                        {{ __('History') }}
                    </h1>
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        <a href="#" class="btn d-none d-md-inline-flex btn-success"
                            onclick="document.getElementById('aboutHistoryForm').submit()">
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
                                <span><img src="{{ asset('images/' . $abouthistory->language->symbol . '.png')}}" alt=""
                                        class="m-2">{{  $abouthistory->language->language }}</span>
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
                <div class="card-header d-flex align-items-center justify-content-center">
                    <span><img src="{{ asset('images/' . $abouthistory->language->symbol . '.png') }}" alt=""
                            class="m-2">{{ $abouthistory->language->language }} Language</span>
                </div>
                <div class="card-body ">
                    <form action="{{ route('about_history.update', $abouthistory->language_id) }}" method="POST"
                        id="aboutHistoryForm">
                        @method('PUT')
                        @csrf
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <div class="row mb-4">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Title:</label>
                                        <input type="text" class="form-control  @error('page_title') is-invalid @enderror"
                                            name="page_title" value=" {{ old('header', $abouthistory->page_title) }}">
                                        @error('page_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Description:</label>
                                        <input type="text" class="form-control  @error('page_des') is-invalid @enderror"
                                            name="page_des" value=" {{ old('header', $abouthistory->page_des) }}">
                                        @error('page_des')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Header:</label>
                                        <input type="text" class="form-control  @error('header') is-invalid @enderror" name="header"
                                            value=" {{ old('header', $abouthistory->header) }}">
                                        @error('header')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paragraph</label>
                                    <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize" name="paragraph">{{old('paragraph', $abouthistory->paragraph) }}</textarea>
                                    @error('paragraph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="form-label">Picture / Image</div>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
