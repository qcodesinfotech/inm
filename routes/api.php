<?php
use Illuminate\Http\Requesapt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;



///////////////////////////-Academic Api-/////////////////////

Route::get('/checkbooksend',[ApiController::class,'checkbooksend']);
Route::get('/nonMuslimData/{id?}',[ApiController::class,'nonMuslimData']);
Route::get('/hitcount/{id?}',[ApiController::class,'hitcount']);
Route::post('/create_islamuser',[ApiController::class,'create_islamuser']);
Route::post('/login',[ApiController::class,'login']);

