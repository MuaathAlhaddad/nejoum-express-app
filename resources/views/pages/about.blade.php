@extends('layouts.app')

@section('title', 'About us')

@section('content')
    <div class="page-content">

        @include('components.hero-section', ['title' => 'About Us', 'breadcrumb' => 'About Us', 'banner' => 'about-page.png'])

        @include('components.about.mission-vision', ['title' => 'Mission', 'content' => 'Upgrading the trading field of exported used cars through keeping up with the newest technology integrating it in our company. In addition, the expansion to other countries through initiating other branches and enhancing our level of service while still maintaining competitiveness in the market.'])

        @include('components.about.mission-vision', ['title' => 'Vision', 'content' => 'Easing the vehicle Shipping and making it accessible around the USA'])

        @include('components.about.what-we-do')

        @include('components.about.achieved')

        @include('components.about.trademarks')

        @include('components.clients')

        @include('components.auction-partners')

        @include('components.about.location')

        @include('components.about.approach')


    </div>
@endsection
