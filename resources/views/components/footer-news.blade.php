<div class="col-md-4">
  <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Recent News</h2>
    @forelse ($news as $item)
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">{{ $item->title }}</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span>{{ $item->updated_at }}</a></div>
            <div><a href="#"><span class="icon-person"></span>{{ $item->postedBy($item->user_id) }}</a></div>
            <div><a href="#"><span class="icon-chat"></span>{{ $item->commentsCount($item->id) }}</a></div>
          </div>
        </div>
      </div>
    @empty
      
    @endforelse
    <a href="{{ route('news', $language) }}" class="py-2 d-block">More news ...</a>
  </div>
</div>