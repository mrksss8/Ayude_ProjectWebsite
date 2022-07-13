<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container" style="">
        <a class="navbar-brand text-primary" href="{{ route('homepage', ['lang' => $item->id]) }}">Ayude <sup style="font-size: 12px;">For A New
                Day</sup></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @foreach ($item->mainNavs as $nav)
                    <li class="nav-item {{ $nav->subnavCount($nav->id) != 0 ? 'btn-group' : '' }}">
                        <a class="nav-link {{$nav->subnavCount($nav->id) != 0 ? 'dropdown-toggle' : '' }}" id="{{ "nav".$nav->id }}" 
                            {{ $nav->subnavCount($nav->id) != 0 ?  'type=button data-toggle=dropdown
                            aria-expanded=false' : ''}}  
                        >{{ $nav->nav_name }}</a>
                        @if($nav->subnavCount($nav->id) != 0)
                            <div class="dropdown-menu" aria-labelledby="{{ "nav".$nav->id }}">
                                @foreach ($nav->subNavs as $subnav)
                                    <a class="dropdown-item" href="{{ route($subnav->route_name, $item->id) }}">
                                        {{ $subnav->nav_name }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach

                <x-language-nav />
            </ul>
        </div>


    </div>
</nav>
