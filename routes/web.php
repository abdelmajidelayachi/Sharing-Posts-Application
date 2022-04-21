<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any','.*');

// Route::get('/', function () {
//     $user = [
//         'name' => 'John Doe'
        
//     ];
//     return Inertia::render('Welcome',[
//         'welcome' => 'Welcome to Inertia! Mr ' . $user['name'],
//     ]);
// });

// Route::get('/', function () {
//     return Inertia::render('Home');
// });
// Route::get('/profile', function () {
//     return Inertia::render('Profile');
// });

Route::get('/', [\App\Http\Controllers\Api\PostController::class, 'index']);