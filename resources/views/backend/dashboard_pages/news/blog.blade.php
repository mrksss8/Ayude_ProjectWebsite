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
              <a class="dropdown-item" href="{{ route('news.show', ['lang' => $lang->id, 'id' => $post->post_id]) }}">
                <span><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="card mb-3">
      <div class="row row-0">
        <div class="col-3">
          <img src="{{ asset('storage/news-images/'.$post->image) }}" class="w-100 h-100 object-cover" alt="Card side image">
        </div>
        <div class="col">
          <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="text-muted">{{ $post->body }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Comments ({{ $post->commentsCount($post->id) }})</h3>
      </div>
      <div class="list-group list-group-flush list-group-hoverable">
        @forelse ($post->getComments($post->id) as $comment)
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col text-truncate">
                <a href="#" class="text-reset d-block" style="font-weight: bold">{{ $comment->getCommenter($comment->guest_id) }}</a>
                <small>{{ $comment->updated_at }}</small>
                <div class="d-block text-muted text-truncate mt-n1" style="font-size: 16px">{{ $comment->comment }}</div>
              </div>
            </div>
          </div>
        @empty
          <div class="container p-3">
            <p class="text-center">No comments available</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>
</div>

@endsection