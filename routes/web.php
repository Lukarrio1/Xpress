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
    Route::get('/', 'User\ShipmentsController@index')->name('shipments.home');
});
// notification
Route::prefix('Notifications')->group(function () {
    Route::get('/', 'NotificationController@Token');
    Route::get('/{id}', 'NotificationController@show');
});
Route::post('/user/imgremove', 'User\UserController@removeimg');
Route::post('/todo', 'User\UserController@todo');
Route::get('/todo', 'User\UserController@alltodo');
Route::post('/delete/todo', 'User\UserController@deletetodo');
// this route goes to the Storeimage function on the usercontroller it is resposible for storing a image
Route::post('/store/image', 'User\UserController@Storeimage')->name('userimage');
// this is a tester function for showing all the users in a database
// Route::get('/Allusers', 'NotificationController@Allusers');
// How it works modal token
Route::get('/modal', 'User\UserController@Modaltoken');
Route::post('/modal', 'User\UserController@modaltokenupdate');
// this is the home route
Route::get('/', 'HomeController@index')->name('home');
// email verification
Route::get('/verify/{token}', 'VerifyController@Verify')->name('verify');
// auth user routes
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// user edit
Route::get('/MyAccount', 'User\UserController@edit')->name('account.edit');
Route::get('/Userinfo', 'User\UserController@SingleUser');
Route::post('/pdata', 'User\UserController@Pdata');
Route::post('/Userinfo', 'User\UserController@update');
Route::post('/Useraccountdel', 'User\UserController@destroy');
Route::post('/passwordUpdate', 'User\UserController@PasswordUpdate');

Route::get('/news', 'User\NewsController@index');
Route::post('/news','User\NewsController@SingleNews');
// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/update/shipments', 'Admin\ShipmentsController@UpdateShipments')->name('admin.shipments');
    Route::get('/sent/shipments', 'Admin\ShipmentsController@SentShipment')->name('admin.sent.shipments');

    Route::get('/news', 'Admin\NewsController@create')->name('admin.news');
    Route::post('/news','Admin\NewsController@store');

    Route::get('/users', 'Admin\UserController@index')->name('admin.allusers');
    Route::get('/allusers', 'Admin\UserController@Allusers');
    Route::post('/allusers', 'Admin\UserController@Singleuser');
    Route::post('/search', 'Admin\UserController@Search');

    Route::get('/delivery', 'Admin\DeliveryController@index')->name('admin.delivery');
    Route::get('/all/delivery', 'Admin\DeliveryController@AllSdelivery');
    Route::get('/sheduledelivery/notification','Admin\DeliveryController@notification');
    Route::post('/delivery/view','Admin\DeliveryController@DeliveryUpdate');
    Route::post('/delivery/update','Admin\DeliveryController@TokenUpdate');
    Route::post('/delivery/search','Admin\DeliveryController@DeliverySearch');

    Route::get('/invoices', 'Admin\InvoiceController@index')->name('admin.invoice');
    Route::get('/invoices/all', 'Admin\InvoiceController@Allinvoices');
    Route::post('/invoice/file','Admin\InvoiceController@InvFile');
    Route::post('/invoice/update','Admin\InvoiceController@UpdateInvoice');

    Route::get('/messages', 'Admin\MessageController@index')->name('admin.message');
    Route::post('/user/delete','Admin\UserController@DeleteUser');

    Route::get('/invoice/notification','Admin\InvoiceController@invoiceNotification');
    Route::post('/invoice/notification','Admin\InvoiceController@InvoiceNotificationUpdate');
    Route::post('/invoice/search','Admin\InvoiceController@InvoiceSearch');
    
    Route::get('/edit','AdminController@edit')->name('admin.edit');
    Route::get('/edit/data','AdminController@editData');
    
});

// notification
Route::prefix('Notifications')->group(function () {
    Route::get('/', 'NotificationController@Token');
    Route::get('/{id}', 'NotificationController@show');
});
//  these are the Schedule Delivery
Route::prefix('scheduledelivery')->group(function () {
    Route::get('/', 'ScheduleDelivery\ScheduleDeliveryController@create')->name('scheduledelivery.home');
    Route::post('/','ScheduleDelivery\ScheduleDeliveryController@store');
});
//  these are the Shipping calculator routes
Route::prefix('shippingcalculator')->group(function () {
    Route::get('/', 'ShippingCalculator\ShippingCalculatorController@index')->name('shippingCalculator.home');
});
//  these are the Pre-Alerts routes
Route::prefix('prealerts')->group(function () {
    Route::get('/', 'PreAlerts\PreAlertsController@create')->name('Pre.Alerts.home');
    Route::post('/store', 'PreAlerts\PreAlertsController@store')->name('Pre.Alerts.store');
});
//  these are the shipment routes
Route::prefix('shipments')->group(function () {
    Route::get('/', 'Shipment\ShipmentsController@index')->name('shipments.home');
    Route::get('/all', 'Shipment\ShipmentsController@shipments')->name('shipments.all');
    Route::get('/notification', 'Shipment\ShipmentsController@notification');
});
// these are the messages routes
Route::prefix('Messages')->group(function () {
    Route::get('/', 'User\MessagesController@index')->name('user.messages');
});
