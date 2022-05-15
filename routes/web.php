<?php
use App\Http\Controllers\GsrController;
use App\Models\Gsr;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Gsr/register', [GsrController::class, 'register'])->name('Gsr/register');
Route::post('/Gsr/register', [GsrController::class, 'store'])->name('Gsr/register');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Gsr/list', [GsrController::class, 'get_all'])->name('Gsr/list');
Route::get('/Gsr/edit/{id}', [GsrController::class, 'edit']);
Route::post('/Gsr/update',[GsrController::class,'update'])->name('Gsr/update');
Route::get('/Gsr/delete/{id}', [GsrController::class, 'delete']);
Route::get('/Gsr/search/{id}', [GsrController::class, 'search'])->name('Gsr/search');
