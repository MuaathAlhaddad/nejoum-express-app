@extends('layouts.app')

@section('title', 'About us')

@section('content')
    <div class="page-content">

        @include('components.hero-section', ['title' => 'About Us', 'breadcrumb' => 'About Us', 'banner' => 'about-page.png'])

        @include('components.about.mission-vision', ['title' => 'Vision', 'content' => 'With Nejoum Express our dedication to quality, safety, and reliability, we aim to revolutionize the container loading and vehicle logistics industry by providing our customers with an upscale class of service and driving growth and prosperity for our employees and stakeholders.'])

        @include('components.about.mission-vision', ['title' => 'Mission', 'content' => 'Through our commitment to excellence in customer service, safety, and sustainability, we aim to build lasting relationships with our clients, maintaining trust and becoming their main provider for all their container loading and vehicles’ logistics needs.'])

        @include('components.about.what-we-do')

        @include('components.about.achieved')

        @include('components.about.trademarks')

        @include('components.clients')

        @include('components.auction-partners')

        @include('components.about.location')

        @include('components.about.approach')


    </div>
@endsection
