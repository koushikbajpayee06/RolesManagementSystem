<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,"index"]);
//Registration
Route::get('/registration',[AuthController::class,'registration']);
Route::post('/registration_post',[AuthController::class,'registration_post']);
//Login
Route::get('/login',[AuthController::class,'login']);
Route::post('/login_post',[AuthController::class,'login_post']);
//Forgot Password
Route::get('/forgot',[AuthController::class,'forgot']);

Route::group(['middleware'=>'superadmin'],function(){
    
});
Route::group(['middleware'=>'admin'],function(){

});
Route::group(['middleware'=>'user'],function(){

});
