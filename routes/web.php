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
    return view('index');
});

Route::get('/services', function (){
    return view('services');
 });

 Route::get('/web_services', function (){
    return view('web_services');
 });

 Route::get('website_design', function (){
    return view('website_design');
 });
