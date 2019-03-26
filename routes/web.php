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
// User auth routes
 Auth::routes();
//  these are the shipment routes
 Route::prefix('shipments')->group(function () {
  Route::get('/','User\ShipmentsController@index')->name('shipments.home');  
});
    // notification
 Route::prefix('Notifications')->group(function () { 
        Route::get('/','NotificationController@Token');
        Route::get('/{id}','NotificationController@show'); 
    });
    // this route goes to the Storeimage function on the usercontroller it is resposible for storing a image
    Route::post('/store/image','User\UserController@Storeimage')->name('userimage');
    // this is a tester function for showing all the users in a database
    Route::get('/Allusers', 'NotificationController@Allusers');
    // How it works modal token 
    Route::get('/modal', 'User\UserController@Modaltoken');
    Route::post('/modal','User\UserController@modaltokenupdate');
    // page controller
    Route::get('/','PagesController@index');
    // this is the home route
    Route::get('/home', 'HomeController@index')->name('home');
    // email verification
    Route::get('/verify/{token}','VerifyController@Verify')->name('verify');
    // auth user routes
    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
    // user edit 
    Route::get('/MyAccount','User\UserController@edit')->name('account.edit');
    Route::get('/Userinfo','User\UserController@SingleUser');
    Route::post('/pdata','User\UserController@Pdata');
    Route::post('/Userinfo','User\UserController@update');
    Route::post('/Useraccountdel','User\UserController@destroy');
    Route::post('/passwordUpdate','User\UserController@PasswordUpdate');
// Admin routes
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});