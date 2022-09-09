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
                            <a class="dropdown-item" href="{{ route('news.index', $lang->id) }}">
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
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h3 class="card-title">Posts</h3>
          <a href="{{ route('news.create', $lang_id) }}" class="btn btn-primary">New Post</a>
        </div>
        <div class="card-body border-bottom py-3">
          <div class="d-flex">
            <div class="text-muted">
              Show
              <div class="mx-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
              </div>
              entries
            </div>
            <div class="ms-auto text-muted">
              Search:
              <div class="ms-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Comments</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @forelse ($posts as $post)
                <tr>
                  <td>{{ $post->title }}</td>
                  <td class="td-truncate">
                    <div class="text-truncate">{{ $post->body }}</div>
                  </td>
                  <td>{{ $post->commentsCount($post->id) }}</td>
                  <td>
                    <div class="btn-list">
                      <a class="btn nav-link dropdown-toggle ml-2" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
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
                          @foreach ($toTranslate as $language)
                            @if($lang_id == 1)
                              <a class="dropdown-item" href="{{ route('news.translate', ['lang' => $language->id, 'id' => $post->id]) }}">
                                <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt="" class="m-2">{{ $language->language }}</span>
                              </a>
                            @else
                              <a class="dropdown-item" href="{{ route('news.translate', ['lang' => $language->id, 'id' => $post->post_id]) }}">
                                <span><img src="https://flagcdn.com/16x12/{{ $language->symbol }}.png" alt="" class="m-2">{{ $language->language }}</span>
                              </a>
                            @endif
                          @endforeach
                      </div>
                    </div>
                  </td>
                  <td>
                    <a href="{{ route('news.show', ['lang' => $post->language_id, 'id' => $lang_id != 1 ? $post->post_id : $post->id]) }}" class="btn btn-success">View</a>
                    <a href="{{ route('news.edit', ['lang' => $post->language_id, 'id' => $post->id]) }}" class="btn btn-primary">Edit</a>
                    <a onclick="document.getElementById('{{ 'postDelete'.$post->id }}').submit()" class="btn btn-danger">Delete</a>
                    <form hidden action="{{ route('news.delete', ['lang' => $lang, 'id' => $post->id]) }}" method="POST" id="postDelete{{ $post->id }}">@method('DELETE')@csrf</form>
                  </td>
                </tr>
              @empty
                
              @endforelse
            </tbody>
          </table>
        </div>
        <div class="card-footer d-flex align-items-center">
          <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
          <ul class="pagination m-0 ms-auto">
            {{ $posts->links() }}
          </ul>
          
        </div>
      </div>
    </div>
</div>
@endsection