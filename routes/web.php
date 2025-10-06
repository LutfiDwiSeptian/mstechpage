<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


Route::get('/', [GuestController::class, 'index'])->name('guest.index');


#test code
Route::get('/testhomepage',[GuestController::class, 'testcode'])->name('guest.testcode');
Route::get('/mro-landing',[GuestController::class, 'mrolanding'])->name('guest.mro');

#admin
Route::post('/adminloginpanel/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::get('/adminloginpanel/login', [AdminController::class, 'loginpage'])->name('admin.login');
Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
Route::post('/adminlogout', [AdminController::class, 'logout'])->name('admin.logout');

# form submission
Route::post('/lead-form', [FormController::class, 'store'])->name('form.store');

