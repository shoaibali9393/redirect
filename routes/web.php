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
    return view('home');
})->name('home');

Auth::routes();


Route::get('admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin-dashboard');

Route::get('footer', function () {
    return view('admin.footer.index');
})->name('admin-footer-index');
Route::get('footer-create', function () {
    return view('admin.footer.create');
})->name('admin-footer-create');