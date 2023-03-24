<div class="section-full section-full p-t120 p-b90 tw-project-2-wrap site-bg-gray">
    <!-- IMAGE CAROUSEL START -->
    <div class="section-content">

        <div class="container">

            @include('components.section-title', [
                        'heading' => 'Our Warehouses',
                        'sub_heading' => false,
                        'text' => false,
                        'alignment' => 'center'
                        ])

        </div>

        <div class="tw-project-2-content m-b30">
            <div class="tw-project-2-content-position">

                <div class="owl-carousel project-carousel-2">

                    <!-- COLUMNS 1 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset("images/project/texas warehouse.png")}}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset("images/project/texas warehouse.png")}}" title="Texas"
                                       data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset("images/project/1 - Home - 397x352.png")}}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <h4 class="wt-title"><a href="{{ route('services') }}">Texas</a></h4>
                                <span class="project-new-category">6 Linden Ave. East Jersey City, NJ 07305</span>
                                {{-- <a href="{{ route('services') }}" class="site-button-h-align">Read More</a>--}}
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 2 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset("images/project/New jeresey warehouse.png")}}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset("images/project/New jeresey warehouse.png")}}" title="New Jersey"
                                       data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset("images/project/2 - Home - 397x352.png")}}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <h4 class="wt-title"><a href="{{ route('services') }}">New Jersey</a></h4>
                                <span class="project-new-category">6012 Murphy St Houston,TX 77033</span>
                                {{-- <a href="{{ route('services') }}" class="site-button-h-align">Read More</a>--}}
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 3 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset("images/project/california.png")}}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset("images/project/california.png")}}" title="California"
                                       data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset("images/project/3 - Home - 397x352.png")}}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <h4 class="wt-title"><a href="{{ route('services') }}">California</a></h4>
                                <span class="project-new-category">46 ARTLEY ROAD SAVANNAH, GA 31408</span>
                                {{-- <a href="{{ route('services') }}" class="site-button-h-align">Read More</a>--}}
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="item">
                        <div class="project-new-2">
                            <div class="wt-img-effect">
                                <img src="{{ asset("images/project/georgia.png")}}" alt="">
                                <div class="project-view">
                                    <a class="elem pic-long project-view-btn" href="{{ asset("images/project/georgia.png")}}" title="Georgia"
                                       data-lcl-txt="" data-lcl-author="" data-lcl-thumb="{{ asset("images/project/4 - Home - 397x352.png")}}">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-new-content">
                                <h4 class="wt-title"><a href="{{ route('services') }}">Georgia</a></h4>
                                <span class="project-new-category">131 E. Gardena Blvd. Gardena, CA 90247</span>
                                {{-- <a href="{{ route('services') }}" class="site-button-h-align">Read More</a>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
