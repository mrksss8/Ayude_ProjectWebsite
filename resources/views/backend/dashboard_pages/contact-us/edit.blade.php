@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
              <h1 class="page-title">
                {{ __('Contact Us') }}
              </h1>
            </div>
            <div class="col-auto">
                <div class="btn-list">
                    <a class="btn d-none d-md-inline-flex btn-success" onclick="document.getElementById('contactUsForm').submit()">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <desc>Download more icon variants from https://tabler-icons.io/i/device-floppy</desc>
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                          <circle cx="12" cy="14" r="2"></circle>
                          <polyline points="14 4 14 8 8 8 8 4"></polyline>
                       </svg>
                      Save
                    </a>
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
                        <a class="dropdown-item" href="#">
                           <span><img src="{{ asset('images/en.png') }}" alt="" class="m-2">{{ __('English') }}</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span><img src="{{ asset('images/fr.png') }}" alt="" class="m-2">{{ __('French') }}</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span><img src="{{ asset('images/nl.png') }}" alt="" class="m-2">{{ __('Dutch') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <h3 class="text-muted"><em>{{ $language->language }} </em><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png"></h3>
        </div>
        <form action="{{ route('contactus.update', ['lang' => $language->id, 'reg_id' => $language->registeredOffice[0]->id, 'gen_id' => $language->generalSecretariat[0]->id]) }}" method="POST" id="contactUsForm">
            @method('PUT')
            @csrf
            <h2>Registered Office</h2>
            <div class="card-body">
                <div class="row">
                    <h3 class="text-muted"><em>{{ $language->language }} </em><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png"></h3>
                    <div class="mb-3 col-6">
                        <label class="form-label">Header:</label>
                        <input type="text" class="form-control @error('reg_header') is-invalid @enderror" name="reg_header" value="{{ old('reg_header', $language->registeredOffice[0]->header) }}" placeholder="Registered office Ayude for A New Day vzw">
                        @error('reg_header')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control @error('reg_address') is-invalid @enderror" name="reg_address" value="{{ old('reg_address', $language->registeredOffice[0]->address) }}" placeholder="Daalstraat 71 1790 Affligem, Belgium">
                        @error('reg_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">Company Number:</label>
                        <input type="text" class="form-control @error('reg_companyNumber') is-invalid @enderror" name="reg_companyNumber" value="{{ old('reg_companyNumber', $language->registeredOffice[0]->companyNumber) }}" placeholder="Company number: 452924672">
                        @error('reg_companyNumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Tel:</label>
                        <input type="text" class="form-control @error('reg_tel') is-invalid @enderror" name="reg_tel" value="{{ old('reg_tel', $language->registeredOffice[0]->tel) }}" placeholder="053 68 21 50">
                        @error('reg_tel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">E-mail:</label>
                        <input type="text" class="form-control  @error('reg_email') is-invalid @enderror" name="reg_email" value="{{ old('reg_email', $language->registeredOffice[0]->email) }}" placeholder="ayude4anewday@gmail.com">
                        @error('reg_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Bank:</label>
                        <input type="text" class="form-control @error('reg_bank') is-invalid @enderror" name="reg_bank" value="{{ old('reg_bank', $language->registeredOffice[0]->bank) }}" placeholder="IBAN BE63 7805 7850 7508, BIC: GKCCBEBB">
                        @error('reg_bank')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <hr>
            <h2>General Secretariat</h2>
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-12">
                        <label class="form-label">Header:</label>
                        <input type="text" class="form-control @error('gen_header') is-invalid @enderror" name="gen_header" value="{{ old('gen_header', $language->generalSecretariat[0]->header) }}" placeholder="General Secretariat Ayude for A New Day">
                        @error('gen_header')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-4">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control @error('gen_name') is-invalid @enderror" name="gen_name" value="{{ old('gen_name', $language->generalSecretariat[0]->name) }}" placeholder="Martine Verschueren">
                        @error('gen_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">Address:</label>
                        <input type="text" class="form-control @error('gen_address') is-invalid @enderror" name="gen_address" value="{{ old('gen_address', $language->generalSecretariat[0]->address) }}" placeholder="Ten Bos 5 9420 Burst">
                         @error('gen_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-4">
                        <label class="form-label">GSM:</label>
                        <input type="text" class="form-control @error('gen_gsm') is-invalid @enderror" name="gen_gsm" value="{{ old('gen_gsm', $language->generalSecretariat[0]->gsm) }}" placeholder="0475 237 285">
                         @error('gen_gsm')
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

@endsection
