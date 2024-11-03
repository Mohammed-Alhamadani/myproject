<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mohammed;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/admin', function () {
//     return view('admin',['name'=>'mohamed']);
// });



// Route::view('/users','users');



// with controller

Route::get('/mohammed/test/index',[mohammed::class,'index']);
Route::get('/mohammed/test/show',[mohammed::class,'show']);
Route::get('/mohammed/test/edit',[mohammed::class,'edit']);
Route::get('/mohammed/test/create',[mohammed::class,'create']);
