<div class="section-full p-t120 p-b90 site-bg-white tw-company-approch-area">

    <div class="container">

        <div class="wt-separator-two-part">
            <div class="row wt-separator-two-part-row">
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">

                    @include('components.section-title', [
                        'heading' => 'Company Approach',
                        'sub_heading' => 'Reliable Vehicle Logistics Solutions',
                        'text' => false,
                        'alignment' => 'left'
                    ])

                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                    <a href="{{ route('about') }}" class="btn-half site-button"><span>Read More</span><em></em></a>
                </div>
            </div>
        </div>


        <div class="tw-company-approch-section">
            <div class="tw-company-approch-inner">
                <div class="tw-company-years">
                    <div class="light">
                        <h1>20</h1>
                        <img src="{{ asset("images/20 years of experience.png") }}" alt="">
                    </div>
                    <div class="tw-company-info">
                        <span>Years of experience in vehicle logistics services</span>
                    </div>
                </div>

                <div class="row">

                    <!--block 1-->
                    <div class="col-lg-4 col-md-12">
                        <div class="counter-outer-two">
                            <div class="tw-counter-media">
                                <img src="{{ asset("images/icons/c-pic1.png")}}" alt="">
                            </div>
                            <div class="icon-content">
                                 <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">195</span>+</div>
                                <h3 class="icon-content-info">High Delivery Pace</h3>
                            </div>
                        </div>
                    </div>

                    <!--block 2-->
                    <div class="col-lg-4 col-md-12">
                        <div class="counter-outer-two">
                            <div class="tw-counter-media">
                                <img src="{{ asset("images/icons/c-pic2.png")}}" alt="">
                            </div>
                            <div class="icon-content">
                                 <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">250</span>+</div>
                                <h3 class="icon-content-info">Professional Loading Services</h3>
                            </div>
                        </div>
                    </div>

                    <!--block 3-->
                    <div class="col-lg-4 col-md-12">
                        <div class="counter-outer-two">
                            <div class="tw-counter-media">
                                <img src="{{ asset("images/icons/c-pic3.png")}}" alt="">
                            </div>
                            <div class="icon-content">
                                 <div class="tw-count-number site-text-primary"><span class="counter site-text-primary">350</span>+</div>
                                <h3 class="icon-content-info">Precise Tracking Services</h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
