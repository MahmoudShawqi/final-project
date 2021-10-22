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
Route::get('about', function () {
    $name = 'Ahmed';
    $age = '80';
    // return view('about' , ['name' => $name]);
    // return view('about') ->with('age', $age);
    //يجب توفر امر واحد من ال about
    return view('about' ,compact('name' , 'age'));//سهل في تنفيذ الامر وهو compact
});
Route::get('contact', function () {
    return view('contact');
});