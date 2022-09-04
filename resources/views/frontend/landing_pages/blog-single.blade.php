@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
               <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Details</span></p>
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1>
            </div>
          </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
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
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>{{ $comment->getCommenter($comment->guest_id)->name }}</h3>
                      <div class="meta">{{ $comment->created_at }}</div>
                      <p>{{ $comment->comment }}</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>
                  </li>
                @empty
                  
                @endforelse
              </ul>
              <!-- END comment-list -->

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="{{ route('news.blog.comment', $item->posts[0]->id) }}" method="POST" class="p-5 bg-light">
                  @csrf
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
          
          <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              @foreach ($item->posts[0]->posts() as $post)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url({{ asset('storage/news-images/'.$post->image) }});"></a>
                  <div class="text">
                    <h3 class="heading"><a href="{{ route('news.blog', ['lang' => $item->id, 'id' => $post->id]) }}">{{ $post->title }}</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
      </div>
    </section>
@endsection