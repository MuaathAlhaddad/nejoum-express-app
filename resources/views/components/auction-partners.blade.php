<div class="section-full p-t90 p-b90 site-bg-white tw-client-logo2-area min-vh-70">
    <div class="container home-client2-outer">

        @include('components.section-title', [
                        'heading' => 'Our Auction Partners',
                        'sub_heading' => false,
                        'text' => false,
                        'alignment' => 'center'
                        ])

        <div class="section-content">

            <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href="{{ route('about') }}"><img src="images/auctions-partners-logo/adesa.png" alt=""></a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href="{{ route('about') }}"><img src="images/auctions-partners-logo/copart.png" alt=""></a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href="{{ route('about') }}"><img src="images/auctions-partners-logo/iaai.png" alt=""></a></div>
                    </div>
                </div>

                <div class="item">
                    <div class="ow-client-logo">
                        <div class="client-logo client-logo-media">
                            <a href="{{ route('about') }}"><img src="images/auctions-partners-logo/manheim.jpg" alt=""></a></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
