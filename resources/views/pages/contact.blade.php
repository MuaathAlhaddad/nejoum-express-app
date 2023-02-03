@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
    <div class="page-content">

        @include('components.hero-section', ['title' => 'Contact us', 'breadcrumb' => 'Contact us', 'banner' => 'contact-page.png'])

    </div>
@endsection
