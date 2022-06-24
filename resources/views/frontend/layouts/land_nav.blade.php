<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container" style="">
        <a class="navbar-brand text-primary" href="{{ route('frontend.home', ['lang' => $item->id]) }}">Ayude <sup style="font-size: 12px;">For A New
                Day</sup></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item"><a href="{{ route('navigate', ['page' => 'index', 'lang' => $item->id]) }}" class="nav-link">Home</a>
                </li> --}}

                {{-- <li class="nav-item"><a href="{{ route('navigate', 'landing_page_about') }}" class="nav-link">About</a></li> --}}
            

                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('navigate', ['page' => 'landing_page_about', 'lang' => $item->id]) }}">Mission &
                            Vision</a>
                        <a class="dropdown-item" href="{{ route('navigate', ['page' => 'history', 'lang' => $item->id]) }}">History</a>
                        <a class="dropdown-item" href="{{ route('navigate', ['page' => 'board', 'lang' => $item->id]) }}">Board</a>
                    </div>
                </li>


                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">Project Operation</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('navigate', ['page' => 'financing', 'lang' => $item->id]) }}">Financing & Targeted Areas</a>
                        <a class="dropdown-item" href="{{ route('navigate', ['page' => 'projects', 'lang' => $item->id]) }}">Projects</a>
                    </div>
                </li>
                
                <li class="nav-item"><a href="{{ route('navigate', ['page' => 'gallery', 'lang' => $item->id]) }}" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{ route('navigate', ['page' => 'news', 'lang' => $item->id]) }}" class="nav-link">News</a>
                </li>
                <li class="nav-item"><a href="{{ route('navigate', ['page' => 'help_us', 'lang' => $item->id]) }}" class="nav-link">Help
                        Us</a></li>
                <li class="nav-item">
                    <a href="{{ route('frontend.contact', ['lang' => $item->id]) }}" class="nav-link">
                        Contact Us
                    </a>
                </li>

                <x-language-nav />


            {{-- <li class="nav-item"><a href="{{ route('navigate', 'causes') }}" class="nav-link">Causes</a></li> --}}
            {{-- <li class="nav-item"><a href="{{ route('navigate', 'donation') }}" class="nav-link">Donate</a></li> --}}
            {{-- <li class="nav-item"><a href="{{ route('navigate', 'blog') }}" class="nav-link">Blog</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
