 <!-- Start Header Area  -->
 @if(request()->routeIs('index'))
        <header class="header-area header-style-two header--transparent header-light-mode header--sticky">
            <div class="header-wrapper">
                <div class="header-left d-flex align-items-center">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="assets/images/logo/logo-symbol-dark.png" alt="Creative Agency">
                        </a>
                    </div>
                    <nav class="mainmenunav d-lg-block ml--50">
                        <div class="navbar-example2">
                            <!-- Start Mainmanu Nav -->
                            <ul class="mainmenu nav nav-pills onepagenav">
                                <li class="nav-item current">
                                    <a class="nav-link" href="#home">Home</a>
                                </li>
                                                                <li>
                                    <a class="nav-link" href="#client_logo">Client</a>
                                </li>
                                                                <li>
                                    <a class="nav-link" href="#gt">Global Training</a>
                                </li>
                                                                <li>
                                    <a class="nav-link" href="#map">Map</a>
                                </li>
                                                                                                <li>
                                    <a class="nav-link" href="#video">Videos</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Service</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="#founder">Founder</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <!-- End Mainmanu Nav -->
                        </div>
                    </nav>
                    {{-- ================= OTHER PAGES NAVBAR ================= --}}
@else

<nav class="header-area header--sticky bg-white shadow-sm py-3">

    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/images/logo/logo-symbol-dark.png') }}"
                     alt="Logo"
                     style="height:40px;">
            </a>
        </div>

        <div>
            <a href="{{ route('index') }}" class="rn-button-style--2">
                ← Back to Home
            </a>
        </div>

    </div>

</nav>

@endif
                </div>
                <div class="header-right">
                    <div class="social-share-inner">
                        <ul class="social-share social-style--2 d-flex justify-content-start liststyle">
                        <li><a href="https://www.facebook.com/quazi.ahmed"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/quaziahmed/"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="header-btn ml_md--20 ml_sm--0"><a class="rn-btn" href="#"><span>buy now</span></a> --}}
                    </div>
                    <!-- Start Humberger Menu  -->
                    <div class="humberger-menu d-block d-lg-none pl--20 pl_sm--10">
                        <span class="menutrigger text-white">
                            <i data-feather="menu"></i>
                        </span>
                    </div>
                    <!-- End Humberger Menu  -->
                    <!-- Start Close Menu  -->
                    <div class="close-menu d-block d-lg-none">
                        <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                    <!-- End Close Menu  -->
                </div>
            </div>
        </header>
        <!-- End Header Area  -->