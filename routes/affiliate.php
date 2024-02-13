<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Affiliate\AffiliateController;


Route::middleware('auth')->group(function(){
  Route::get('create/affiliate/form/', [AffiliateController::class, 'showAffiliateForm'])
  ->name('create.affiliate.form');
  Route::post('store/affiliate/data', [AffiliateController::class, 'storeAffiliateData'])
    ->name('store.affiliate.data');
  Route::get('affiliate/index', [AffiliateController::class, 'index'])
  ->name('affiliate');


});
