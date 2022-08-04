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
