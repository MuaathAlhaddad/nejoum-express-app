<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{asset("/images/banner/$banner")}});">
    <div class="overlay-main site-bg-sky opacity-08"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">{{ $title }}</h2>
                </div>
            </div>

            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    @if( isset($service_single_page))
                        <li><a href="{{ route('services') }}">Services</a></li>
                    @endif
                    <li>{{ $breadcrumb }}</li>
                </ul>
            </div>

        </div>
    </div>
</div>
