<?php

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

Route::get('/', 'AllController\HomeController@index');

//Auth::routes();

Route::group(['prefix' => 'laravel-filemanager'], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::get('/login', 'Auth_\LoginController@getLoginForm')->name('getLogin');
Route::post('/login', 'Auth_\LoginController@login')->name('postLogin');
Route::get('/authLogout', 'Auth_\LoginController@loggedOut')->name('getLogout');
Route::get('/authRegister', 'Auth_\RegisterController@getRegistrationForm')->name('getRegister');
Route::post('/authRegister', 'Auth_\RegisterController@register')->name('post.Register');

//----------------------------------------------- FE --------------------------------------------------------//

// ===================== service ===================
Route::get('/step', 'AllController\StepController@index')->name('get10Step');
Route::get('/service', 'AllController\ServiceController@index')->name('getService');
Route::get('/service/{id}', 'AllController\ServiceController@showStepOfService')->name('getServiceById');
// ===================== model hot ===================
Route::get('/modelHot', 'AllController\ModelHotController@index')->name('getModelHot');
//  ===================== booking ===================
Route::get('/book', 'AllController\BookController@index')->name('getBook')->middleware('KhangMiddleware');
Route::post('/book/user', 'AllController\BookController@user');
Route::post('/book/load', 'AllController\BookController@loadFirst');
Route::post('/book/comment', 'AllController\BookController@comment');
//  ===================== cart ===================
Route::get('/cart', 'AllController\CartController@index')->name('get.Cart')->middleware('KhangMiddleware');
Route::get('/cart/{idPro}', 'AllController\CartController@show')->name('add.Cart')->middleware('KhangMiddleware');
Route::delete('/cart/delete/{userId}/{proId}', 'AllController\CartController@deleteCart')->name('cart.deleteCart');
Route::post('/cart/plusorminus', 'AllController\CartController@plusOrMinusCart');
//  ===================== contact ===================
Route::get('/contact', 'AllController\ContactController@index');
Route::post('/contact', 'AllController\ContactController@contactSubmit');
//  ===================== payment ===================
Route::get('/payment', 'AllController\PaymentController@index')->name('post.payment')->middleware('KhangMiddleware');
Route::post('/payment/vnpay', 'AllController\PaymentController@createPaymentVNPay')->name('payment.vnpay');
Route::get('/payment/result', 'AllController\PaymentController@resultPayment')->name('payment.result')->middleware('KhangMiddleware');
Route::get('/vnp/return', 'AllController\PaymentController@vnpayReturn')->name('vnpay.return');
//  ===================== products ===================
Route::get('/products', 'AllController\ProductsController@index')->name('getProducts');
Route::get('/detail-product/{id}', 'AllController\DetailProductsController@getProduct')->name('get.Product');
Route::get('/products-of-categories/{idCate}', 'AllController\ProductsController@getProductsOfCategories')->name('get.ProductsOfCategories');


//----------------------------------------------- admin --------------------------------------------------------//
Route::get('admin/index','AdminController\ServiceController@showMenu')->name('show.service')->middleware('KhangMiddleware');
//  ===================== Service ===================
Route::get('/admin/add-details-service', 'AdminController\ServiceController@indexFormAddDetailService')->name('form.addDetailsService')->middleware('KhangMiddleware');
Route::post('/admin/add-details-service', 'AdminController\ServiceController@postDetailService')->name('post.detailService')->middleware('KhangMiddleware');
Route::get('/admin/service/{id}', 'AdminController\ServiceController@showAllStepOfService')->name('get.ServiceById')->middleware('KhangMiddleware');
Route::get('admin/edit-step/{id}', 'AdminController\ServiceController@showStepOfServiceToEdit')->name('edit.step')->middleware('KhangMiddleware');
Route::post('admin/submit-edit-step', 'AdminController\ServiceController@editDetailService')->name('submit-edit.step')->middleware('KhangMiddleware');
Route::get('admin/delete-step/{id}', 'AdminController\ServiceController@deleteStep')->name('delete.step')->middleware('KhangMiddleware');
//  ===================== Product =================== 
Route::get('/admin/product/{id}', 'AdminController\ProductController@showProductOfCategories')->name('get.allProduct')->middleware('KhangMiddleware');
Route::get('/admin/edit-product/{idPro}', 'AdminController\ProductController@showFormToEdit')->name('get.editProduct')->middleware('KhangMiddleware');
Route::post('/admin/edit-product', 'AdminController\ProductController@postEdit')->name('post.editProduct')->middleware('KhangMiddleware');
Route::get('/admin/add-product', 'AdminController\ProductController@showFormToAdd')->name('get.addProduct')->middleware('KhangMiddleware');
Route::post('/admin/add-product', 'AdminController\ProductController@postAdd')->name('post.addProduct')->middleware('KhangMiddleware');
Route::get('/admin/delete-product/{idPro}', 'AdminController\ProductController@deleteProduct')->name('get.deleteProduct')->middleware('KhangMiddleware');
//  ===================== Order =================== 
Route::get('/admin/order', 'AdminController\OrderController@showOrders')->name('get.orders')->middleware('KhangMiddleware');
//  ===================== Booking =================== 
Route::get('/admin/booking', 'AdminController\BookingController@index')->name('booking.index')->middleware('KhangMiddleware');