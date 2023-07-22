<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
Route::redirect('/', '/dashboard');
Route::get('/dashboard', [WebController::class, 'dashboard']) -> name('dashboard');
Route::get('/favourites', [WebController::class, 'favourites']) -> name('favourites');
Route::get('/addnote', [WebController::class, 'addnote']) -> name('addnote');
