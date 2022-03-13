<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\EmployerController;
use App\http\controllers\LoginValidation;
use App\http\controllers\FreelanceUpdateController;
use App\http\controllers\AdminController;




Route::get('/',[EmployerController::class,'Home'])->name('Home');

Route::get('/Registration/Handle',[EmployerController::class,'RegistrationHandle'])->name('RegistrationHandle');

Route::get('/Freelance/Registration',[EmployerController::class,'Registration'])->name('Registration');

Route::post('/Registrationubmit',[EmployerController::class,'RegistrationSubmit'])->name('RegistrationSubmit');



Route::get('/dashboard',[EmployerController::class,'Dashboard'])->name('Dashboard')->middleware('ValidFreelanceEmployer');


Route::get('/login',[LoginValidation::class,'login'])->name('login');

Route::post('/login',[LoginValidation::class,'loginsubmit'])->name('loginsubmit');

Route::get('/logout',[LoginValidation::class,'logout'])->name('logout');

Route::get('/EmployerDashboard',[LoginValidation::class,'freelancerDash'])->name('freelancerDash');

Route::get('/AdminDashboard',[LoginValidation::class,'AdminDash'])->name('AdminDash');


Route::get('/Employer/update/{id}/{name}/',[FreelanceUpdateController::class,'update'])->name('update');

Route::post('/Employer/update/',[FreelanceUpdateController::class,'UpdateSubmit'])->name('updatesubmit');

Route::get('/admin/registration/',[AdminController::class,'Registration'])->name('admin.registration');

Route::post('/admin/registration/',[AdminController::class,'RegistrationSubmit'])->name('admin.registrationsubmit');

Route::get('/Admin/update/{id}/{name}/',[AdminController::class,'update'])->name('AdminProfileUpdate');

Route::post('/Admin/update/',[AdminController::class,'UpdateSubmit'])->name('AdminProfileUpdateSubmit');

Route::get('/Admin/User/List',[AdminController::class,'UserList'])->name('UserList');

Route::get('/Admin/User/Edit/{id}/{name}/',[AdminController::class,'UserEdit'])->name('UserEdit');

Route::post('/Admin/Edit/User/',[AdminController::class,'UserEditSubmit'])->name('UserEditSubmit');

Route::get('/Admin/User/Delete/{id}/{name}/',[AdminController::class,'UserDelete'])->name('UserDelete');