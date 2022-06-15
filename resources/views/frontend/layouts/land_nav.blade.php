<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container" style="">
        <a class="navbar-brand text-primary" href="index.html">Ayude <sup style="font-size: 12px;">For A New
                Day</sup></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('navigate', 'index') }}" class="nav-link">Home</a>
                </li>

                {{-- <li class="nav-item"><a href="{{ route('navigate', 'landing_page_about') }}" class="nav-link">About</a></li> --}}


                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('navigate', 'landing_page_about') }}">Mission &
                            Vision</a>
                        <a class="dropdown-item" href="{{ route('navigate', 'history') }}">History</a>
                        <a class="dropdown-item" href="{{ route('navigate', 'board') }}">Board</a>
                    </div>
                </li>


                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-expanded="false">Project Operation</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">



                        <a class="dropdown-item" href="{{ route('navigate', 'financing') }}">Financing & Targeted
                            Areas</a>
                        <a class="dropdown-item" href="{{ route('navigate', 'projects') }}">Projects</a>
                    </div>
                </li>

                <li class="nav-item"><a href="{{ route('navigate', 'gallery') }}"
                        class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="{{ route('navigate', 'news') }}" class="nav-link">News</a>
                </li>
                <li class="nav-item"><a href="{{ route('navigate', 'help_us') }}" class="nav-link">Help
                        Us</a></li>
                <li class="nav-item"><a href="{{ route('navigate', 'contact') }}" class="nav-link">Contact
                        Us</a></li>


                {{-- <li class="nav-item"><a href="{{ route('navigate', 'causes') }}" class="nav-link">Causes</a></li> --}}
                {{-- <li class="nav-item"><a href="{{ route('navigate', 'donation') }}" class="nav-link">Donate</a></li> --}}
                {{-- <li class="nav-item"><a href="{{ route('navigate', 'blog') }}" class="nav-link">Blog</a></li> --}}
            </ul>
        </div>
        <div>
            <li class="nav-item btn-group">
                <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown"
                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                    {{-- <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/select -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="4" y="4" width="16" height="16" rx="2" />
                            <path d="M9 11l3 3l3 -3" />
                        </svg>
                    </span> --}}
                    <span class="nav-link-title">
                        {{ __('Languages') }}
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @php
                        $languages = DB::table('languages')->get();
                    @endphp
                    @foreach ($languages as $language)
                        <a class="dropdown-item" href="{{ route('active_language.update', $language->id) }}">
                            <span><img src="{{ asset('images/' . $language->symbol . '.png') }}" alt=""
                                    class="m-2">{{ $language->language }}</span>

                        </a>
                    @endforeach
                </div>
            </li>
        </div>

    </div>
</nav>
