<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $jobs = $user->jobs()->with('applicants')->get();
    
        if ($jobs->isEmpty()) {
            // Handle case when the user is not associated with any jobs
            return response()->json(['error' => 'User does not have any jobs'], 404);
        }
    
        $applicants = collect();
    
        foreach ($jobs as $job) {
            $applicants = $applicants->concat($job->applicants()->get());
        }
    
        return view('user.profile-employer', compact('applicants'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $applications = Job::findOrFail($id);
        $applications->applicants()->detach();
        return Redirect::back()->with('success', 'Aplikimi u anulua me sukses');  
    }

    public function destroyApplications($id, $applicationId)
    { 
        $user = User::findOrFail($id);

        $user->applications()->detach($applicationId);
        return Redirect::back()->with('success', 'Aplikimi u anulua me sukses');  
    }

    public function applications(){
    $user = auth()->user();

    if (!$user) {
        // Handle case when the user is not authenticated
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    $applications = $user->applications()->get();

    return view('applications.application-show', compact('applications'));
    }
    public function denyApplication($id, $applicationId)
    { 
        // Find the user who owns the job posting (assuming you have a Job model)
        $job = Job::where('user_id', $id)->firstOrFail();
        
        // Detach the application from the job posting
        $job->applicants()->detach($applicationId);
        
        return redirect()->back()->with('success', 'Application denied successfully');
    }
}
