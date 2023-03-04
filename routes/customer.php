<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Customer\ServiceController;
use \App\Http\Controllers\Customer\SupportController;
use \App\Http\Controllers\Customer\SettingsController;
use \App\Http\Controllers\Home\HomeController;
use \App\Http\Controllers\Customer\AjaxController;


Route::middleware('auth','customer','verified')->prefix('customer')->group(function(){
    Route::get('/',[HomeController::class,'index']);

    Route::get('create-service-request-pre',[ServiceController::class,'preCreate'])
        ->name('app.customer.create_services_request_pre');

    Route::get('create-service-request/{main}',[ServiceController::class,'create'])
        ->name('app.customer.create_services_request');

    Route::post('store-service-request',[ServiceController::class,'store'])
        ->name('app.customer.store_services_request');

    Route::get('past-services',[ServiceController::class,'past_requests'])
        ->name('app.customer.past_services_request');

    Route::get('past-services-details/{id}',[ServiceController::class,'past_requests_details'])
        ->name('app.customer.past_services_request_details');

    Route::get('current-services',[ServiceController::class,'current_requests'])
        ->name('app.customer.current_services_request');

    Route::get('current-services/details/{id}',[ServiceController::class,'current_requests_details'])
        ->name('app.customer.current_services_request_details');

    Route::get('support',[SupportController::class,'index'])
        ->name('app.customer.support');

    Route::post('support-store',[SupportController::class,'store'])
        ->name('app.customer.support.store');

    Route::get('settings',[SettingsController::class,'index'])
        ->name('app.customer.settings');

    Route::post('settings-update',[SettingsController::class,'update'])
        ->name('app.customer.settings.update');

    Route::prefix('ajax')->group(function(){
        Route::post('get-support-response',[AjaxController::class,'get_support_response'])->name('get_support_response');
    });

});
