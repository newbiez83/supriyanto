<header class="header-area header-2 aos-init aos-animate" data-aos="slide-down">
        <!-- Start mobile menu -->
        <div class="mobile-menu" style="display: none;">
            <div class="container">
                <div class="mobile-menu-wrapper"><ul id="mainMenu" class="navbar-nav mobile-item mx-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link toggle">Home <i class="fal fa-plus"></i></a>
                                
                            </li>
                            
                        </ul><div class="more-option mobile-item">
                        
                        
                    </div></div>
            </div>
        </div>
        <!-- End mobile menu -->

        <div class="main-responsive-nav">
            <div class="container">
                <!-- Mobile Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('assets/image/logo-2.png') }}" alt="logo">
                    </a>
                </div>
                <!-- Menu toggle button -->
                <button class="menu-toggler" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="main-navbar" style="">
            <div class="container custom-container">
                <nav class="navbar navbar-expand-lg justify-content-between">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/image/logo-2.png') }}" alt="Logo">
                    </a>
                    <!-- Navigation items -->
                    <div class="collapse navbar-collapse">
                        <ul id="mainMenu" class="navbar-nav mobile-item mx-auto">
                            <li class="nav-item">
                                <a href="#home" class="nav-link toggle">UJIAN CODING WEB PROGRAMMER RSUD KESESI PEKALONGAN - SUPRIYANTO <i class="fal fa-plus"></i></a>
                                
                            </li>
                            
                        </ul>
                    </div>
                    <div class="more-option mobile-item">
                    @guest
                    <div class="item">
                            <a href="/register" class="btn btn-md btn-primary radius-sm" title="Get a Quote" target="_self">Register</a>
                        </div>
        @endguest
@auth
<form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="btn btn-md btn-primary radius-sm" class="dropdown-item"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="mr-2 fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </a>
                    </form>
        @endauth
                        
                        
                    </div>
                </nav>
            </div>
        </div>
    </header>