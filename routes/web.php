<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::middleware(['auth', 'role:admin'])->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/akun_mahasiswa', 'UserController@index')->name('admin.user.index');
    Route::get('/import', 'UserController@import')->name('admin.user.import');
    Route::get('/import_process', 'UserController@index')->name('admin.user.import_proccess');
});

Route::middleware(['auth', 'role:user'])->namespace('User')->group(function () {
    Route::get('/user', 'HomeController@index')->name('user.home');
});
