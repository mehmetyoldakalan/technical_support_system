<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Web\WebController;

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

Route::prefix('/')->group(function(){
    Route::get('/',[WebController::class,'index'])->name('web.index');
    Route::get('about',[WebController::class,'about'])->name('web.about');
    Route::get('faq',[WebController::class,'faq'])->name('web.faq');
    Route::get('contact',[WebController::class,'contact'])->name('web.contact');
});
require __DIR__.'/auth.php';
