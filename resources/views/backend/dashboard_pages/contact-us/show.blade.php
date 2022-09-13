@extends('backend.layouts.app')

@section('content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    
                </div>
                <div class="col-auto">
                    <div class="btn-list">
                        @if (empty($language->registeredOffice[0]))
                            {{-- <a href="{{ route('contactus.create', $language->id) }}"
                                class="btn d-none d-md-inline-flex btn-yellow">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                                Create
                            </a> --}}
                        @else
                            <a href="{{ route('contactus.edit', $language->id) }}"
                                class="btn d-none d-md-inline-flex btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                                Edit
                            </a>
                        @endif


                        <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="16" rx="2" />
                                    <path d="M9 11l3 3l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Languages') }}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            @foreach ($languages as $lang)
                                <a class="dropdown-item" href="{{ route('contactus.show', $lang->id) }}">
                                    <span><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt=""
                                            class="m-2">{{ $lang->language }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @if (!empty($language->registeredOffice[0]))
    <div class="page-body">
        <div class="container-xl">
            @component('backend.components.alert')
            @endcomponent
          
            <div class="card card-lg">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h1 class="page-title">
                        {{ __('Contact Us') }}
                    </h1>
                    <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt=""
                        class="m-2">{{  $language->language }}</span>
                    
                </div>
            <div class="card-body">
                <!-- Registered Office -->
                <div class="row">
                    {{-- <h3 class="text-muted"><em>{{ $language->language }} </em><img
                            src="https://flagcdn.com/16x12/{{ $language->symbol }}.png"></h3> --}}
                    <div class="mb-3 col-6">
                        <label class="form-label">Header:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->registeredOffice[0]->header) ? $language->registeredOffice[0]->header : '' }}"
                            disabled>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->registeredOffice[0]->address) ? $language->registeredOffice[0]->address : '' }}"
                            disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">Company Number:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->registeredOffice[0]->companyNumber) ? $language->registeredOffice[0]->companyNumber : '' }}"
                            disabled>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Tel:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->registeredOffice[0]->tel) ? $language->registeredOffice[0]->tel : '' }}"
                            disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">E-mail:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->registeredOffice[0]->email) ? $language->registeredOffice[0]->email : '' }}"
                            disabled>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Bank:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->registeredOffice[0]->bank) ? $language->registeredOffice[0]->bank : '' }}"
                            disabled>
                    </div>
                </div>
            </div>

            <div class="card-header d-flex align-items-center justify-content-center">
                {{-- <span><img src="https://flagcdn.com/16x12/{{ $boardTitle->language->symbol }}.png" alt=""
                    class="m-2">{{ $boardTitle->language->language }}</span> --}}
                    <h2>General Secretariat</h2>
               
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-12">
                        <label class="form-label">Header:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->generalSecretariat[0]->header) ? $language->generalSecretariat[0]->header : '' }}"
                            disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-4">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->generalSecretariat[0]->name) ? $language->generalSecretariat[0]->name : '' }}"
                            disabled>
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->generalSecretariat[0]->address) ? $language->generalSecretariat[0]->address : '' }}"
                            disabled>
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">GSM:</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="{{ !empty($language->generalSecretariat[0]->gsm) ? $language->generalSecretariat[0]->gsm : '' }}"
                            disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else
    <div class="page-body">
        <div class="container-xl">
            @component('backend.components.alert')
            @endcomponent
            <div class="card card-lg">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h1 class="page-title">
                        {{ __('Contact Us') }}
                    </h1>
                    <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt=""
                        class="m-2">{{  $language->language }}</span>
                    
                </div>
                <div class="card-body ">
                    <div class="row g-4">
                        <div class="col-12 markdown">
                            <div class="row mb-4">
                                <div class="mb-3 col-12 text-center">
                                    <h3 class="text-warning">No {{  $language->language }} Content /
                                        Translation has been added yet. </h3>
                                    <h3 class="text-warning">Click <a
                                            href="{{ route('contactus.create',  $language->id) }}"
                                            class="btn d-none d-md-inline-flex btn-yellow">
                                            Create
                                        </a> to add content/translation.</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
