<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'App\Http\Controllers\NextController@index');
// second methode
Route::get('/', [HomeController::class, 'homePage']);
Route::get('/about', [HomeController::class, 'aboutPage']);
Route::get('/contact', [HomeController::class, 'contactPage']);
Route::get('/display/{id}', [HomeController::class, 'useId']);
