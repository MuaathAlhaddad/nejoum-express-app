<div class="section-full p-t120 site-bg-white  tw-estimation-area">

    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">

                    @include('components.section-title', [
                        'heading' => 'Who are we',
                        'sub_heading' => 'We are all around in the US',
                        'text' => 'We are located in the most strategic locations amongst the United States.',
                        'alignment' => 'left'
                    ])

                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                    <a href="{{ route('about') }}" class="btn-half site-button"><span>Read More</span><em></em></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-12 col-lg-12 col-md-12 wt-separator-two-part-left">

                    @include('components.section-title', [
                        'heading' => 'Our Service Features',
                        'sub_heading' => false,
                        'text' => 'By receiving our services you also enjoy the following features of the logistics services.',
                        'alignment' => 'center'
                    ])

                </div>
            </div>
        </div>
    </div>

    <div class="tw-estimation-section bg-cover bg-no-repeat" style="background-image: url(images/background/services-page-1920x703-features.png);">
        <div class="container">
            <div class="row">
                <!--1-->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="tw-est-section-block">
                        <div class="tw-est-section-block-content">
                            <span class="tw-est-section-number">01</span>
                            <h3 class="tw-title">Specialized Solutions</h3>
                            <p>We provide the best solutions for transporting your vehicles where we consider the case of each car independently.</p>
                            <a href="{{ route('about') }}" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--2-->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="tw-est-section-block">
                        <div class="tw-est-section-block-content">
                            <span class="tw-est-section-number">02</span>
                            <h3 class="tw-title">Strategic Coverage</h3>
                            {{-- TODO add the content of this section --}}
                            <p>We provide multiple drop off and pickup locations so you don't have to worry. And you should not face any kind...</p>
                            <a href="{{ route('about') }}" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="tw-est-section-block">
                        <div class="tw-est-section-block-content">
                            <span class="tw-est-section-number">03</span>
                            <h3 class="tw-title">Multiple Destinations</h3>
                            <p>You may receive your cars in multiple destinations around the world such as in UAE, Oman, Iraq, and Cambodia</p>
                            <a href="{{ route('about') }}" class="site-button-2-outline"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>
