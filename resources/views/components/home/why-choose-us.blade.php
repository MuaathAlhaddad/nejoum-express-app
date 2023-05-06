<div class="section-full p-t120 p-b90 site-bg-white tw-why-choose-area2" style="background-image:url( {{asset(" images/background/home_big_picture_1920_1355.png")}} );">
    <div class="tw-why-choose-area-top2">
        <div class="container">

            <div class="tw-why-choose-section2">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset("images/Home_400x720.png")}}" alt="" >
                                </div>
                            </div>
                            <div class="tw-why-choose-tag slide-top shine-effect">
                                <div class="tag-box">
                                    <h2>25,000+</h2>
                                    <h3>Containers loaded annually</h3>
                                    <span>Since 2002</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-left">

                            @include('components.section-title', [
                                                    'heading' => 'Why Choose Us?',
                                                    'sub_heading' => 'We are the professionals in Vehicles\' Logistics and Transportation',
                                                    'text' => false,
                                                    'alignment' => 'left'
                                                    ])

                            <ul class="description-list">
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Comprehensive Services:</strong>
                                    Receive full logistics services from towing, to warehousing, loading and shipping to countries worldwide.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Speed:</strong>
                                    Providing vehicle transportation at the highest possible pace from all the auctions straight to our warehouses.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Precision:</strong>
                                    High precision in documenting the status of the cars once they were towed from the auction.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Highly-experienced:</strong>
                                    Our team enjoys a cumulative experience of more than 20 years in the field of container loading and car transportation.
                                </li>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Wide Coverage:</strong>
                                    We cover the United States and Canada with our warehouses all in Georgia, Texas, New Jersey, Washington, California and Canada..
                                </li>
                            </ul>
                            <div class="tw-why-choose-left-bottom">
                                <a href="{{ route('about') }}" class="btn-half site-button"><span>Learn More</span><em></em></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
