@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">
        @include('components.hero-section', ['title' => 'Custom Clearance', 'breadcrumb' => 'Custom Clearance', 'banner' => 'services-page.png', 'service_single_page' => true])
    </div>

    <div class="section-full p-t120 p-b120 tw-why-choose-area3 tw-why-choose-area3-top">
        <div class="container">

            <div class="tw-why-choose3-section">

                <div class="row">


                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset("images/s-gallery/10 - Services - 370 x 666 - Clearance.png")}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        @include('components.section-title', [
               'heading' => 'Custom Clearance',
               'alignment' => 'left'
               ])
                        <div class="tw-why-choose-left">
                            <strong>We offer customer clearance services for vehicles titles and customs. We help the customer with all the paperwork and make sure everything is in order. We make it
                                    easy for the customer to get their vehicle cleared and help them avoid any delays or problems.</strong>
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
