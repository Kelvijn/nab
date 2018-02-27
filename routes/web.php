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

Route::get('/', 'PagesController@index');
Route::get('/tablets', 'PagesController@tablets');
Route::get('/bibliographies', 'PagesController@bibliographies');
Route::get('/bibliographies/{id}', 'PagesController@showBibliographies');


Route::get('/tablets/{id}', 'PagesController@showTablet');
Route::get('/posts', 'PagesController@posts');
Route::get('/posts/{id}', 'PagesController@showPost');

Route::get('/about', 'PagesController@about');
Route::get('/acronym', 'PagesController@acronym');
Route::get('/coverage', 'PagesController@coverage');
Route::get('/funding', 'PagesController@funding');
Route::get('/help', 'PagesController@help');
Route::get('/cite', 'PagesController@cite');
Route::get('/layout', 'PagesController@layout');
Route::get('/staff', 'PagesController@staff');

Route::view('/uruk', '/front/home/related/uruk/home');
Route::view('/uruk/uruk_archives_eanna', 'front/home/related/uruk/uruk_archives_eanna');
Route::view('/uruk/uruk_archives_bel_aplu_utsur', '/front/home/related/uruk/uruk_archives_bel_aplu_utsur');
Route::view('/uruk/uruk_archives_bel_aplu_utsur_profile', '/front/home/related/uruk/uruk_archives_bel_aplu_utsur_profile');
Route::view('/uruk/uruk_archives_damiqu', '/front/home/related/uruk/uruk_archives_damiqu');
Route::view('/uruk/uruk_archives_atu', '/front/home/related/uruk/uruk_archives_atu');
Route::view('/uruk/uruk_archives_gimil_nanaya_a', '/front/home/related/uruk/uruk_archives_gimil_nanaya_a');
Route::view('/uruk/uruk_archives_gimil_nanaya_b', '/front/home/related/uruk/uruk_archives_gimil_nanaya_b');
Route::view('/uruk/uruk_archives_kuri_a', '/front/home/related/uruk/uruk_archives_kuri_a');
Route::view('/uruk/uruk_archives_kuri_b', '/front/home/related/uruk/uruk_archives_kuri_b');
Route::view('/uruk/uruk_archives_kuri_c', '/front/home/related/uruk/uruk_archives_kuri_c');
Route::view('/uruk/uruk_archives_nur_sin', '/front/home/related/uruk/uruk_archives_nur_sin');
Route::view('/uruk/uruk_archives_rim_anu', '/front/home/related/uruk/uruk_archives_rim_anu');
Route::view('/uruk/uruk_archives_rim_anu_profile', '/front/home/related/uruk/uruk_archives_rim_anu_profile');
Route::view('/uruk/uruk_archives_ekur_zakir', '/front/home/related/uruk/uruk_archives_ekur_zakir');
Route::view('/uruk/uruk_archives_ekur_zakir_profile', '/front/home/related/uruk/uruk_archives_ekur_zakir_profile');
Route::view('/uruk/uruk_archives_sin_leqe_uninni', '/front/home/related/uruk/uruk_archives_sin_leqe_uninni');
Route::view('/uruk/uruk_staff', '/front/home/related/uruk/uruk_staff');






