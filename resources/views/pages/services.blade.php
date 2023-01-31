@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="page-content">

        @include('components.hero-section', ['title' => 'Our Services', 'breadcrumb' => 'Our Services', 'banner' => 'services-page.png'])

        @include('components.services.services')

        @include('components.services.services-features')

        @include('components.home.clients')

    </div>
@endsection
