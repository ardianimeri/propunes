<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KoltrolliAplikimeve;

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
    return view('homepage');
});

Route::prefix('users')->name('users.')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/create', [UserController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::post('/{id}/update', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
});
Route::resource('aplikimet', KoltrolliAplikimeve::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/Aplikimet/index', function () {
    return view('Aplikimet.index');
});
Route::get('/Aplikimet/create', function () {
    return view('Aplikimet.create');
});
Route::get('/Aplikimet/show', function () {
    return view('Aplikimet.show');
});
