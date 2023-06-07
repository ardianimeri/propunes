<?php

use App\Http\Controllers\JobPositionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KoltrolliAplikimeve;
use App\Http\Livewire\User\JobsPositionProfile;
use App\Http\Livewire\User\UserProfileComponent;
use App\Models\JobsPosition;
use App\Models\User;
use App\Models\Aplikimi;

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
Route::get('/users/dashboardemployee', function () {
    $aplikimet = Aplikimi::all();
    return view('users.dashboardemployee', [ 'aplikimet' => $aplikimet]);
});
Route::get('/users/dashboardadmin', function () {
    $users = User::all();
    $aplikimet = Aplikimi::all();
    return view('users.dashboardadmin', ['users' => $users, 'aplikimet' => $aplikimet]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/profile', JobsPositionProfile::class)->name('user.profile');
});

Route::get('/profile/show', function(){
    return view('profile.show');
});
Route::get('/search', 'App\Http\Controllers\KoltrolliAplikimeve@search');

