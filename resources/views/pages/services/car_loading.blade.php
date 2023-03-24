@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">
        @include('components.hero-section', ['title' => 'Car Loading', 'breadcrumb' => 'Car Loading', 'banner' => 'services-page.png', 'service_single_page' => true])
    </div>

    <div class="section-full p-t120 p-b120 tw-why-choose-area3 tw-why-choose-area3-top" >
        <div class="container">

            <div class="tw-why-choose3-section">

                <div class="row">


                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="tw-why-choose-right">
                            <div class="tw-why-choose-media1 shine-effect">
                                <div class="shine-box">
                                    <img src="{{ asset("images/s-gallery/10 - Services - 370 x 666 - Car Loading.png")}}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12">
                        @include('components.section-title', [
               'heading' => 'Car Loading',
               'alignment' => 'left'
               ])
                        <div class="tw-why-choose-left">
                            <strong>Are you looking for a great team to load your second hand vehicles into a container? Look no further than our loading service. We are professionally
                                    trained and experienced in loading cars safely and efficiently. Plus, we have a great track record – no damaged goods or missed deadlines!</strong>
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
