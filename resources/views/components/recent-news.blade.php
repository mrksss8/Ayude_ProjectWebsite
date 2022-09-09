<!-- .col-md-8 -->
<div class="col-md-4 sidebar ftco-animate">
  <div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    @foreach ($news as $post)
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url({{ asset('storage/news-images/'.$post->image) }});"></a>
        <div class="text">
          <h3 class="heading"><a href="{{ route('news.blog', ['lang' => $language, 'id' => $post->id]) }}">{{ $post->title }}</a></h3>
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