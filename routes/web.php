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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {
   return view('index');
});

Route::get('/features', function () {
   $nama = 'Features page';
   return view('features', ['nama' => $nama]);
});

Route::get('/pricing', function () {
   $nama = 'Pricing page';
   return view('pricing', ['nama' => $nama]);
});

Route::get('/index', 'PageController@index');
Route::get('/features', 'PageController@features');

//2
Route::get('/pricing', 'PricingController@pricing');


Route::get('/pricing', 'MahasiswaController@mahasiswa');

Route::get('/students', 'StudentsController@index');


Route::get('/students/{student}', 'StudentController@show');

Route::get('/student/create', 'StudentsController@create');

Route::post('/students', 'StudentsController@store');

Route::get('/show/{student}', 'StudentsController@show');

Route::delete('/students/{student}', 'StudentsController@destroy');

Route::get('/details', 'StudentsController@details');
Route::get('/create', 'StudentsController@create');



