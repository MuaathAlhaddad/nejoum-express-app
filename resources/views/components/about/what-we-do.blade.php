<div class="section-full p-t120 p-b90 site-bg-gray tw-what-wedo-area">

    <div class="container">

        @include('components.section-title', [
                'heading' => 'What we do!',
                'sub_heading' => 'Best Vehicle Logistics Services',
                'text' => false,
                'alignment' => 'center'
            ])

        <div class="tw-what-wedo-section">

            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="tw-what-wedo-media">
                        <img src={{ asset("images/icons/what-we-do.jpg")}} alt="">
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="tw-service-icon-box-wrap">

                        <!-- COLUMNS 1 -->
                        <div class="service-icon-box-two">

                            <div class="service-icon-box-two-media">
                                <img src={{ asset("images/icons/warehouses.png")}} alt="#">
                            </div>

                            <div class="service-icon-box-title">
                                <h3 class="wt-title">
                                    <a href="{{ route("services.warehousing")}}"> <span class="site-text-primary">01.</span>Warehousing</a>
                                </h3>
                                <p>Our warehousing services are designed to always have a high capacity to accommodate the new cars that come in every day. </p>
                            </div>

                        </div>

                        <!-- COLUMNS 2 -->
                        <div class="service-icon-box-two">

                            <div class="service-icon-box-two-media">
                                <img src={{ asset("images/icons/pic2.png")}} alt="#">
                            </div>

                            <div class="service-icon-box-title">
                                <h3 class="wt-title">
                                    <a href="{{ route('services.ocean_freight') }}"> <span class="site-text-primary">02.</span>Ocean Freight</a>
                                </h3>
                                <p>We provide ocean freight services, sending your vehicles to the Middle East and Southeast Asia </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
