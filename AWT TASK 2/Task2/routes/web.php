<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\Reg_Controller;
use App\http\controllers\LoginController;



Route::get('/',[Reg_Controller::class,'home'])->name('home');

Route::get('/student/create',[Reg_Controller::class,'create'])->name('student.create');

Route::post('/student/create',[Reg_Controller::class,'createSubmit'])->name('student.create');
Route::get('/student/list',[Reg_Controller::class,'list'])->name('student.list');

Route::get('/student/login',[LoginController::class,'login'])->name('student.login');

Route::post('/student/login',[LoginController::class,'LoginCheck'])->name('student.login');
Route::get('/student/contact',[LoginController::class,'Contact'])->name('student.contact');