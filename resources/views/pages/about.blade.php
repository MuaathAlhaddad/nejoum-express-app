@extends('layouts.app')

@section('title', 'About us')

@section('content')
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
            <div class="overlay-main site-bg-sky opacity-08"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">About Us</h2>
                        </div>
                    </div>
                    <!-- BREADCRUMB ROW -->

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.html">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        @include('components.about.mission-vision', ['title' => 'Mission', 'content' => 'Upgrading the trading field of exported used cars through keeping up with the newest technology integrating it in our company. In addition, the expansion to other countries through initiating other branches and enhancing our level of service while still maintaining competitiveness in the market.'])

        @include('components.about.mission-vision', ['title' => 'Vision', 'content' => 'Easing the vehicle loading and making it accessible along the USA..'])

        @include('components.about.what-we-do')

        @include('components.about.achieved')

        @include('components.about.partners')

        @include('components.about.trademarks')

        @include('components.about.location')

        @include('components.about.approach')


    </div>
@endsection
