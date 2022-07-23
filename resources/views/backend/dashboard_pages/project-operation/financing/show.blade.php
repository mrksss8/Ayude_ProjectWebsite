<div class="container-xl">
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-title">
                    {{ __('Help Us') }}
                </h1>
            </div>
            <div class="col-auto">
                <div class="btn-list">
                    {{-- @if ($abouthistory != null)
                        <a href="{{ route('about_history.edit', $abouthistory->language_id) }}"
                            class="btn d-none d-md-inline-flex btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                            <!-- SVG icon code -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                <path d="M16 5l3 3"></path>
                            </svg>
                            Edit
                        </a>
                    @else
                        <a href="{{ route('about_history.create', $lang_id) }}" class="btn d-none d-md-inline-flex btn-yellow" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <desc>Download more icon variants from https://tabler-icons.io/i/plus</desc>
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Create
                    @endif --}}

    <!-- Uncomment code above then Delete this Edit Button Below -->
                    <a href="#"
                        class="btn d-none d-md-inline-flex btn-primary">
                        <!-- Download SVG icon from http://tabler-icons.io/i/edit -->
                        <!-- SVG icon code -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/edit</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                            <path d="M16 5l3 3"></path>
                        </svg>
                        Edit
                    </a>

                    <a class="btn nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/select -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M9 11l3 3l3 -3" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            {{-- {{ __('Languages') }} --}}
                            Languages
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        {{-- @foreach ($languages as $language)
                            <a class="dropdown-item" href="{{ route('about_history.show', $language->id) }}">
                                <span><img src="{{ asset('images/' . $language->symbol . '.png') }}" alt=""
                                        class="m-2">{{ $language->language }}</span>

                            </a>
                        @endforeach --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Under First Title -->
<div class="card-body ">
    <div class="row g-4">
        <div class="col-12 markdown">
            <h1 class = "text-center">Place Financing</h1>
            <br>
            <p class="mt-4">Ayude has consciously opted for the place financing formula (and therefore not for individual financial adoption or sponsorships). In this way the sponsor / donor finances and supports a place for a child in a specific project. After all, we would like every child from the projects to be treated in the same way. Moreover, if a specific child disappears from a project, for example due to the relocation of the parents or guardian, the place of this child is immediately filled by one of the many children on our waiting lists.</p>

            <h3 class="mt-4">What does this mean?</h3>
            <ul>
                <li>Subscribe to our newsletter and you will regularly receive an update of the different projects and / or the project you wish to support. This also includes accounts of experiences from the children’s lives. This will give you an idea of ​​how life for the children there and how the projects develop.</li>
                <li>Like us on facebook and you can find all our activities, newsflashes and photos of the different projects.</li>
            </ul>
            <p class="mt-4">If you would like more information or if you only wish to receive updates for one specific project, please send us an email at ayude4anewday@gmail.com .</p>
        </div>
<!--Card-->
        <div class="col-12 markdown">
            <h1 class = "text-center">Target Areas</h1>
            <p class="mt-4">Ayude is committed as much as possible to offer street children a hopeful future. We try to improve the poverty and the appalling living conditions of the children and their families by providing care and assistance in various ways. When you click on a topic in the list above, you will learn more about how we work in each target area.</p>
            <h3 class="mt-4">1. Helping street and orphans and families to which they belong</h3>
            <p class="mt-4">Ayude is committed to offering a hopeful future to as many street children as possible. We try to improve the poverty and the appalling living conditions of children and families through care and assistance in the following way:</p>
            <br>
            <div class="card-group mt-4">
                <div class="card">
                    <!-- For each here -->
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(...)"></div>
                  <div class="card-body">
                    <h4 class="card-title">Healthcare</h4>
                    <p class="card-text">General medical care, treatment of tuberculosis, dental care, hygiene and health education for the children and their parents.</p>
                  </div>
                </div>
                <div class="card">
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(...)"></div>
                  <div class="card-body">
                    <h4 class="card-title">Education</h4>
                    <p class="card-text">We believe that education is the key to breaking the cycle of the vicious poverty circle. That is why we place education at the center of all our partner organizations. Special attention is paid to girls who in certain societies still have no right to education.</p>
                  </div>
                </div>
                <div class="card">
                    <div class="card-img-top img-responsive img-responsive-21x9" style="background-image: url(...)"></div>
                    <div class="card-body">
                        <h4 class="card-title">Food Distribution</h4>
                        <p class="card-text">Regular food distribution for malnourished children (1st, 2nd or 3rd degree)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 markdown">
            <h3 class="mt-4">2. Allowing micro credits to parents and young people in the projects</h3>
            <p class="mt-4">Providing micro-credits to “taxi companies” with railroad cars, hair salons, tailors, soap makers, garbage recycling, handicraft, cut and seam. The parents and young graduates are then actively and permanently involved in the projects.</p>

            <h3 class="mt-4">3. Emergency Aid and Reconstruction</h3>
            <p class="mt-4">Ayude also occasionally provides assistance with natural disasters such as floods and earthquakes. The first priority in these cases is to provide the affected areas with potable water and food. At a later stage, help is also given in the reconstruction of the houses, schools, etc.</p>

            <h3 class="mt-4">4. Supporting the often inferior position of women in certain societies</h3>
            <p class="mt-4">In addition to the professional care providers, it is not uncommon for the mothers who, as “first-line volunteers”, actively participate in the implementation of the programs and the guidance of the children and their families.</p>
        </div>


