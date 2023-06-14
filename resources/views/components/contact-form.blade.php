<div class="section-full p-t120 p-b90 site-bg-gray tw-service-gallery-style3-area">

    <div class="services-gallery-block-outer3">
        <div class="container">

            @include('components.section-title', [
                        'heading' => 'Contact us',
                        'sub_heading' => false,
                        'text' => false,
                        'alignment' => 'center'
                        ])

            <div class="section-content">
                <div class="services-gallery-style3">
                    <div class="row">
                        <div class="section-full  p-t50">
                            <div class="section-content">
                                <div class="container">

                                    <div class="contact-one">

                                        <div class="contact-one-inner  site-bg-sky-blue-light">
                                            <div class="row">

                                                <div class="col-lg-8 col-md-12">
                                                    <div class="contact-form-outer">
                                                        <form class="cons-contact-form" method="post">

                                                            <div class="row">

                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group mb-3">
                                                                        <input name="name" type="text" required class="form-control" placeholder="Name">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group mb-3">
                                                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group mb-3">
                                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group mb-3">
                                                                        <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">
                                                                    <div class="form-group mb-3">
                                                                        <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <button type="submit" class="btn-half site-button"><span>Submit Now</span><em></em></button>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-12">
                                                    <div class="contact-info  site-bg-dark bg-no-repeat bg-bottom-left" style="background-image: url({{ asset("images/background/contact-bg.png")}});">
                                                        <!-- TITLE START-->
                                                        <div class="section-head-small white mb-4">
                                                            <h3 class="wt-title">Let’s Get in Touch!</h3>
                                                        </div>
                                                        <!-- TITLE END-->

                                                        <div class="contact-info-section">

                                                            <div class="c-info-column">
                                                                <div class="c-info-icon fa fa-map-marker"><span></span></div>
                                                                <p>Nejoum Express, 6012 Murphy St, Houston Texas 77033, 2819027600</p>
                                                            </div>

                                                            <div class="c-info-column">
                                                                <div class="c-info-icon fa fa-mobile-phone custome-size"><span></span></div>

                                                                <p><a href="tel:+17344963761">+1-734-496-3761</a></p>
                                                            </div>

                                                            <div class="c-info-column">
                                                                <div class="c-info-icon fa fa-envelope-o"><span></span></div>
                                                                <p>cs@nejoumexpress.com</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- END --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
