<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;

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
});

route::middleware(['auth'])->group(function(){
route::get('/warga',[WargaController::class,'index']);
route::get('/warga/create',[WargaController::class,'create']);
route::post('/warga/store',[WargaController::class,'store']);
route::get('/warga/{id}/edit',[WargaController::class,'edit']);
route::put('/warga/{id}',[WargaController::class,'update']);
route::delete('/warga/{id}',[WargaController::class,'destroy']);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
