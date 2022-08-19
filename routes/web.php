<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



 Route::get('/',function(){

     return view('admin.layouts.admin');
 });


 Route::get('/admin_form',function(){
 
     return view('admin.form');

 });

 Route::get('/admin_view',function(){

 
          return view('/admin.view'); 
       

 });

 Route::post('/InsertData',[AdminController::class,'InsertData']);


 Route::get('/admin_view',[AdminController::class, 'viewData']);

 Route::get('/deletedata/{id}',[AdminController::class, 'DeleteData']);

 Route::get('/updatedata/{id}',[AdminController::class,'UpdateData']);

 Route::post('/editData', [AdminController::class, 'EditData']);