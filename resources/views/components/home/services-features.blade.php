<div class="section-full p-t120 p-b90 site-bg-white  tw-estimation-2-area">
<div class="container">

    <div class="wt-separator-two-part">
        <div class="row wt-separator-two-part-row">
            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">

                @include('components.section-title', [
                        'heading' => 'Our Service Features',
                        'sub_heading' => false,
                        'text' => 'By receiving our services you also enjoy the following features of the logistics services.',
                        'alignment' => 'left'
                        ])

            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                <a href="{{ route('about') }}" class="btn-half site-button"><span>Read More</span><em></em></a>
            </div>
        </div>
    </div>
</div>
<div class="tw-estimation-2-section">
    <div class="container">
        <div class="row">

            <!--1-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="tw-est-2-section-block">
                    <div class="tw-est-2-section-block-content">
                        <span class="tw-est-2-section-number">01</span>
                        <div class="media">
                            <img src="images/estimation-icon/pic1.png" alt="#">
                        </div>
                        <h3 class="tw-title">Specialized Solutions</h3>
                        <p class="min-vh-50">We provide the best solutions for transporting your vehicles where we consider the case of each car independently.
                           Car Wrapping</p>
                        <a href="{{ route('about') }}" class="site-button-2-outline dark"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!--2-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="tw-est-2-section-block">
                    <div class="tw-est-2-section-block-content">
                        <span class="tw-est-2-section-number">02</span>
                        <div class="media">
                            <img src="images/estimation-icon/multiple_destinations.png" alt="#">
                        </div>
                        <h3 class="tw-title">Multiple Destinations</h3>
                        <p class="min-vh-50">You may receive your cars in multiple destinations around the world such as in UAE, Oman, Iraq, and Cambodia</p>
                        <a href="{{ route('about') }}" class="site-button-2-outline dark"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <!--3-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="tw-est-2-section-block">
                    <div class="tw-est-2-section-block-content">
                        <span class="tw-est-2-section-number">03</span>
                        <div class="media">
                            <img src="images/estimation-icon/Multiple_loactions.png" alt="#">
                        </div>
                        <h3 class="tw-title">Multiple locations</h3>
                        <p class="min-vh-50">Our Warehouses cover strategic locations in the United States.</p>
                        <a href="{{ route('about') }}" class="site-button-2-outline dark"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
