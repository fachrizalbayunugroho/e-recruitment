<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormController2;


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

Route::get('/',[MainController::class,'index']);
Route::get('/pengumuman',[MainController::class,'pengumuman']);
Route::get('/internship',[MainController::class,'intern']);
Route::get('/freshgrad',[MainController::class,'fg']);
Route::get('/professional',[MainController::class,'prof']);
Route::get('/dashboard',[MainController::class,'dashboard']);
Route::get('/dashboard2',[MainController::class,'dashboard2']);
Route::get('/dashboard3',[MainController::class,'dashboard3']);
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [MainController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('login2', [MainController::class, 'login2'])->name('login');
Route::post('login2', [RegisterController::class, 'login2_action'])->name('login2.action');
Route::get('login3', [MainController::class, 'login3'])->name('login');
Route::post('login3', [RegisterController::class, 'login3_action'])->name('login3.action');
Route::get('edit', [MainController::class, 'edit'])->name('edit');
Route::post('edit', [UserController::class, 'edit_action'])->name('edit.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('logout2', [RegisterController::class, 'logout2'])->name('logout2');
Route::get('logout3', [RegisterController::class, 'logout3'])->name('logout3');
Route::get('cv-upload', [MainController::class, 'cvupload']);
Route::post('upload-cv', [FileUpload::class, 'fileUpload'])->name('fileUpload');
Route::get('photo-upload', [MainController::class, 'imgupload']);
Route::post('upload-photo', [FileUpload::class, 'imageUpload'])->name('imageUpload');
Route::get('ven1', [MainController::class, 'ven1']);
Route::post('upload-ven1', [FileUpload::class, 'vendorUpload1'])->name('vendorUpload1');
Route::get('ven2', [MainController::class, 'ven2']);
Route::post('upload-ven2', [FileUpload::class, 'vendorUpload2'])->name('vendorUpload2');
Route::get('ven3', [MainController::class, 'ven3']);
Route::post('upload-ven3', [FileUpload::class, 'vendorUpload3'])->name('vendorUpload3');
Route::get('ven4', [MainController::class, 'ven4']);
Route::post('upload-ven4', [FileUpload::class, 'vendorUpload4'])->name('vendorUpload4');
Route::get('form1', [FormController::class, 'form1']);
Route::post('submit1', [FormController::class, 'add1'])->name('add1');
Route::get('form2', [FormController::class, 'form2']);
Route::post('submit2', [FormController::class, 'add2'])->name('add2');
Route::get('form2_2', [FormController2::class, 'form2_2']);
Route::post('submit2_2', [FormController2::class, 'add2_2'])->name('add2_2');
Route::get('form3', [FormController::class, 'form3']);
Route::post('submit3', [FormController::class, 'add3'])->name('add3');
Route::get('form3_2', [FormController2::class, 'form3_2']);
Route::post('submit3_2', [FormController2::class, 'add3_2'])->name('add3_2');
Route::get('form4', [FormController::class, 'form4']);
Route::post('submit4', [FormController::class, 'add4'])->name('add4');
Route::get('form4_2', [FormController2::class, 'form4_2']);
Route::post('submit4_2', [FormController2::class, 'add4_2'])->name('add4_2');
Route::get('form5', [FormController::class, 'form5']);
Route::post('submit5', [FormController::class, 'add5'])->name('add5');
Route::get('form6', [FormController::class, 'form6']);
Route::post('submit6', [FormController::class, 'add6'])->name('add6');
Route::get('form6_2', [FormController2::class, 'form6_2']);
Route::post('submit6_2', [FormController2::class, 'add6_2'])->name('add6_2');
Route::get('form7', [FormController::class, 'form7']);
Route::post('submit7', [FormController::class, 'add7'])->name('add7');
Route::get('form7_2', [FormController2::class, 'form7_2']);
Route::post('submit7_2', [FormController2::class, 'add7_2'])->name('add7_2');
Route::get('form8', [FormController::class, 'form8']);
Route::post('submit8', [FormController::class, 'add8'])->name('add8');
Route::get('form9', [FormController::class, 'form9']);
Route::post('submit9', [FormController::class, 'add9'])->name('add9');
Route::get('form10', [FormController::class, 'form10']);
Route::post('submit10', [FormController::class, 'add10'])->name('add10');