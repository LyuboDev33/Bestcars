<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img src="/images/logo-bestcars-white.png" alt="Logo">
                </a>

                <div class="d-flex align-items-center gap-2">

                    <!-- LANGUAGE DROPDOWN -->
                    <div class="dropdown">

                        <button class="dropbtn">
                            <i class="fa-solid fa-earth-americas"></i>

                            @php
                                $languages = [
                                    'en' => 'English',
                                    'bg' => 'Български',
                                ];

                                $locale = app()->getLocale();
                            @endphp

                            {{ $languages[$locale] ?? 'Български' }}
                        </button>

                        <div id="myDropdown" class="dropdown-content">

                            <a href="{{ route('change-language', ['lang' => 'en']) }}">
                                <img src="https://flagcdn.com/32x24/gb.png" alt="English flag" />
                                English
                            </a>

                            <a href="{{ route('change-language', ['lang' => 'bg']) }}">
                                <img src="https://flagcdn.com/32x24/bg.png" alt="Bulgarian flag" />
                                Български
                            </a>

                        </div>

                    </div>
                    <!-- END LANGUAGE DROPDOWN -->

                    <!-- Main Menu -->
                    <div class="collapse navbar-collapse main-menu">

                        <div class="nav-menu-wrapper">

                            <ul class="navbar-nav mr-auto" id="menu">

                                <li class="nav-item">
                                    <a class="nav-link" href="/">
                                        {{ __('header.menu_home') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/services">
                                        {{ __('header.menu_services') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/about">
                                        {{ __('header.menu_about') }}
                                    </a>
                                </li>

                                        <li class="nav-item">
                                    <a class="nav-link" href="/blog">
                                        {{ __('header.menu_blog') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">
                                        {{ __('header.menu_contact') }}
                                    </a>
                                </li>

                                @if (Auth::check())
                                    <li class="nav-item submenu">
                                        <a class="nav-link admin" href="/dashboard/cars/list">
                                            {{ __('header.menu_admin') }}
                                        </a>
                                        <ul>
                                            <li><a href="/dashboard/cars/list">{{ __('header.menu_dashboard') }}</a></li>
                                            <li><a href="/logout">{{ __('header.menu_logout') }}</a></li>
                                        </ul>
                                    </li>
                                @endif

                            </ul>

                        </div>

                        <!-- Right Side -->
                        <div class="header-btn d-inline-flex align-items-center gap-3">

                            <a href="/cars" class="btn-default">
                                {{ __('header.btn_browse_cars') }}
                            </a>

                            <a class="tel" href="tel:+0889799094">
                                088 979 9094
                            </a>

                        </div>

                    </div>

                    <div class="navbar-toggle"></div>

                </div>

            </div>
        </nav>

        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
