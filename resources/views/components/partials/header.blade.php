<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('web') }}">
                    {{-- <img src="{{ asset('assets') }}/img/logo.png" alt=""> --}}
                    <h1 class="text-gray-100 font-bold text-3xl">Blogs</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item @yield('home-active')"><a class="nav-link"
                                href="{{ route('web') }}">Home</a></li>
                        <li class="nav-item @yield('categories-active') submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Food</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('categories') }}">Bussiness</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Travel</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item @yield('contact-active')"><a class="nav-link"
                                href="{{ route('contacts') }}">Contact</a></li>
                    </ul>

                    <!-- Add new blog -->
                    <a href="#" class="btn btn-sm btn-primary mr-2">Add New</a>
                    <!-- End - Add new blog -->

                    <ul class="nav navbar-nav navbar-right navbar-social">
                        @if (!Auth::check())
                            <a href="{{ route('register') }}" class="btn btn-sm btn-warning">Register / Login</a>
                        @else
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                  aria-expanded="false">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog-details.html">Profile</a></li>
                                    <li class="nav-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="nav-link btn btn-link">Logout</button>
                                        </form></li>
                                </ul>
                            </li>
                        @endif



                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->
