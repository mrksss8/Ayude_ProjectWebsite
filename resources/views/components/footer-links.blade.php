<div class="col-md-2">
  <div class="ftco-footer-widget mb-4 ml-md-4">
    <h2 class="ftco-heading-2">Site Links</h2>
    <ul class="list-unstyled">
      @foreach ($navs as $nav)
        <li><a href="{{ route($nav->route_name, $language) }}" class="py-2 d-block">{{ $nav->nav_name }}</a></li>
      @endforeach
    </ul>
  </div>
</div>