<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;

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

//admin view
Route::get('/admin',[AdminController::class,'home']);


//client view
Route::get('/',[ClientController::class,'home']);
Route::get('/rent-a-wifi',[ClientController::class,'rentAwifi']);
Route::get('/solutions',[ClientController::class,'solutions']);
Route::get('/services',[ClientController::class,'services']);
Route::get('/service-detail',[ClientController::class,'service_detail']);
Route::get('/contactez',[ClientController::class,'contactez']);


//service manager image
Route::prefix('admin')->group(function(){
Route::get('/services', [ServiceController::class, 'services']);
Route::get('/delete_service/{id}', [ServiceController::class, 'delete_service']);
Route::post('/service_add_save', [ServiceController::class, 'service_add_save']);
Route::post('/update_service', [ServiceController::class, 'update_service']);
Route::get('/enable_service/{id}', [ServiceController::class, 'enable_service']);
Route::get('/disable_service/{id}', [ServiceController::class, 'disable_service']);


//slider manager image
Route::get('/sliders', [SliderController::class, 'sliders']);
Route::get('/delete_slider/{id}', [SliderController::class, 'delete_slider']);
Route::post('/slider_add_save', [SliderController::class, 'slider_add_save']);
Route::post('/update_slider', [SliderController::class, 'update_slider']);
Route::get('/enable_slider/{id}', [SliderController::class, 'enable_slider']);
Route::get('/disable_slider/{id}', [SliderController::class, 'disable_slider']);



});









