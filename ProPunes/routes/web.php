<?php

use App\Http\Controllers\JobsPositionrController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Livewire\User\JobsPositionProfile;
use App\Http\Livewire\User\UserProfileComponent;
use App\Models\JobsPosition;
use App\Models\User;
use App\Models\Job;

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
Route::resource('jobs', JobController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/jobs/index', function () {
    return view('jobs.index');
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/show', function () {
    return view('jobs.show');
});
Route::get('/users/dashboardemployee', function () {
    $jobs = Job::all();
    return view('users.dashboardemployee', [ 'jobs' => $jobs]);
});
Route::get('/users/dashboardadmin', function () {
    $users = User::all();
    $jobs = Job::all();
    return view('users.dashboardadmin', ['users' => $users, 'jobs' => $jobs]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/profile', JobsPositionProfile::class)->name('user.profile');
});
Route::resource('jobposition', JobsPositionrController::class);

Route::get('/jobposition/{id}/edit', 'JobPositionController@edit')->name('jobposition.edit');

Route::get('/profile/show', function(){
    return view('profile.show');
});
Route::get('/search', 'App\Http\Controllers\JobController@search');

