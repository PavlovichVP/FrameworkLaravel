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

Route::get('/my-name', function () {
    return 'Пивоваров Вадим Павлович';
});

Route::get('/my-friend', function () {
   return 'список друзей епта';
});

Route::get('/get-friend/{name}', function ($name){
    return $name;
});

Route::get('/my-city/{city}', function ($city){
    return $city;
});

Route::get('/level/{lvl}', function ($lvl){
    return 'бобр';
});

Route::get('/power', function (){
    $url = route('power');
    return $url;
});

Route::get('/test', function (){
})->name('power');
