<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::get('listing',[ListingController::class, 'index'] )
    ->name('listing');

Route::post('/listing', [ListingController::class, 'store'])
    ->name('listing.store');

Route::get('find', [ListingController::class, 'find'])
    ->name('find');


Route::get('/search', [ListingController::class, 'search'])
    ->name('search');
