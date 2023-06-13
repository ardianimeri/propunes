<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobsPositionrController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Livewire\User\JobsPositionProfile;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserProfileEmployer;
use App\Models\JobsPosition;
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('');
    })->name('dashboard');
});
Route::get('/jobs/index', function () {
    return view('jobs.index');
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/show/{id}', function ($id) {
    return view('jobs.show', compact('id'));
});


Route::resource('jobs', JobController::class);

Route::resource('applications', ApplicationController::class);


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::middleware(['role:punekerkues'])->group(function() {
        Route::get('/users/dashboardemployee', function () {
            $user = Auth::user();
            $jobs = Job::where('user_id', $user->id)->orderBy('id','desc')->get();
            return view('users.dashboardemployee', [ 'jobs' => $jobs]);
        })->name('users.dashboardemployee');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/profile', JobsPositionProfile::class)->name('user.profile');
    });
    Route::middleware(['role:admin'])->group(function() {
        Route::get('/users/dashboardadmin', function () {
            $users = User::all();
            $jobs = Job::all();
            return view('users.dashboardadmin', ['users' => $users, 'jobs' => $jobs]);
        })->name('users.dashboardadmin');
    });
});
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::middleware(['role:punedhenes'])->group(function() {
    Route::get('/user/profile-employer', UserProfileEmployer::class)->name('user.profile-employer');
    });
});
Route::resource('jobposition', JobsPositionrController::class);


Route::get('/profile/show', function(){
    return view('profile.show');
});
Route::get('/search', 'App\Http\Controllers\JobController@search');

Route::get('/registeradmin', function(){
    return view('auth.registeradmin');
});

Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.delete');

Route::post('/admin/users', [AdminController::class, 'storeAdmin'])->name('admin.users.store');

Route::delete('/admin/jobs/{id}', [AdminController::class, 'deleteJob'])->name('admin.job.delete');



