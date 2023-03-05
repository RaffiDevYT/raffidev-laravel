<?php

use App\Http\Controllers\UserController;
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
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
})->name('home');
Route::get('/profile', function () {
    return view('profile.profile');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog/admin/login', function () {
    return view('blog.admin.login');
});

Route::get('register',[UserController::class, 'register'])->name('register');
Route::post('register',[UserController::class, 'register_action'])->name('register.action');
Route::get('login',[UserController::class, 'login'])->name('login');
Route::post('login',[UserController::class, 'login_action'])->name('login.action');
Route::get('password',[UserController::class, 'password'])->name('password');
Route::post('password',[UserController::class, 'password_action'])->name('password_action');
Route::get('logout',[UserController::class, 'logout'])->name('logout');