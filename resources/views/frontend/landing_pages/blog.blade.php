@extends('frontend.layouts.main_land_page')

@section('content')
    <div class="hero-wrap" style="background-image: url({{ asset('images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            
              <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">News</h1>
            </div>
          </div>
        </div>
    </div>

  
    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @forelse ($posts as $post)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('news.blog', ['lang' => $lang, 'id' => $post->id]) }}" class="block-20" style="background-image: url({{ asset('storage/news-images/'.$post->image) }});"></a>
              <div class="text p-4 d-flex flex-column" style="width: 300px">
                <div class="meta mb-3">
                  <div><a href="#">{{ $post->updated_at }}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{ $post->commentsCount($post->id) }}</a></div>
                </div>
                <h3 class="heading mt-3"><a href="{{ route('news.blog', ['lang' => $lang, 'id' => $post->id]) }}">{{ $post->title }}</a></h3>
                <p class="text-truncate">{{ $post->body }}</p>
              </div>
            </div>
          </div>
          @empty
            
          @endforelse
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            {{ $posts->links() }}
          </div>
        </div>
      </div>
    </section>
@endsection