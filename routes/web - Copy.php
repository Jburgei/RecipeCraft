<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'Hello, Laravel!';
});
Route::get('/data', function () {
    return response()->json(['message' => 'Laravel is awesome!']);
});
use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'showMessage']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
