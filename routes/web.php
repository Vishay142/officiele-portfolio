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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/stage', function () {
    return view('stage');
});

Route::get('/java', function () {
    return view('java');
});

Route::get('/html-css', function () {
    return view('html-css');
});

Route::get('/javascript', function () {
    return view('javascript');
});

Route::get('/php', function () {
    return view('php');
});

Route::get('/rent-a-car', function () {
    return view('rent-a-car');
});

Route::get('/klantgesprekken', function () {
    return view('klantgesprekken');
});

Route::get('/kerntaken', function () {
    return view('kerntaken');
});

Route::get('/keuzedelen', function () {
    return view('keuzedelen');
});

Route::get('/home', function () {
    return view('welcome');
});

