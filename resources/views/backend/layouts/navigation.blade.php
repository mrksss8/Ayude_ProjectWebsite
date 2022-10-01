<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item @if (request()->routeIs('dashboard.home')) active @endif">
                        <a class="nav-link" href="{{ route('dashboard.home') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="13" r="2"></circle>
                                    <line x1="13.45" y1="11.55" x2="15.5" y2="9.5"></line>
                                    <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                                 </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Dashboard') }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if (request()->routeIs('homepage.show')) active @endif">
                        <a class="nav-link" href="{{ route('homepage.show', ['lang' => 1]) }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Home') }}
                            </span>
                        </a>
                    </li>


                    {{-- <li class="nav-item @if (request()->routeIs('about')) active @endif">
                        <a class="nav-link" href="{{ route('about') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('About') }}
                            </span>
                        </a>
                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/select -->
	                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M9 11l3 3l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('About') }}
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('about_mission_vision.show', 1) }}">
                                {{ __('Mission & Vision') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('about_history.show', 1) }}">
                                {{ __('History') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('gallery.show') }}">
                                {{ __('Gallery') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('about_board.show', 1) }}">
                                {{ __('Board') }}
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/select -->
	                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M9 11l3 3l3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Project Operation') }}
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('financing.show', 1) }}">
                                {{ __('Financing & Target Areas') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('project.show', 1) }}">
                                {{ __('Projects') }}
                            </a>
                            {{-- <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    Submenu Item #2
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        Subsubmenu Item #1
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Subsubmenu Item #2
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Subsubmenu Item #3
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </li>


                    <!-- news -->
                    <li class="nav-item @if (request()->routeIs('news.index')) @endif">
                        <a class="nav-link" href="{{ route('news.index', 1) }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                               <!-- Download SVG icon from http://tabler-icons.io/i/news -->
	                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                <line x1="8" y1="8" x2="12" y2="8" />
                                <line x1="8" y1="12" x2="12" y2="12" />
                                <line x1="8" y1="16" x2="12" y2="16" />
                            </svg>
                            </span>
                            <span class="nav-link-title">
                                News
                            </span>
                        </a>
                    </li>

                    {{-- help us --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('help-us.show',1) }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Help Us
                            </span>
                        </a>
                    </li>

                    {{-- contact us --}}
                    <li class="nav-item @if (request()->routeIs('contactus.show'))@endif">
                        <a class="nav-link" href="{{ route('contactus.show', ['lang'=>1]) }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/id -->
	                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <rect x="3" y="4" width="18" height="16" rx="3" />
                                    <circle cx="9" cy="10" r="2" />
                                    <line x1="15" y1="8" x2="17" y2="8" />
                                    <line x1="15" y1="12" x2="17" y2="12" />
                                    <line x1="7" y1="16" x2="17" y2="16" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Contact Us
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if (request()->routeIs('navigation.show')) active @endif">
                        <a class="nav-link" href="{{ route('navigation.show', ['id'=>1]) }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="4" y1="6" x2="20" y2="6" />
                                    <line x1="4" y1="12" x2="20" y2="12" />
                                    <line x1="4" y1="18" x2="20" y2="18" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Navigations') }}
                            </span>
                        </a>
                    </li>

                    {{-- Languages --}}
                    <li class="nav-item @if (request()->routeIs('lang.index'))@endif">
                      <a class="nav-link" href="{{ route('lang.index') }}">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-language" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M4 5h7"></path>
                              <path d="M9 3v2c0 4.418 -2.239 8 -5 8"></path>
                              <path d="M5 9c-.003 2.144 2.952 3.908 6.7 4"></path>
                              <path d="M12 20l4 -9l4 9"></path>
                              <path d="M19.1 18h-6.2"></path>
                          </svg>
                          </span>
                          <span class="nav-link-title">
                              Languages
                          </span>
                      </a>
                  </li>


                  {{-- Other Options --}}
                  <li class="nav-item @if (request()->routeIs('success.show')) active @endif">
                    <a class="nav-link" href="{{ route('success.show', 1) }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-chatbot" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path>
                                <path d="M9.5 9h.01"></path>
                                <path d="M14.5 9h.01"></path>
                                <path d="M9.5 13a3.5 3.5 0 0 0 5 0"></path>
                             </svg>
                        </span>
                        <span class="nav-link-title">
                            {{ __('Others') }}
                        </span>
                    </a>
                </li>

                </ul>
            </div>
        </div>
    </div>
</div>
