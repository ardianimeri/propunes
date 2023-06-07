<?php

namespace App\Http\Controllers;

use App\Models\Aplikimi;
use Illuminate\Http\Request;

class KoltrolliAplikimeve extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aplikimet = Aplikimi::latest()->paginate(5);
        return view('aplikimet.index', compact('aplikimet'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aplikimet.create');
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

        //create a new aplikim
        Aplikimi::create($request->all());

        //redirect ku duhet
        return redirect()->route('aplikimet.index')->with('aplikimi u shpall me suksess');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aplikimi $job)
    {
        
        return view('aplikimet.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aplikimi $aplikimi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aplikimi $aplikimi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aplikimi $aplikimi)
    {
        //
    }
    public function search(Request $request)
    {
       $search_text = $_GET['querry'];
       $aplikimet = Aplikimi::where('Titulli' , 'LIKE', '%'.$search_text.'%')-> get();
       return view('Aplikimet.search', compact('aplikimet'));
    }
}
