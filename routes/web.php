<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RencanaController;

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

Route::any('/', function() {
    return view('index', [
        'style' => "style.css"
    ]);
});

Route::any('/rencana', [RencanaController::class,'index']);
Route::any('/rencana/create', [RencanaController::class,'create']);
Route::any('/rencana/store', [RencanaController::class,'store']);
<<<<<<< HEAD
Route::get('/rencana/{ id }/edit/', [RencanaController::class,'edit']);
=======
Route::any('/rencana/{id}/edit', [RencanaController::class,'edit']);
Route::any('/rencana/{id}', [RencanaController::class,'update']);
Route::any('/rencana/{id}', [RencanaController::class,'hapus']);
Route::any('/rencana/recycle/{id}', [RencanaController::class,'restore']);
>>>>>>> 6a5d1a4 (menambahkan soft-delete)
