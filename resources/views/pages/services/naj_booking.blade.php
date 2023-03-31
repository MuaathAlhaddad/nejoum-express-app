@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">
        @include('components.hero-section', ['title' => 'NAJ Booking', 'breadcrumb' => 'NAJ Booking', 'banner' => 'services-page.png', 'service_single_page' => true])
    </div>

    <div class="section-full p-t120 p-b120 tw-why-choose-area3 tw-why-choose-area3-top" >
        <div class="container">

            <div class="tw-why-choose3-section">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset("images/s-gallery/10 - Services - 370 x 666 - Car Selling.png")}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        @include('components.section-title', [
               'heading' => 'NAJ Booking',
               'alignment' => 'left'
               ])
                        <div class="tw-why-choose-left">
                            <strong>If you are looking for a vessel to book with a shipping line, our booking benefit services can help. We work with many companies and can provide you with
                                    a diverse range of options for any destination. We also offer the best booking rates and terms to help you get the most out of your shipping experience.
                                    Contact us today to learn more about our shipping line booking benefit services.</strong>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
