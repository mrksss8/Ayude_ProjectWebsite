@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">News Details</h1>
            </div>
          </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        @if (!empty($item->posts))
          <div class="row">
            <div class="col-md-8 ftco-animate">
              <p>
                <img src="{{ asset('storage/news-images/'.$item->posts[0]->image) }}" alt="" class="img-fluid">
              </p>
              <h2 class="mb-3 mt-5">{{ $item->posts[0]->title }}</h2>
              <p>{{ $item->posts[0]->body }}</p>

              <div class="pt-5 mt-5">
                <h3 class="mb-5">{{ $item->posts[0]->commentsCount($item->posts[0]->id) }} Comments</h3>
                <ul class="comment-list">
                  @forelse ($item->posts[0]->getComments($item->posts[0]->id) as $comment)
                    <li class="comment">
                      <div class="comment">
                        <h4>{{ $comment->getCommenter($comment->guest_id)->name }}</h4>
                        <div class="meta">{{ $comment->updated_at }}</div>
                        <p>{{ $comment->comment }}</p>
                      </div>
                    </li>
                  @empty
                  @endforelse
                </ul>
                <!-- END comment-list -->
                <div class="comment-form-wrap pt-5">
                  <h3 class="">Leave a comment</h3>
                  <form action="{{ route('news.blog.comment', $item->posts[0]->id) }}" method="POST" class="p-5 bg-light" id="commentForm">
                    @csrf
                    {{-- <h4 class="mb-2 d-none" id="replyToName">Reply to <span id="replyName"></span></h4> --}}
                    <div class="form-group">
                      <label for="name">Name *</label>
                      <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email *</label>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                      <label for="website">Website</label>
                      <input type="text" class="form-control" name="website" id="website">
                    </div>
                    <div class="form-group">
                      <label for="message">Comment</label>
                      <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn py-3 px-4 btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div> 
            <x-recent-news language="{{ $item->id }}" id="{{ $item->posts[0]->id }}" />
          </div>
        @else
          <p>This post is not available in {{ $item->language }}</p>
        @endif
      </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
      $( document ).ready(function() {
        $('.reply').each(function(){
          $(this).on('click', function(){
            $("#"+$(this).data('id')).toggleClass('d-none')
          })
        })
      });
    </script>
@endsection