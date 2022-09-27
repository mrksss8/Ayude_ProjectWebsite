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
                            onclick="document.getElementById('aboutMissionVisionSubmit').submit()">
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

                            <span><img src="https://flagcdn.com/16x12/{{ $about_mission_vision->language->symbol }}.png"
                                    alt="" class="m-2">{{ $about_mission_vision->language->language }}</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('about_mission_vision.update', $about_mission_vision->language_id) }}" method="POST"
        id="aboutMissionVisionSubmit" enctype='multipart/form-data'>
        @method('PUT')
        @csrf

        <div class="page-body">
            <div class="container-xl">
                <div class="card card-md">
                    <div class="card-header d-flex align-items-center justify-content-center">
                        <span><img src="https://flagcdn.com/16x12/{{ $about_mission_vision->language->symbol }}.png"
                                alt="" class="m-2">{{ $about_mission_vision->language->language }}</span>
                    </div>
                    <div class="card-body">

                        <div class="row g-4">
                            <div class="col-12 markdown">
                                <div class="row">
                                    <div class="mb-1 col-6">

                                        <label class="form-label">Page Title:</label>
                                        <input type="text" class="form-control" name="page_title"
                                            value=" {{ old('page_title', $about_mission_vision->page_title) }}">
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label class="form-label">Page Description</label>
                                    <textarea class="form-control" name="page_des" value=" {{ old('page_des', $about_mission_vision->page_des) }}"
                                        data-bs-toggle="autosize" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;">{{ old('page_des', $about_mission_vision->page_des) }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <div class="col-md-12">
                    <div class="card">
                        <ul class="nav nav-tabs" data-bs-toggle="tabs">
                            <li class="nav-item">
                                <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">Vision</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tabs-activity-17" class="nav-link" data-bs-toggle="tab">Community</a>
                            </li>
                        </ul>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tabs-home-17">
                                    <div class="col-md-12 markdown">
                                        <div class="row">
                                            <div class="mb-3 col-6">

                                                <label class="form-label">Header One:</label>
                                                <input type="text" class="form-control" name="header_one"
                                                    value=" {{ old('header_one', $about_mission_vision->header_one) }}">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <div class="form-label">Picture / Image</div>
                                                <input type="file" class="form-control" name = "mission_image"">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Paragraph</label>
                                                <textarea class="form-control" name="header_one_des1" data-bs-toggle="autosize"
                                                    style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('header_one_des', $about_mission_vision->header_one_des1) }} </textarea>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-4">
                                                    <label class="form-label">List One</label>
                                                    <textarea class="form-control" name="list_1" data-bs-toggle="autosize"
                                                        style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('list_1', $about_mission_vision->list_1) }} </textarea>
                                                </div>
                                                <div class="mb-3 col-4">
                                                    <label class="form-label">List Two</label>
                                                    <textarea class="form-control" name="list_2" data-bs-toggle="autosize"
                                                        style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('list_2', $about_mission_vision->list_2) }} </textarea>
                                                </div>
                                                <div class="mb-3 col-4">
                                                    <label class="form-label">List Three</label>
                                                    <textarea class="form-control" name="list_3" data-bs-toggle="autosize"
                                                        style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('list_3', $about_mission_vision->list_3) }} </textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Paragraph</label>
                                                    <textarea class="form-control" name="header_one_des2" data-bs-toggle="autosize"
                                                        style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('header_one_des', $about_mission_vision->header_one_des2) }} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-profile-17">
                                    <div class="col-md-12 markdown">
                                        <div class="row">
                                            <div class="mb-3 col-6">

                                                <label class="form-label">Header Two:</label>
                                                <input type="text" class="form-control" name="header_two"
                                                    value=" {{ old('header_two', $about_mission_vision->header_two) }}"
                                                    placeholder="Our Vision">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <div class="form-label">Picture / Image</div>
                                                <input type="file" class="form-control" name = "vision_image">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Paragraph</label>
                                            <textarea class="form-control" name="header_two_des1" data-bs-toggle="autosize"
                                                style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('header_two', $about_mission_vision->header_two_des1) }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Paragraph</label>
                                            <textarea class="form-control" name="header_two_des2" data-bs-toggle="autosize"
                                                style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"> {{ old('header_two', $about_mission_vision->header_two_des2) }}</textarea>
                                        </div>


                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-activity-17">
                                    <div class="mb-3">
                                        <label class="form-label">Paragraph</label>
                                        <textarea class="form-control" name="community_des" data-bs-toggle="autosize"
                                            style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;">{{ old('header_two', $about_mission_vision->community_des) }}</textarea>
                                    </div>
                                    {{-- <div class="row-cards row">
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="mb-4">
                                                        <span class="avatar avatar-xl avatar-rounded"
                                                            style="background-image: url(./static/avatars/006f.jpg)"></span>
                                                    </div>
                                                    <div class="card-title mb-3">Avivah Mugleston</div>
                                                    <div class="text-muted">* Position? *</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xl-9">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-title">Basic info</div>
                                                    <div class="row">
                                                        <div class="mb-3 col-9">

                                                            <label class="form-label">Full Name:</label>
                                                            <input type="text" class="form-control" name="full_name"
                                                                value=" {{ old('header_two', $about_mission_vision->full_name) }}">
                                                        </div>
                                                        <div class="mb-3 col-3">
                                                            <div class="form-label">Picture / Image</div>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="mb-3 col-4">

                                                            <label class="form-label">Company:</label>
                                                            <input type="text" class="form-control" name="company"
                                                                value=" {{ old('header_two', $about_mission_vision->company) }}">
                                                        </div>
                                                        <div class="mb-3 col-4">

                                                            <label class="form-label">Position:</label>
                                                            <input type="text" class="form-control" name="position"
                                                                value=" {{ old('header_two', $about_mission_vision->position) }}">
                                                        </div>
                                                        <div class="mb-3 col-4">

                                                            <label class="form-label">E-mail:</label>
                                                            <input type="text" class="form-control" name="email"
                                                                value=" {{ old('header_two', $about_mission_vision->email) }}">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
