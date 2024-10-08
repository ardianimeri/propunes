<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobsPositionrController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LocationController;
use App\Http\Livewire\User\JobsPositionProfile;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserProfileEmployer;
use App\Models\JobsPosition;
use App\Models\User;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Models\File;

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
   
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('homepage');
    })->name('homepage');
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
Route::get('/applications/application-show', 'App\Http\Controllers\ApplicationController@applications');


Route::resource('jobs', JobController::class);
Route::resource('lokacioni', LocationController::class);
Route::resource('applications', ApplicationController::class);

Route::delete('/applications/{id}/destroyApplications/{applicationId}', [ApplicationController::class, 'destroyApplications'])->name('applications.destroyApplications');
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::middleware(['role:punekerkues'])->group(function() {
        Route::get('/users/dashboardemployee', function () {
            $user = Auth::user();
            $applications = $user->applications()->with('users')->get();
            return view('users.dashboardemployee' , ['applications'=>$applications]);
        })->name('users.dashboardemployee');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    
    });
    Route::middleware(['role:punedhenes'])->group(function(){
        Route::get('/users/dashboardemployer', function () {
            $user = Auth::user();
            $jobs = $user->jobs()->get();
            
            $data = [];
            foreach ($jobs as $job) {
                $applicantsForJob = $job->applicants()->get();
                $data[] = [
                    'job' => $job,
                    'applicants' => $applicantsForJob,
                ];
    }
            
            return view('users.dashboardemployer', ['data' => $data]);
        })->name('users.dashboardemployer');
        
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

Route::get('/profile/update-profile-information-form', [UserController::class, 'showUpdateProfileForm'])->name('profile.update-profile-information-form');

Route::get('/profile/show/{id}', [UserController::class, 'edit'])->name('profile.show');
Route::post('/profile/show/{id}', [UserController::class, 'update'])->name('profile.show');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('job.edit');

Route::delete('/users/{id}/applications/{applicationId}/deny', [ApplicationController::class, 'denyApplication'])->name('applications.deny');

Route::post('/files', [FileController::class, 'store'])->name('files.store');
Route::get('/files/upload', function () {
    return view('files.upload');
})->name('files.upload');

Route::get('/files/index', function(){
    return view('files.index');
})->name('files.index');
Route::get('/files', [FileController::class, 'index'])->name('files.index');
Route::get('/files/{id}', [FileController::class, 'show'])->name('files.show');
Route::get('/files/{id}/download', [FileController::class, 'download'])->name('files.download');
Route::delete('/files/{id}/destroy', [FileController::class, 'destroy'])->name('files.destroy');

Route::post('/jobs/{job}/apply', [JobController::class, 'apply'])->name('jobs.apply');