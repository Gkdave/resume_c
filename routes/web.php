<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ContactController;
use App\Http\controllers\ServiceController;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('skill',function (){
    return view('skill');
})->name('skill');

Route::get('contact',[ContactController::class,'show'])->name('contact');

Route::get('service',[ServiceController::class,'show'])->name('service');