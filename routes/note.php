<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/addnote', [NoteController::class, 'addnote']) -> name('addnote');