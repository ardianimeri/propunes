<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JobsPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class JobsPositionrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user(); // Get the authenticated user

        return view('livewire.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required',
            'website' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $jobposition= new JobsPosition();
        $jobposition->title=$request->get('title');
        $jobposition->date=$request->get('date');
        $jobposition->website=$request->get('website');
        $jobposition->description=$request->get('description');
        $jobposition->user_id = Auth::user()->id;
        $jobposition->save();
   
        return response()->json(['success'=>'Data is successfully added']);

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
    $jobposition = JobsPosition::findOrFail($id);
    return view('livewire.user.edit', compact('jobposition'));
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
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'date' => 'required',
                'website' => 'required',
                'description' => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }
    
            $jobposition = JobsPosition::findOrFail($id);
            $jobposition->title = $request->get('title');
            $jobposition->date = $request->get('date');
            $jobposition->website = $request->get('website');
            $jobposition->description = $request->get('description');
            $jobposition->user_id = Auth::user()->id;
            $jobposition->save();
    
            return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobposition = JobsPosition::findOrFail($id);
        $jobposition->delete();

        return response()->json(['success' => 'Data is successfully deleted']);
    }
}
