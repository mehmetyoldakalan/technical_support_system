<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Home\HomeController;




Route::prefix('company')->middleware('auth','company')->group(function(){
    Route::get('/',[HomeController::class,'index']);
});
