<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

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

// Route::get('/', [formController::class, 'form']);
Route::get('/', [formController::class, 'form']);
Route::post('/form',[formController::class, 'postData'])->name('inputData');
Route::get('/pegawai/cetak_pdf', [formController::class, 'cetak_pdf'])->name('cetak');