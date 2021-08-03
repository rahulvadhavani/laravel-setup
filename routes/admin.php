<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
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

// GET METHOD

Route::get('index',[AdminController::class,'index']);
Route::get('login/{sec_token?}',[AdminController::class,'getLogin']);
Route::get('logout',[AdminController::class,'getLogout']);
Route::get('dashboard',[AdminController::class,'getDashboard']);
Route::get('form-elements',[AdminController::class,'getFormElement']);
Route::get('setting',[AdminController::class,'getSetting']);
Route::get('category',[AdminController::class,'getCategory']);
Route::get('foods',[AdminController::class,'getFoods']);
Route::get('add-food',[AdminController::class,'getAddFood']);
Route::get('food-info/{id?}',[AdminController::class,'getFoodInfo']);
Route::get('edit-food/{id?}',[AdminController::class,'getEditFood']);

// POST METHOD

Route::post('add-category',[AdminController::class,'postAddCategory']);
Route::post('category-filter',[AdminController::class,'postCategoryFilter']);
Route::post('delete-category',[AdminController::class,'postDeleteCategory']);
Route::post('update-category',[AdminController::class,'postUpdateCategory']);
Route::post('login',[AdminController::class,'postLogin']);
Route::post('set-setting',[AdminController::class,'postSetSetting']);
Route::post('add-food',[AdminController::class,'postAddFood']);
Route::post('foods-filter',[AdminController::class,'postFoodFilter']);
Route::post('delete-food',[AdminController::class,'postDeleteFood']);
	
