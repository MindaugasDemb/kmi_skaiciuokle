<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Skaiciuokle;
use App\Http\Controllers\Pirk_sarasas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/skaiciuokle',[Skaiciuokle::class, 'skaiciuokle']);
Route::post('/rezultatas',[Skaiciuokle::class, 'rezultatas']);

Route::get('/sarasas',[Pirk_sarasas::class, 'sarasas']);
//Route::post('/rezultatas',[Pirk_sarasas::class, 'rezultatas']);
