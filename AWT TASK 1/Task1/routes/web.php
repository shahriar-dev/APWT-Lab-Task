<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\myController;




Route::get('/',[myController::class,'HomePage'])-> name('Homee');

Route::get('/about',[myController::class,'AboutPage'])-> name('About');

Route::get('/teams',[myController::class,'TeamsPage'])-> name('Teams');

Route::get('/contact',[myController::class,'ContactPage'])-> name('Contact');

Route::get('/service',[myController::class,'ServicePage'])-> name('Service');

