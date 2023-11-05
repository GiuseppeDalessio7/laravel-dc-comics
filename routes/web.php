<?php

use App\Http\Controllers\Admin\ComicsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/list_comic', function () {
    return view('list_comic');
});




Route::resource('admin/comics', ComicsController::class);

Route::resource('list_comic', ComicsController::class);
