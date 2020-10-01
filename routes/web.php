<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/page/{URI}', 'PageController@show');
Route::get('/page/{URI}/edit', 'PageController@edit');
Route::get('/p', 'PageController@index');
Route::get('/createPage', 'PageController@create');
Route::post('/storePage', 'PageController@store');
Route::patch('/page/{URI}', 'PageController@update');
Route::delete('/page/{URI}', 'PageController@destroy');
Route::get('/createProduct', 'ProductController@create');
Route::post('/storeProduct', 'ProductController@store');
Route::get('/pr', 'ProductController@index');
Route::get('/product/{name}/edit', 'ProductController@edit');
Route::patch('/product/{name}', 'ProductController@update');
Route::delete('/product/{name}', 'ProductController@destroy');
Route::get('/n', 'NavController@index');
Route::get('/createNav', 'NavController@create');
Route::post('/storeNav', 'NavController@store');
Route::patch('/nav/{navName}', 'NavController@update');
Route::delete('/nav/{navName}', 'NavController@destroy');
Route::get('/nav/{navName}/edit', 'NavController@edit');
Route::get('/sn', 'SideNavController@index');
Route::get('/createSideNav', 'SideNavController@create');
Route::post('/storeSideNav', 'SideNavController@store');
Route::patch('/sideNav/{sideNavName}', 'SideNavController@update');
Route::delete('/sideNav/{sideNavName}', 'SideNavController@destroy');
Route::get('/sideNav/{sideNavName}/edit', 'SideNavController@edit');
Route::get('/c', 'ContactDetailsController@index');
Route::get('/createContact', 'ContactDetailsController@create');
Route::post('/storeContact', 'ContactDetailsController@store');
Route::patch('/contact/{contactName}', 'ContactDetailsController@update');
Route::delete('/contact/{contactName}', 'ContactDetailsController@destroy');
Route::get('/contact/{contactName}/edit', 'ContactDetailsController@edit');
Route::get('/s', 'ServicesController@index');
Route::get('/createService', 'ServicesController@create');
Route::post('/storeService', 'ServicesController@store');
Route::patch('/service/{serviceName}', 'ServicesController@update');
Route::delete('/service/{serviceName}', 'ServicesController@destroy');
Route::get('/service/{serviceName}/edit', 'ServicesController@edit');
Route::get('/ne', 'NewsController@index');
Route::get('/createNews', 'NewsController@create');
Route::post('/storeNews', 'NewsController@store');
Route::patch('/news/{newsName}', 'NewsController@update');
Route::delete('/news/{newsName}', 'NewsController@destroy');
Route::get('/news/{newsName}/edit', 'NewsController@edit');
Route::get('/f', 'FooterController@index');
Route::get('/createFooter', 'FooterController@create');
Route::post('/storeFooter', 'FooterController@store');
Route::patch('/footer/{footerName}', 'FooterController@update');
Route::delete('/footer/{footerName}', 'FooterController@destroy');
Route::get('/footer/{footerName}/edit', 'FooterController@edit');
Route::get('/createCarousel', 'CarouselController@create');
Route::post('/storeCarousel', 'CarouselController@store');
Route::get('/ca', 'CarouselController@index');
Route::get('/carousel/{carouselName}/edit', 'CarouselController@edit');
Route::patch('/carousel/{carouselName}', 'CarouselController@update');
Route::delete('/carousel/{carouselName}', 'CarouselController@destroy');
Route::get('/a', 'UsersController@index');
Route::get('/createAdmin', 'UsersController@create');
Route::post('/storeAdmin', 'UsersController@store');
Route::patch('/admin/{name}', 'UsersController@update');
Route::delete('/admin/{name}', 'UsersController@destroy');
Route::get('/admin/{name}/edit', 'UsersController@edit');
Route::post('/authenticate', 'UsersController@checklogin');
Route::get('/loginAdmin', 'UsersController@login');
Route::post('/sendemail/send', 'SendEmailController@send');
Route::get('/createRadio', 'RadioShowController@create');
Route::post('/storeRadio', 'RadioShowController@store');
Route::get('/r', 'RadioShowController@index');
Route::get('/radio/{fileName}/edit', 'RadioShowController@edit');
Route::patch('/radio/{fileName}', 'RadioShowController@update');
Route::delete('/radio/{fileName}', 'RadioShowController@destroy');
Route::redirect('/', '/page/home');
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
Route::get('/cart/destroy{itemId}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::resource('orders', 'OrderController');
Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');
Route::get('/o', 'OrderController@index');
Route::get('/asn', 'AdminSideNavController@index');
Route::get('/createAdminSideNav', 'AdminSideNavController@create');
Route::post('/storeAdminSideNav', 'AdminSideNavController@store');
Route::patch('/adminSideNav/{adminSideNavName}', 'AdminSideNavController@update');
Route::delete('/adminSideNav/{adminSideNavName}', 'AdminSideNavController@destroy');
Route::get('/adminSideNav/{adminSideNavName}/edit', 'AdminSideNavController@edit');
Route::view('/dashboard', 'dashboard');
