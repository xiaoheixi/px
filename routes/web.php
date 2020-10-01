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
Route::get('/page/{URI}/edit', 'PageController@edit')->middleware('auth');
Route::get('/p', 'PageController@index')->middleware('auth');
Route::get('/createPage', 'PageController@create')->middleware('auth');
Route::post('/storePage', 'PageController@store')->middleware('auth');
Route::patch('/page/{URI}', 'PageController@update')->middleware('auth');
Route::delete('/page/{URI}', 'PageController@destroy')->middleware('auth');
Route::get('/createProduct', 'ProductController@create')->middleware('auth');
Route::post('/storeProduct', 'ProductController@store')->middleware('auth');
Route::get('/pr', 'ProductController@index')->middleware('auth');
Route::get('/product/{name}/edit', 'ProductController@edit')->middleware('auth');
Route::patch('/product/{name}', 'ProductController@update')->middleware('auth');
Route::delete('/product/{name}', 'ProductController@destroy')->middleware('auth');
Route::get('/n', 'NavController@index')->middleware('auth');
Route::get('/createNav', 'NavController@create')->middleware('auth');
Route::post('/storeNav', 'NavController@store')->middleware('auth');
Route::patch('/nav/{navName}', 'NavController@update')->middleware('auth');
Route::delete('/nav/{navName}', 'NavController@destroy')->middleware('auth');
Route::get('/nav/{navName}/edit', 'NavController@edit')->middleware('auth');
Route::get('/sn', 'SideNavController@index')->middleware('auth');
Route::get('/createSideNav', 'SideNavController@create')->middleware('auth');
Route::post('/storeSideNav', 'SideNavController@store')->middleware('auth');
Route::patch('/sideNav/{sideNavName}', 'SideNavController@update')->middleware('auth');
Route::delete('/sideNav/{sideNavName}', 'SideNavController@destroy')->middleware('auth');
Route::get('/sideNav/{sideNavName}/edit', 'SideNavController@edit')->middleware('auth');
Route::get('/c', 'ContactDetailsController@index')->middleware('auth');
Route::get('/createContact', 'ContactDetailsController@create')->middleware('auth');
Route::post('/storeContact', 'ContactDetailsController@store')->middleware('auth');
Route::patch('/contact/{contactName}', 'ContactDetailsController@update')->middleware('auth');
Route::delete('/contact/{contactName}', 'ContactDetailsController@destroy')->middleware('auth');
Route::get('/contact/{contactName}/edit', 'ContactDetailsController@edit')->middleware('auth');
Route::get('/s', 'ServicesController@index')->middleware('auth');
Route::get('/createService', 'ServicesController@create')->middleware('auth');
Route::post('/storeService', 'ServicesController@store')->middleware('auth');
Route::patch('/service/{serviceName}', 'ServicesController@update')->middleware('auth');
Route::delete('/service/{serviceName}', 'ServicesController@destroy')->middleware('auth');
Route::get('/service/{serviceName}/edit', 'ServicesController@edit')->middleware('auth');
Route::get('/ne', 'NewsController@index')->middleware('auth');
Route::get('/createNews', 'NewsController@create')->middleware('auth');
Route::post('/storeNews', 'NewsController@store')->middleware('auth');
Route::patch('/news/{newsName}', 'NewsController@update')->middleware('auth');
Route::delete('/news/{newsName}', 'NewsController@destroy')->middleware('auth');
Route::get('/news/{newsName}/edit', 'NewsController@edit')->middleware('auth');
Route::get('/f', 'FooterController@index')->middleware('auth');
Route::get('/createFooter', 'FooterController@create')->middleware('auth');
Route::post('/storeFooter', 'FooterController@store')->middleware('auth');
Route::patch('/footer/{footerName}', 'FooterController@update')->middleware('auth');
Route::delete('/footer/{footerName}', 'FooterController@destroy')->middleware('auth');
Route::get('/footer/{footerName}/edit', 'FooterController@edit')->middleware('auth');
Route::get('/createCarousel', 'CarouselController@create')->middleware('auth');
Route::post('/storeCarousel', 'CarouselController@store')->middleware('auth');
Route::get('/ca', 'CarouselController@index')->middleware('auth');
Route::get('/carousel/{carouselName}/edit', 'CarouselController@edit')->middleware('auth');
Route::patch('/carousel/{carouselName}', 'CarouselController@update')->middleware('auth');
Route::delete('/carousel/{carouselName}', 'CarouselController@destroy')->middleware('auth');
Route::get('/a', 'UsersController@index')->middleware('auth');
Route::get('/createAdmin', 'UsersController@create')->middleware('auth');
Route::post('/storeAdmin', 'UsersController@store')->middleware('auth');
Route::patch('/admin/{name}', 'UsersController@update')->middleware('auth');
Route::delete('/admin/{name}', 'UsersController@destroy')->middleware('auth');
Route::get('/admin/{name}/edit', 'UsersController@edit')->middleware('auth');
Route::post('/authenticate', 'UsersController@checklogin');
Route::get('/loginAdmin', 'UsersController@login');
Route::post('/sendemail/send', 'SendEmailController@send');
Route::get('/createRadio', 'RadioShowController@create')->middleware('auth');
Route::post('/storeRadio', 'RadioShowController@store')->middleware('auth');
Route::get('/r', 'RadioShowController@index')->middleware('auth');
Route::get('/radio/{fileName}/edit', 'RadioShowController@edit')->middleware('auth');
Route::patch('/radio/{fileName}', 'RadioShowController@update')->middleware('auth');
Route::delete('/radio/{fileName}', 'RadioShowController@destroy')->middleware('auth');
Route::redirect('/', '/page/home');
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
Route::get('/cart/destroy{itemId}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::resource('orders', 'OrderController');
Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');
Route::get('/o', 'OrderController@index')->middleware('auth');;
Route::get('/asn', 'AdminSideNavController@index')->middleware('auth');;
Route::get('/createAdminSideNav', 'AdminSideNavController@create')->middleware('auth');
Route::post('/storeAdminSideNav', 'AdminSideNavController@store')->middleware('auth');
Route::patch('/adminSideNav/{adminSideNavName}', 'AdminSideNavController@update')->middleware('auth');
Route::delete('/adminSideNav/{adminSideNavName}', 'AdminSideNavController@destroy')->middleware('auth');
Route::get('/adminSideNav/{adminSideNavName}/edit', 'AdminSideNavController@edit')->middleware('auth');
Route::view('/dashboard', 'dashboard')->middleware('auth');
Route::redirect('login', '/page/adminLogin')->name('login');
Route::get('stripe', 'StripeController@index');
Route::post('store', 'StripeController@store');
Route::get('logout', 'UsersController@logout')->name('logout');
