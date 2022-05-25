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
              <a href="#" class="btn d-none d-md-inline-flex btn-success">
                <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                <!-- SVG icon code -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <desc>Download more icon variants from https://tabler-icons.io/i/device-floppy</desc>
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                    <circle cx="12" cy="14" r="2"></circle>
                    <polyline points="14 4 14 8 8 8 8 4"></polyline>
                 </svg>
                Save
              </a>

            <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/select -->
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
      <div class="card card-lg">
        <div class="card-body ">
          <div class="row g-4">
            <div class="col-12 markdown">
                <div class="row">
                    <div class="mb-3 col-6">

                        <label class="form-label">Header:</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="How did Ayude Originate?">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Paragraph</label>
                    <textarea class="form-control" data-bs-toggle="autosize" placeholder="After a visit to the Philippines, Charles Verberckmoes was moved by seeing the conditions in which the children of Manila (the capital) live in the slums. Together with a few friends (now the administrators) he founded an organization aimed at improving the economic, social and mental condition of poor (street) children. We soon came into contact with a local Filipino aid organization (led by Steve Mirpuri) who shared the same vision as Ayude. Thus Ayude for a New Day (the Spanish word for Help Mee! For a new day) was founded as a non-profit organization in 1994." style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"></textarea>
                  </div>
                  <div class="row">
                    <div class="mb-3 col-6">
                        <div class="form-label">Picture / Image</div>
                        <input type="file" class="form-control">
                      </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
