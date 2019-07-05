<?php
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
Route::get('/todo/{id}','User\UserController@SingleTodo');
Route::post('/todo/completed','User\UserController@CompletedTodo');
Route::post('/delete/todo', 'User\UserController@deletetodo');
Route::post('/store/image', 'User\UserController@Storeimage')->name('userimage');
Route::get('/modal', 'User\UserController@Modaltoken');
Route::post('/modal', 'User\UserController@modaltokenupdate');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/verify/{token}', 'VerifyController@Verify')->name('verify');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/MyAccount', 'User\UserController@edit')->name('account.edit');
Route::get('/Userinfo', 'User\UserController@SingleUser');
Route::post('/pdata', 'User\UserController@Pdata');
Route::post('/Userinfo', 'User\UserController@update');
Route::post('/Useraccountdel', 'User\UserController@destroy');
Route::post('/passwordUpdate', 'User\UserController@PasswordUpdate');
Route::get('/news', 'User\NewsController@index');
Route::post('/news','User\NewsController@SingleNews');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::post('/update/admin','AdminController@update');
    Route::post('/pdata', 'AdminController@Pdata');
    Route::post('/passwordUpdate','AdminController@PasswordUpdate');

    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::get('/update/shipments', 'Admin\ShipmentsController@UpdateShipments')->name('admin.shipments');
    Route::get('/sent/shipments', 'Admin\ShipmentsController@SentShipment')->name('admin.sent.shipments');
    Route::post('/add/shipment','Admin\ShipmentsController@store');
    Route::get('/shipments/all','Admin\ShipmentsController@All');
    Route::post('/shipment/completed','Admin\ShipmentsController@completed');
    Route::post('/shipment/status','Admin\ShipmentsController@updatestatus');

    Route::get('/news', 'Admin\NewsController@create')->name('admin.news');
    Route::post('/news','Admin\NewsController@store');
    Route::get('/news/all','Admin\NewsController@allnews');

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

    Route::get('/shipmentcalculator','Admin\ShipmentCalculator@index')->name('admin.calculator');
    Route::post('/shipmentcalculator','Admin\ShipmentCalculator@SeaRates');
    Route::post('/shipmentcalculator/air','Admin\ShipmentCalculator@AirRates');
    Route::get('/sea/data','Admin\ShipmentCalculator@SeaData');
    Route::get('/air/data','Admin\ShipmentCalculator@AirData');
    
});

Route::prefix('Notifications')->group(function () {
    Route::get('/', 'NotificationController@Token');
    Route::get('/{id}', 'NotificationController@show');
});

Route::prefix('scheduledelivery')->group(function () {
    Route::get('/', 'ScheduleDelivery\ScheduleDeliveryController@create')->name('scheduledelivery.home');
    Route::post('/','ScheduleDelivery\ScheduleDeliveryController@store');
    Route::get('/all','ScheduleDelivery\ScheduleDeliveryController@index');
    Route::get('/{id}', 'ScheduleDelivery\ScheduleDeliveryController@single');
});

Route::prefix('shippingcalculator')->group(function () {
    Route::get('/', 'ShippingCalculator\ShippingCalculatorController@index')->name('shippingCalculator.home');
    Route::get('/data','ShippingCalculator\ShippingCalculatorController@Data');
});

Route::prefix('prealerts')->group(function () {
    Route::get('/', 'PreAlerts\PreAlertsController@create')->name('Pre.Alerts.home');
    Route::post('/store', 'PreAlerts\PreAlertsController@store')->name('Pre.Alerts.store');
    Route::get('/all','PreAlerts\PreAlertsController@index');
    Route::get('/{id}','PreAlerts\PreAlertsController@single');
});

Route::prefix('shipments')->group(function () {
    Route::get('/', 'Shipment\ShipmentsController@index')->name('shipments.home');
    Route::get('/all', 'Shipment\ShipmentsController@shipments')->name('shipments.all');
    Route::get('/notification', 'Shipment\ShipmentsController@notification');
    Route::get('/notification/data','Shipment\ShipmentsController@notificationData');
});

Route::prefix('Messages')->group(function () {
    Route::get('/', 'User\MessagesController@index')->name('user.messages');
});
