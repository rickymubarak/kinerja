<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RencanaController;
use App\Http\Controllers\RoleController;

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


Route::middleware(['auth'])->group(function(){
    Route::any('/', function() {
        return view('home');
    });
    Route::get('/rencana',[RencanaController::class,'index']);
    Route::any('/rencana/create', [RencanaController::class,'create']);
    Route::any('/rencana/store', [RencanaController::class,'store']);

    // route mengarahkan edit
    Route::get('/rencana/edit/{id}', [RencanaController::class,'edit']);

    // route aksi edit
    Route::put('/rencana/{id}', [RencanaController::class,'update']);

    // route delete
    Route::any('/rencana/hapus/{id}',[RencanaController::class,'hapus']);

    // route menampilkan softdelete
    Route::get('/rencana/recycle',[RencanaController::class,'recycle']);

    // route menjalankan aksi restore
    Route::any('/rencana/restore/{id}',[RencanaController::class,'restore']);

    // route validasi panggil
    Route::get('rencana/validasi/{id}',[RencanaController::class,'validasi']);
});

Route::resource('roles', RoleController::class);
// Route::controller(RoleController::class)->group(function(){
//     Route::get('/roles','index')->middleware('can:read role');
//     Route::get('/roles/create','create');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
