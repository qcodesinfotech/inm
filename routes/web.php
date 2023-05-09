<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::get('/',[ClientController::class,'userpage'])->name('/');
Route::get('/index',[ClientController::class,'userpage'])->name('/index');
Route::get('/inspire',[ClientController::class,'inspire']);
Route::get('/muslimhome',[ClientController::class,'muslimhome']);
Route::get('/nonmuslim',[ClientController::class,'nonmuslim']);
Route::get('/aboutus',[ClientController::class,'aboutus']);
Route::get('/posts',[ClientController::class,'posts']);
Route::get('/contact',[ClientController::class,'contact']);
Route::get('/book',[ClientController::class,'book']);
Route::get('/video',[ClientController::class,'video']);
Route::get('/getapidata',[ClientController::class,'getapidata']);
Route::post('/addMuslim',[ClientController::class,'addMuslim']);


Route::get('admin',[AdminController::class,'userlogin'])->name('admin');
Route::get('admin/logout',[UserController::class,'userlogin'])->name('admin');
Route::get('admin/userlogin',[UserController::class,'login']);
Route::post('admin/userlogin',[UserController::class,'login']);

Route::group(['middleware' => ['AuthCheck']], function () {
Route::get('/admin/videolist',[FileController::class,'videolist']);

Route::get('/admin/banner',[FileController::class,'bannerlist']);
Route::post('/admin/addbanner',[FileController::class,'addbanner']);
Route::post('/admin/bannerupdate',[FileController::class,'bannerupdate'])->name('bannerupdate');
Route::post('/admin/bannerdelete/{id?}',[FileController::class,'bannerdelete'])->name('bannerdelete');


Route::get('/admin/mobilebanner',[FileController::class,'mobilebannerlist']);
Route::post('/admin/mobileaddbanner',[FileController::class,'moileaddbanner']);
Route::post('/admin/mobilebannerupdate',[FileController::class,'mobilebannerupdate'])->name('mobilebannerupdate');
Route::post('/admin/mobilebannerdelete/{id?}',[FileController::class,'mobilebannerdelete'])->name('mobilebannerdelete');

Route::get('admin/register_user',[AdminController::class,'register_user']);
Route::get('admin/userlist',[AdminController::class,'userlist']);
Route::get('/admin/delete_user/{id?}',[AdminController::class,'delete_user']);
Route::get('/admin/sendmail',[AdminController::class,'sendmail']);
Route::post('/admin/videoupload',[FileController::class,'videoupload']);
Route::post('/admin/videoupdate',[FileController::class,'videoupdate'])->name('videoupdate');
Route::post('/admin/videodelete/{id?}',[FileController::class,'videodelete'])->name('videodelete');
Route::get('/admin/booklist',[FileController::class,'booklist'])->name('booklist');
Route::post('/admin/bookupload',[FileController::class,'bookupload']);
Route::post('/admin/bookupdate',[FileController::class,'bookupdate'])->name('bookupdate');
Route::post('/admin/bookdelete/{id?}',[FileController::class,'bookdelete'])->name('bookdelete');

});
