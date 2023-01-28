<header class="site-header header-style-3 mobile-sider-drawer-menu">

        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">

                <div class="container-fluid clearfix">

                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.html">
                                <img src="{{ asset('images/Logo Color.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                        <ul class=" nav navbar-nav">
                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="{{ route('services') }}">Services</a></li>

                            <li><a href="{{ route('about') }}">About</a></li>

                            <li><a href="{{ route('contact') }}">Contact</a></li>

                        </ul>

                    </div>

                    <!-- Header Right Section-->
                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <div class="header-nav-call-section">
                                <div class="detail">
                                    <span class="title">Call our number</span>
                                    <span><a href="tel:8008888888">800 8888 888</a></span>
                                </div>
                                <div class="media">
                                    <img src="images/call.png" alt="#">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>
