<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',[CourseController::class,'index'])->name("index");
Route::get('/create',[CourseController::class,'create'])->name("create.course");
Route::post('/store',[CourseController::class,'store'])->name("store.course");
Route::get('/edit/{id}',[CourseController::class,'edit'])->name("edit.course");
Route::post('/update/{id}',[CourseController::class,'update'])->name("update.course");
Route::get('/delete/{id}',[CourseController::class,'destroy'])->name("delete.course");




