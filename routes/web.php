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
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/example-router/{age}', function () {
    return "welcome to laravel";
});

Route::get('/example-redirect', function () {
    return redirect("/test");
});


Route::get('/post1/{id}', function ($id) {
    return "Your is id: ".$id;
});


Route::get('/post2/{id}/{name}', function ($id,$name) {
    return "Your is id: ".$id ." name: " .$name;
});

Route::get('/post3/{id}/{name?}', function ($id = 190103270,$name = "Zhandos") {
    return "Your is id: ".$id ." name: " .$name;
});

Route::get('/post4/{id}/{name?}/{age?}', function ($id = 190103270,$name = null,$age = null) {
    return "Your is id: ".$id ." name: " .$name. "Age : ".$age;
})-> where (['name'=>'[a-z,A-Z]+','age' => '[\d]+']);