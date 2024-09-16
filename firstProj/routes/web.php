<?php

use App\Http\Controllers\products;
use App\Http\controllers\employees;
use App\Http\controllers\courses;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pro' , [products::class,'msg']);
// Route::get('show' , [products::class,'show']);

Route::get('showemp' , [employees::class,'show']);

// Route::resource('courses' , courses::class )->except(['create' , 'show']);
// Route::resource('courses' , courses::class )->only(['create' , 'show']);
Route::resource('courses' , courses::class )->middleware('auth');


// Select Data
Route::get('show', [employees::class , 'show']);


// insert Data
Route::get('create' ,[employees::class , 'create'] );
Route::post('insert' ,[employees::class , 'insert'] );

// Delete Data
Route::get('delete/{id}' , [employees::class , 'delete'] );


Route::get('uplimg' , [products::class,'upl']);
Route::post('uploadimg' , [products::class,'upload']);