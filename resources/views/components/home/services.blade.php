<div class="section-full p-t120 p-b90 site-bg-gray tw-service-gallery-style3-area">

    <div class="services-gallery-block-outer3">
        <div class="container">

            @include('components.section-title', [
                                    'heading' => 'Our Services',
                                    'sub_heading' => false,
                                    'text' => 'Our aim is to optimize and improve the quality and pace of car logistics transportation and to give you the best service.',
                                    'alignment' => 'center'
                                    ])

            <div class="section-content">
                <div class="services-gallery-style3">
                    <div class="row">

                        <!-- COLUMNS 1 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style3">
                                <div class="service-media">
                                    <img src="images/icons/pic5.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title-large"><span class="service-title-large-number">01</span><a href="{{ route('services') }}">Warehousing</a></h3>
                                    <p>Our warehousing services are designed to be always with a high capacity to include the new cars coming everyday.</p>
                                    <a href="{{ route('services') }}" class="site-button-2">View Detail</a>
                                </div>
                            </div>
                        </div>

                        <!-- COLUMNS 2 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style3">
                                <div class="service-media">
                                    <img src="images/icons/pic1.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title-large"><span class="service-title-large-number">02</span><a href="{{ route('services') }}">Car Loading</a></h3>
                                    <p>We provide professional car loading services throughout our experienced team.</p>
                                    <a href="{{ route('services') }}" class="site-button-2">View Detail</a>
                                </div>
                            </div>
                        </div>

                        <!-- COLUMNS 3 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style3">
                                <div class="service-media">
                                    <img src="images/icons/pic6.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title-large"><span class="service-title-large-number">03</span><a href="{{ route('services') }}">NAJ Booking</a></h3>
                                    <p>We manage your bookings with shipping lines to bring the most recent booking dates.</p>
                                    <a href="{{ route('services') }}" class="site-button-2">View Detail</a>
                                </div>
                            </div>
                        </div>

                        <!-- COLUMNS 4 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style3">
                                <div class="service-media">
                                    <img src="images/icons/pic1.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title-large"><span class="service-title-large-number">04</span><a href="{{ route('services') }}">Car Wrapping</a></h3>
                                    <p>We provide extra safety and protection measures to the shipped vehicles with car wrapping services.</p>
                                    <a href="{{ route('services') }}" class="site-button-2">View Detail</a>
                                </div>
                            </div>
                        </div>

                        <!-- COLUMNS 5 -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box-style3">
                                <div class="service-media">
                                    <img src="images/icons/pic2.png" alt="">
                                </div>
                                <div class="service-content">
                                    <h3 class="service-title-large"><span class="service-title-large-number">05</span><a href="{{ route('services') }}">Ocean Freight</a></h3>
                                    <p>We provide Ocean freight services sending your vehicles to the middle east and Southeast Asia.</p>
                                    <a href="{{ route('services') }}" class="site-button-2">View Detail</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
