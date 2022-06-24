
<li class="nav-item btn-group">
    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-expanded="false">Language</a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($languages as $lang)
            <a class="dropdown-item" href="{{ route(\Request::route()->getName(), ['page' => Request::segment(1), 'lang' => $lang->id]) }}">
                <span class="text-black"><img src="https://flagcdn.com/16x12/{{ $lang->symbol }}.png" alt="" class="m-2">{{ $lang->language }}</span>
            </a>
        @endforeach
    </div>
</li>
