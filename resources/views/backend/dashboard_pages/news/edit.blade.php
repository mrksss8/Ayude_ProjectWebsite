@extends('backend.layouts.app')

@section('content')

<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title">
                    {{ __('News') }}
                </h1>
            </div>
            <div class="col-auto">
                <div class="btn-list">
                    <a href="#" class="btn d-none d-md-inline-flex btn-success" onclick="document.getElementById('newsUpdateForm').submit()">
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
                        @foreach($languages as $lang)
                            <a class="dropdown-item" href="{{ route('contactus.show', $lang->id) }}">
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
      <div class="card mb-3">
        <div class="row row-0">
          <div class="col-3">
            <img src="{{ asset('storage/news-images/'.$post->image) }}" class="w-100 h-100 object-cover" alt="Card side image">
          </div>
          <div class="col">
            <div class="card-body">
              <h3 class="card-title h2">{{ $post->title }}</h3>
              <p class="text-muted">{{ $post->body }}</p>
            </div>
          </div>
        </div>
      </div>
        <form action="{{ route('news.update', ['lang' => $lang_id, 'id' => $post->id]) }}" method="POST" id="newsUpdateForm" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Input placeholder">
          </div>
          <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea class="form-control" name="body" value="{{ $post->body }}" rows="6" placeholder="Content..">
              {{ $post->body }}
            </textarea>
          </div>
          <div class="mb-3">
            <div class="form-label">Image</div>
            <input type="file" class="form-control" name="image" value="{{ $post->image }}">
          </div>
        </form>
    </div>
</div>
@endsection
