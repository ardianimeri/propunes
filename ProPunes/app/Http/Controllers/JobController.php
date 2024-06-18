<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->paginate(5);
        return view('jobs.index', compact('jobs'))->with(request()->input('page'));
    }
    
    //function for dashboardemployee
    public function showjobs(){
        $user = Auth::user();
        //$jobs = Job::all();
        $jobs = Job::where('user_id', $user->id)->orderBy('id','desc')->get();
        return view('user.profile-employer', compact('user','jobs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'Titulli' => 'required',
            'Pershkrimi' => 'required',
            'Kategoria' => 'required',
            'Lokacioni' => 'required',
            'Orari' => 'required'
        ]);
        $jobposition = new Job();
        $jobposition->fill($request->all());
        $jobposition->user_id = auth()->id();
        $jobposition->save();


        // Assign the user ID to the created job
       

        //redirect ku duhet
        return redirect()->route('jobs.index')->with('aplikimi u shpall me suksess');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'Titulli' => 'required',
            'Pershkrimi' => 'required',
            'Kategoria' => 'required',
            'Lokacioni' => 'required',
            'Orari' => 'required'
        ]);

        $job->update($request->all());

        // Assign the user ID to the created job


        //redirect ku duhet
        return redirect()->route('jobs.index')->with('aplikimi u editua me suksess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jobs = Job::findOrFail($id);
        $jobs->delete();
        return Redirect::back()->with('success', 'Aplikimi u anulua me sukses');  
    }
    public function search(Request $request)
    {
       $search_text = $_GET['querry'];
       $jobs = Job::where('Titulli' , 'LIKE', '%'.$search_text.'%')-> get();
       return view('jobs.search', compact('jobs'));
    }
}
