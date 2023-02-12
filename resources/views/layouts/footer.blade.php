@include('components.contact-form')

<footer class="footer-light">

    <div class="ftr-bg">
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">

                        <div class="widget widget_about">
                            <div class="logo-footer clearfix">
                                <a href="{{ route('home') }}"><img src="{{ asset('images/Logo Color.png') }}" alt=""></a>
                            </div>
                            <p>Loading Full Service
                               We have a strong system for the clients that covers all their needs.
                               Stay updated regarding cars and containers through the application.</p>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/nejoumexpress" class="fa fa-facebook"></a></li>
                                <li><a href="https://twitter.com/Nejoumexpress" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.instagram.com/nejoum.express/" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget_services ftr-list-center">
                            <h3 class="widget-title">Services</h3>
                            <ul>
                                <li><a href="{{ route('services') }}">Warehousing</a></li>
                                <li><a href="{{ route('services') }}">Car Loading</a></li>
                                <li><a href="{{ route('services') }}">NAJ Booking</a></li>
                                <li><a href="{{ route('services') }}">Car Wrapping</a></li>
                                <li><a href="{{ route('services') }}">Ocean Freight</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-info">

                    <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © 2023 by Nejoum Express All Rights Reserved.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</footer>
