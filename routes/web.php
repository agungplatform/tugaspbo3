<?php
use Illuminate\Support\Facades\Route;
Route::group(['middleware' => 'checkSession'], function () {
Route::get('/', function () {
    return view('layout.app');
	});
});
Route::get('/login', 'HomeController@login');
Route::post('/masuk', 'HomeController@masuk');