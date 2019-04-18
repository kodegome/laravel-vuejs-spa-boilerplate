<?php

Route::post('register', 'Api\Auth\AuthRegisterController');
Route::post('login', 'Api\Auth\AuthLoginController');

################## SECURE ROUTES - NEEDS TOKEN TO ACCESS ###################
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Api\Auth\AuthLogoutController');
    #Route::get('me', 'UserController');
    #Route::get('timeline', 'TimelineController');
});
