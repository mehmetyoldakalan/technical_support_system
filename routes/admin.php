<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Home\HomeController;


Route::prefix('admin')->middleware('auth','admin')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('app.index');
});
