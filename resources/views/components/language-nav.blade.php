<li class="nav-item btn-group">
    <a class="nav-link dropdown-toggle" type="button" id="languageNav" data-toggle="dropdown"
        aria-expanded="false">Language</a>
    <div class="dropdown-menu" aria-labelledby="languageNav">
        @foreach ($languages as $lang)
            @if (\Request::route()->getName() == 'news.blog')
              <a class="dropdown-item" href="{{ route(\Request::route()->getName(), ['lang' => $lang->id, 'id' => $id]) }}">
                <span class="text-black"><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
              </a>
            @else
              <a class="dropdown-item" href="{{ route(\Request::route()->getName(), ['lang' => $lang->id]) }}">
                <span class="text-black"><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
              </a>
            @endif
        @endforeach
    </div>
</li>
