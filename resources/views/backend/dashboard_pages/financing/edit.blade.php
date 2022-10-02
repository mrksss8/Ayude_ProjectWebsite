@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    {{-- <h1 class="page-title">
                    {{ __('Financing') }}
                </h1> --}}
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        <a href="#" class="btn d-none d-md-inline-flex btn-success"
                            onclick="document.getElementById('financingForm').submit()">

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
                            Save
                        </a>

                        <a class="btn" data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-title">
                                <span><img src="https://flagcdn.com/16x12/{{ $financing->language->symbol }}.png" alt=""
                                        class="m-2">{{ $financing->language->language }}</span>
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
                    </h1>
                    <h1 class="page-title">
                        {{ __('Financing and Target Areas') }}
                    </h1>
                    

                </div>
                <div class="card-body ">
                    <form action="{{ route('financing.update',$financing->language->id) }}" method="POST" id="financingForm" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="text" value="{{ $financing->language->id }}" name="language_id" hidden>
                        <input type="text" value="page_title_1_list" name="page_title_1_list" hidden>
                        <input type="text" value="card" name="page_title_2_sub_header1_card" hidden>
                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <div class="row mb-4 flex justify-content-center">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Title</label>
                                        <input type="text"
                                            class="form-control  @error('page_title') is-invalid @enderror"
                                            name="page_title_1" value = "{{ $financing->page_title_1 }}">
                                        @error('page_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Paragraph</label>
                                        <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                            name="page_title_1_paragraph1">{{ old('page_title_1_paragraph1', $financing->page_title_1_paragraph1) }}</textarea>
                                        @error('paragraph')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Subheader 1</label>
                                        <input type="text" class="form-control  @error('page_des') is-invalid @enderror"
                                            name="page_title_1_sub_header1" value="{{ $financing->page_title_1_sub_header1 }}">
                                            
                                        @error('page_des')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Loop for list / Additional Button / Add List -->
                                    @foreach ($financing_lists as $financing_list)
                                        
                                        <div class="mb-3 col-12">
                                            <div id="dynamicAddRemove">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">List</label>
                                                        <input type="hidden" value="{{ $financing_list->id }}" name="financing_list_id[]">
                                                        <input type="text"
                                                            class="form-control  @error('page_des') is-invalid @enderror"
                                                            name="page_title_1_sub_header1_list1[]" value = "{{ $financing_list->page_title_1_sub_header1_list1 }}">
                                                            @error('page_des')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    @endforeach

                                    <!-- Button Add List-->'
                                    <div class="mb-3">
                                        <label class="form-label">Paragraph</label>
                                        <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                            name="page_title_1_paragraph2">{{ old('page_title_1_paragraph2', $financing->page_title_1_paragraph2) }}</textarea>
                                        @error('paragraph')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <hr class="text-primary">

                                <div class="row mb-4 flex justify-content-center">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Page Second Title</label>
                                        <input type="text"
                                            class="form-control  @error('page_title') is-invalid @enderror"
                                            name="page_title2" value = "{{ $financing->page_title2 }}">
                                        @error('page_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paragraph</label>
                                    <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="page_title_2_paragraph">{{ old('page_title_2_paragraph', $financing->page_title_2_paragraph) }}</textarea>
                                    @error('paragraph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Subheader 1</label>
                                    <input type="text" class="form-control  @error('page_des') is-invalid @enderror"
                                        name="page_title_2_sub_header1" value = "{{ $financing->page_title_2_sub_header1 }}">
                                    @error('page_des')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subheader 1 Description </label>
                                    <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="page_title_2_sub_header1_description">{{ old('page_title_2_paragraph_description', $financing->page_title_2_sub_header1_description) }}</textarea>
                                    @error('paragraph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Card / Add Button for Adding Two Cards Dynamically or No -->

                                
                                <div id="dynamicAddRemove-card">
                                    @foreach ($financing_cards as $financing_card)
                                        
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Card Head:</label>
                                            <input type="hidden" value="{{ $financing_card->id }}" name="financing_card_ids[]">
                                            <input type="text"
                                                class="form-control  @error('page_des') is-invalid @enderror"
                                                name="page_title_2_sub_header1_card_head[]" value = "{{ $financing_card->page_title_2_sub_header1_card_head}}">
                                            @error('page_des')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Card Description: </label>
                                            <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                                name="page_title_2_sub_header1_card_description[]">{{ old('page_title_2_sub_header1_card_description', $financing_card->page_title_2_sub_header1_card_description) }}
                                            </textarea>
                                            @error('page_title_2_sub_header1_card_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Card Image:</label>
                                            <input type="file"
                                                class="form-control  @error('page_des') is-invalid @enderror"
                                                name="page_title_2_sub_header1_card_image[]">
                                        </div>
                                    </div>

                                    @endforeach
                                </div>

                                {{-- <div class="row">
                                    <div class="text-center">
                                        <button type="button" name="add" id="dynamic-ar-card"
                                            class="btn btn-outline-primary" style="width:300px;">Add Card</button>
                                    </div>
                                </div> --}}

                                <hr class="text-primary">

                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Subheader 2</label>
                                    <input type="text" class="form-control  @error('page_des') is-invalid @enderror"
                                        name="page_title_2_sub_header2" value = "{{ $financing->page_title_2_sub_header2  }}">
                                    @error('page_des')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subheader 2 Description </label>
                                    <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="page_title_2_sub_header2_description">{{ old('page_title_2_paragraph_description', $financing->page_title_2_sub_header2_description) }}</textarea>
                                    @error('paragraph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Subheader 3</label>
                                    <input type="text" class="form-control  @error('page_des') is-invalid @enderror"
                                        name="page_title_2_sub_header3" value = "{{ $financing->page_title_2_sub_header3  }}">
                                    @error('page_title_2_sub_header3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subheader 3 Description </label>
                                    <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="page_title_2_sub_header3_description">{{ old('page_title_2_paragraph_description', $financing->page_title_2_sub_header3_description) }}</textarea>
                                    @error('paragraph')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Subheader 4</label>
                                    <input type="text" class="form-control  @error('page_des') is-invalid @enderror"
                                        name="page_title_2_sub_header4" value = "{{ $financing->page_title_2_sub_header4}}">
                                    @error('page_des')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Subheader 4 Description </label>
                                    <textarea class="form-control  @error('paragraph') is-invalid @enderror" data-bs-toggle="autosize"
                                        name="page_title_2_sub_header4_description">{{ old('page_title_2_paragraph_description', $financing->page_title_2_sub_header4_description) }}</textarea>
                                    @error('paragraph')
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

