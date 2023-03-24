@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">
        @include('components.hero-section', ['title' => 'Warehousing', 'breadcrumb' => 'Warehousing', 'banner' => 'services-page.png', 'service_single_page' => true])
    </div>

    <div class="section-full p-t120 p-b120 tw-why-choose-area3 tw-why-choose-area3-top" >
        <div class="container">

            <div class="tw-why-choose3-section">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset("images/s-gallery/10 - Services - 370 x 666 - Storage.png")}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        @include('components.section-title', [
               'heading' => 'Warehousing',
               'alignment' => 'left'
               ])
                        <div class="tw-why-choose-left">
                            <strong>Second hand vehicles, cars, and warehouse services are an exciting business. This is because there is a great demand for these products and services. There are many people who are looking
                                    for ways to save money on their car purchases. They may not have the money to buy a new car outright, so they look for good deals on used cars. Our warehousing services provide a valuable
                                    service to our customers. We allow them to purchase their vehicles without having to worry about where they will store them. This is a great convenience for customers, and it helps to keep
                                    the prices of used cars down.</strong>
                            <div class="tw-why-choose-left-bottom">
                                <div class="sign-font">
                                    <span>Signature</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
