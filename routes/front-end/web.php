<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::name('front-end.')->group(function () {
    Volt::route('/', 'pages.front-end.index')
        ->name('index');

    Volt::route('index', 'pages.front-end.index')
        ->name('index');

    Volt::route('about-us', 'pages.front-end.about-us')
        ->name('about-us');

    Volt::route('contact', 'pages.front-end.contact')
        ->name('contact');

    Volt::route('product-details', 'pages.front-end.product-details')
        ->name('product-details');

    Volt::route('shop-grid/{category_id}/{product_id}', 'pages.front-end.shop-grid')
        ->name('shop-grid');

    Volt::route('store', 'pages.front-end.store')
        ->name('store');

    Volt::route('shop', 'pages.front-end.shop')
        ->name('shop');

    Volt::route('search', 'pages.front-end.search')
        ->name('search');

    Volt::route('testimonials', 'pages.front-end.testimonials')
        ->name('testimonials');
});
