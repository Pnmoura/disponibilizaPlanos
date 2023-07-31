<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('plans')->group(function () {
   Route::name('plans.create')->post('/', 'PlansController@create');
   Route::name('plans.filter')->get('/', 'PlansController@filter');
});

Route::prefix('address')->group(function () {
    Route::name('address.create')->post('/', 'AddressController@create');
});

Route::prefix('availability')->group(function () {
    Route::name('availability.create')->post('/', 'AvailabilityPlansController@create');
    Route::name('availability.show')->get('/', 'AvailabilityPlansController@show');
});
