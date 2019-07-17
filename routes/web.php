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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('mpesa')->group(function ()
{
  Route::any('pay', 'MpesaController@pay');
  Route::any('validate', 'MpesaController@validation');
  Route::any('confirm', 'MpesaController@confirmation');
  Route::any('results', 'MpesaController@results');
  Route::any('register', 'MpesaController@register');
  Route::any('timeout', 'MpesaController@timeout');
  Route::any('reconcile', 'MpesaController@reconcile');
});

Route::resources([
  'payments' 	=> 'PaymentController',
  'users'       => 'UserController'
]);
