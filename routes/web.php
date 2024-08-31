<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    $client = Client::all();
    return view('welcome', ['clients'=> $client]);
});

Route::get('/add-client', function () {
    return view('add-client');
});

Route::post('/create-client', [ClientController::class, 'createClient'])->name('createClient');
Route::get('/edit/{id}', [ClientController::class, 'editClient'])->name('edit');
Route::post('/update/{id}', [ClientController::class, 'update'])->name('update');

