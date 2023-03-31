<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get( '/', function () {
    return view( 'pages.home' );
} )->name( 'home' );

Route::get( '/services', function () {
    return view( 'pages.services' );
} )->name( 'services' );

Route::get( '/services/warehousing', function () {
    return view( 'pages.services.warehousing' );
} )->name( 'services.warehousing' );

Route::get( '/services/car_loading', function () {
    return view( 'pages.services.car_loading' );
} )->name( 'services.car_loading' );

Route::get( '/services/naj_booking', function () {
    return view( 'pages.services.naj_booking' );
} )->name( 'services.naj_booking' );

Route::get( '/services/ocean_freight', function () {
    return view( 'pages.services.ocean_freight' );
} )->name( 'services.ocean_freight' );

Route::get( '/services/custom_clearance', function () {
    return view( 'pages.services.custom_clearance' );
} )->name( 'services.custom_clearance' );

Route::get( '/about', function () {
    return view( 'pages.about' );
} )->name( 'about' );

Route::get( '/contact', function () {
    return view( 'pages.contact' );
} )->name( 'contact' );

