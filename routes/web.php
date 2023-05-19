<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/about','FrontendController@aboutIndex');


Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about_index']);
Route::get('/contact', [FrontendController::class, 'contact_index']);