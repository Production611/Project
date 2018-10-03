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
Route::get('/home', function () {
    return view('Project.home');
});
Route::get('/team', function () {
    return view('Project.team');
});
Route::get('/service', function () {
    return view('Project.service');
});
Route::get('/booking', function () {
    return view('Project.booking');
});
Route::get('/about', function () {
    return view('Project.about');
});
Route::get('/contact', function () {
    return view('Project.contact');
});
