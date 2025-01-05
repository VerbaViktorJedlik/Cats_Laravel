<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/cats', function () {
//     return DB::table('cats')->get();
// });

Route::resource('/cats', CatController::class);