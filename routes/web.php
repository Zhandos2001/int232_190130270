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


Route::get('/info', function () {
    return view('myinfo');
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


















//lab5

Route::get('/student1',"App\Http\Controllers\StudentController@index"); 

Route::resource('/student2',"App\Http\Controllers\StudentController"); 

//array
// Route::get('/user', function () {
//     return view('/user',["name" => "Aidar", "age" => 12]);
// });


//with method
// Route::get('/user', function () {
//     return view('/user') -> with("name","Kazhak") -> with("age",14);
// });


//compact method

// Route::get('/user/{name}/{age}', function ($name,$age) {
//     return view('/user', compact('name','age')) ;
// });


//calculator
//Route::get('/user/{num1}/{sign}/{num2}','App\Http\Controllers\Calculator@operation');




//lab5
Route::get('/Name/{name?}','App\Http\Controllers\StudentController@SName');


Route::get('/ddate/{date_birth}','App\Http\Controllers\StudentController@sdata_bith');


Route::get('/dAge/{age}','App\Http\Controllers\StudentController@sAge');
