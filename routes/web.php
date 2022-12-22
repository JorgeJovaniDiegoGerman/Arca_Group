<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Emails\ContactanosController;
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
    return view('index');
});
/*
|----------------------------------------------------------------------------
|   Secciones del index
|----------------------------------------------------------------------------
*/
Route::get('/Arca_Group', function () {
    return view('section_arca_group/index');
});
/*
|----------------------------------------------------------------------------
|   Rutas de emails
|----------------------------------------------------------------------------
*/
Route::post('contacto',[ContactanosController::class,'storeContacto'])->name('contacto');
