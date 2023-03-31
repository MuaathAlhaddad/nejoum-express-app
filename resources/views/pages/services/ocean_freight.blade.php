@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">
        @include('components.hero-section', ['title' => 'Ocean Freight', 'breadcrumb' => 'Ocean Freight', 'banner' => 'services-page.png', 'service_single_page' => true])
    </div>

    <div class="section-full p-t120 p-b120 tw-why-choose-area3 tw-why-choose-area3-top" >
        <div class="container">

            <div class="tw-why-choose3-section">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset("images/s-gallery/10 - Services - 370 x 666 - Car Shipping.png")}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        @include('components.section-title', [
               'heading' => 'Ocean Freight',
               'alignment' => 'left'
               ])
                        <div class="tw-why-choose-left">
                            <strong>We offer ocean freight services that are perfect for transporting containerized cargo loaded onto vessels. We have a wide range of vessels available,
                                    from small ships to large cargo carriers, so we can accommodate any size load. We also have a team of experienced maritimeprofessionals who can help with
                                    the loading and unloading of your cargo, as well as provide guidance on the best route to take for your shipping needs.</strong>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
