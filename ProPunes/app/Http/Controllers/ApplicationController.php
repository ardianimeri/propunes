<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $jobs = $user->applications()->get();
    
        if ($jobs->isEmpty()) {
            // Handle case when the user is not associated with any jobs
            return response()->json(['error' => 'User does not have any jobs'], 404);
        }
    
        $applicants = collect();
    
        foreach ($jobs as $job) {
            $applicants = $applicants->concat($job->applicants()->get());
        }
    
        return view('applications.index', compact('applicants'));
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
        $applications = User::findOrFail($id);
        $applications->applications()->detach($applicationId);
        return Redirect::back()->with('success', 'Aplikimi u anulua me sukses');  
    }

    public function applications(){
    $user = auth()->user();

    if (!$user) {
        // Handle case when the user is not authenticated
        return response()->json(['error' => 'Unauthenticated'], 401);
    }

    $applications = $user->applications()->with('user')->get();

    return view('applications.application-show', compact('applications'));
    }
}
