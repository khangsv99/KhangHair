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

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'Auth_\LoginController@getLoginForm')->name('getLogin');
Route::post('/login', 'Auth_\LoginController@login')->name('postLogin');
Route::get('/authLogout', 'Auth_\LoginController@log')->name('getLogout');
Route::post('/authLogout', 'Auth_\LoginController@loggedOut')->name('postLogout');

Route::get('/authRegister', 'Auth_\RegisterController@getRegistrationForm')->name('getRegister');
Route::post('/authRegister', 'Auth_\RegisterController@register')->name('postRegister');

//-------------------------public---------------------------
//Route::get('/step', 'AllController\StepController@index')->name('get10Step');
Route::get('/book', 'AllController\BookController@index')->name('getBook');
Route::get('/cart', 'AllController\CartController@index')->name('getCart');

Route::get('/contact', 'AllController\ContactController@index');
Route::post('/contact', 'AllController\ContactController@contactSubmit')->name('contact.submit');

//Route::get('/detailProducts', 'AllController\DetailProductsController@index')->name('getDetailProducts');
Route::get('/modelHot', 'AllController\ModelHotController@index')->name('getModelHot');
Route::get('/products', 'AllController\ProductsController@index')->name('getProducts');
Route::get('/detail-product/{id}', 'AllController\DetailProductsController@getProduct')->name('get.Product');
Route::get('/products-of-categories/{idCate}', 'AllController\ProductsController@getProductsOfCategories')->name('get.ProductsOfCategories');
Route::get('/service', 'AllController\ServiceController@index')->name('getService');
Route::get('/service/{id}', 'AllController\ServiceController@showStepOfService')->name('getServiceById');
//-------------------------admin------------------------------
Route::get('/admin/add-details-service', 'AdminController\ServiceController@indexFormAddDetailService')->name('form.addDetailsService');
Route::get('admin/index','AdminController\ServiceController@showAllServie')->name('show.service');
Route::get('/admin/service/{id}', 'AdminController\ServiceController@showAllStepOfService')->name('get.ServiceById');
Route::post('/admin/add-details-service', 'AdminController\ServiceController@postDetailService')->name('post.detailService');
Route::get('admin/edit-step/{id}', 'AdminController\ServiceController@showStepOfServiceToEdit')->name('edit.step');
Route::get('admin/delete-step/{id}', 'AdminController\ServiceController@deleteStep')->name('delete.step');