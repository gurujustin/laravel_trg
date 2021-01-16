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
    return view('index');
})->name('home');

Route::get('/how-it-works', function () {
    return view('help');
})->name('how-it-works');

Route::get('/business', function () {
    return view('business');
})->name('business');

Route::get('/repair-by-model', function () {
    return view('repair-by-model');
})->name('repair-by-model');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/repair-by-problem', function () {
    return view('repair-by-problem');
})->name('repair-by-problem');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/van', function () {
    return view('van');
})->name('van');

Route::group(['prefix' => 'graph'], function () {
    Route::get('/', [App\Http\Controllers\GraphController::class,'index']);
    Route::post('/', [App\Http\Controllers\GraphController::class,'filter'])->name('filter');
    Route::get('/capacity_filter', [App\Http\Controllers\GraphController::class, 'capacityFilter']);
});
