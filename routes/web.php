<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
Route::get('/login',function(){
 
      return view('admin.login');  
});


Route::post('/checklogin',[AdminController::class],'CheckLogin');


 Route::get('/',function(){

     return view('admin.layouts.admin');
 });

 Route::get('/admin_form',function(){
 
     return view('admin.form');

 });

 Route::get('/admin_view',function(){

 
    return view('/admin.view'); 
       
 });

 Route::get('/category_add', function(){
           
       return view('/admin.category');

 });
 Route::get('/category_view', function(){
 
      return view('/admin.category_view');

 });

 Route::get('/project_manage', function(){
     
       return view('/admin.project');
     
 });

 Route::get("/project_view",function(){

     
       return view('admin.project_view');

 });

 Route::post('/InsertData',[AdminController::class,'InsertData']);

 Route::get('/admin_view',[AdminController::class, 'viewData']);

 Route::get('/deletedata/{id}',[AdminController::class, 'DeleteData']);

 Route::get('/updatedata/{id}',[AdminController::class,'UpdateData']);

 Route::post('/editData', [AdminController::class, 'EditData']);

 Route::post('/categoryData',[CategoryController::class, 'CategoryData']);
 
 Route::get('/category_view',[CategoryController::class,'CategoryView']);

 Route::get('/categoryDeleteData/{id}',[CategoryController::class, 'CategoryDeleteData']);

 Route::get('/categoryUpdatedata/{id}', [CategoryController::class, 'CategoryUpdateData']);

 Route::post('/EditCategory',[CategoryController::class,'EditCategory']);

 Route::get('/project_manage',[ProductController::class,'ProductData']);

 Route::post('/insertProjectData',[ProductController::class,'InsertProjectData']);

 Route::get('/productdeletedata/{id}', [ProductController::class, 'productdeletedata']);

 Route::get('/productupdatedata/{id}',[ProductController::class, 'productupdatedata']);

Route::post('/editProjectData', [ProductController::class, 'EditProjectData']);
