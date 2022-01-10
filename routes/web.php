<?php

use App\Http\Controllers\BukuterbitController;
use App\Http\Controllers\Bukuterbit2Controller;
use App\Http\Controllers\MaplepublisherController;
use App\Models\bukuterbit;
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

Route::get('/maple-publisher', function () {
    return view('index');
});

Route::get('/detail-1', function () {
    return view('portfolio-details');
});

// Route::get('/details/{id}', function ($id_buku) {
//     return view('portfolio-details', [
//         'item' => bukuterbit::find($id_buku)
//     ]);
// });

Route::resource('maple-publisher', MaplepublisherController::class);

Route::resource('buku-terbit', Bukuterbit2Controller::class);

Route::resource('admin', BukuterbitController::class);