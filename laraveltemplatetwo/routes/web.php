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

Route::get('/','usertemplate@index');
Route::get('/error','usertemplate@error');
Route::get('/border','usertemplate@border');
Route::get('/tables','usertemplate@tables');
Route::get('/register','usertemplate@register');
Route::get('/login','usertemplate@login');
Route::get('/color','usertemplate@color');
Route::get('/animation','usertemplate@animation');
Route::get('/forgot-password','usertemplate@fpassword');
Route::get('/buttons','usertemplate@buttons');
Route::get('/blank','usertemplate@blank');
Route::get('/charts','usertemplate@charts');
Route::get('/other','usertemplate@other');
Route::get('/cards','usertemplate@cards');
