<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TariffController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MifiController;
use App\Http\Controllers\AttributedMifiController;
use App\Http\Controllers\ResetPasswordController;

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
Route::get('/admin',[AuthController::class,'home']);



//client view
Route::get('/',[ClientController::class,'home']);
Route::post('/', [AuthController::class,'login']);
Route::get('/rent-a-wifi/{id?}',[ClientController::class,'rentAwifi']);
Route::get('/solutions',[ClientController::class,'solutions']);
Route::get('/services',[ClientController::class,'services']);
Route::get('/service-detail/{id}',[ClientController::class,'service_detail']);
Route::get('/contactez',[ClientController::class,'contactez']);
Route::post('/order_add_save',[ClientController::class,'order_add_save']);
Route::post('/search',[ClientController::class,'search_service']);

Route::get('/mifi-conference',[ClientController::class,'mifi_conference']);
Route::get('/internet-entreprise',[ClientController::class,'internet_entreprise']);
Route::get('/internet-domicile',[ClientController::class,'internet_domicile']);
Route::get('/solution-pro',[ClientController::class,'solution_pro']);




//mail send to Admin
Route::post('/contactez',[MailController::class,'send_mail']);



Route::prefix('admin')->group(function(){

//service manager image   
Route::get('/services', [ServiceController::class, 'services']);
Route::get('/delete_service/{id}', [ServiceController::class, 'delete_service']);
Route::post('/service_add_save', [ServiceController::class, 'service_add_save']);
Route::post('/update_service', [ServiceController::class, 'update_service']);
Route::get('/enable_service/{id}', [ServiceController::class, 'enable_service']);
Route::get('/disable_service/{id}', [ServiceController::class, 'disable_service']);

//mifi manager image   
Route::get('/mifis', [MifiController::class, 'mifis']);
Route::get('/delete_mifi/{id}', [MifiController::class, 'delete_mifi']);
Route::post('/mifi_add_save', [MifiController::class, 'mifi_add_save']);
Route::post('/mifi_update_save', [MifiController::class, 'mifi_update_save_action']);
Route::get('/enable_mifi/{id}', [MifiController::class, 'enable_mifi']);
Route::get('/disable_mifi/{id}', [MifiController::class, 'disable_mifi']);


//slider manager image
Route::get('/sliders', [SliderController::class, 'sliders']);
Route::get('/delete_slider/{id}', [SliderController::class, 'delete_slider']);
Route::post('/slider_add_save', [SliderController::class, 'slider_add_save']);
Route::post('/update_slider', [SliderController::class, 'update_slider']);
Route::get('/enable_slider/{id}', [SliderController::class, 'enable_slider']);
Route::get('/disable_slider/{id}', [SliderController::class, 'disable_slider']);



//manager tariff 
Route::get('/tariffs', [TariffController::class, 'tariffs']);
Route::get('/delete_tariff/{id}', [TariffController::class, 'delete_tariff']);
Route::post('/tariff_add_save', [TariffController::class, 'tariff_add_save']);
Route::post('/update_tariff', [TariffController::class, 'update_tariff']);
Route::get('/enable_tariff/{id}', [TariffController::class, 'enable_tariff']);
Route::get('/disable_tariff/{id}', [TariffController::class, 'disable_tariff']);


//manager order by admin
Route::get('/orders', [OrderController::class, 'orders']);
Route::get('/delete_order/{id}', [OrderController::class, 'delete_order']);



//manager  admin
Route::get('/delete_admin/{id}', [AuthController::class,'delete_admin']);
Route::get('/enable_admin/{id}', [AuthController::class,'enable_admin']);
Route::get('/disable_admin/{id}', [AuthController::class,'disable_admin']);
Route::post('/signin_account',   [AuthController::class,'signin_account']);
Route::post('/update_admin',   [AuthController::class,'update_admin']);
Route::post('/add_admin',   [AuthController::class,'add_admin']);

//manage attributed
Route::post('/attributed_add_save', [AttributedMifiController::class,'attributed_mifi_to_user']);
Route::post('/attributed_add_save2', [AttributedMifiController::class,'attributed_user_to_mifi']);
Route::get('/reset_attributed_user_to_mifi/{id}', [AttributedMifiController::class,'reset_attributed_user_to_mifi']);
Route::get('/reset_attributed_mifi_to_user/{id}', [AttributedMifiController::class,'reset_attributed_mifi_to_user']);


//maanger reset password
Route::get('/forget-password', [ResetPasswordController::class, 'showForgetPasswordForm']);
Route::post('/forget-password', [ResetPasswordController::class, 'submitForgetPasswordForm']); 
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetPasswordForm']);
Route::post('/reset-password', [ResetPasswordController::class, 'submitResetPasswordForm']);




});








