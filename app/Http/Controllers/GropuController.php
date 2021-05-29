<?php

namespace App\Http\Controllers;

use App\Models\Gropu;
use Illuminate\Http\Request;

class GropuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gropu = Gropu::latest()->paginate(5);
        
        return view('gropu.index', compact('gropu'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gropu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'semestre' => 'required',
                'nameg' => 'required',
                'capacidad' => 'required'
            ]
        );

        Gropu::create($request->all());
        return redirect()->route('gropu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gropu  $gropu
     * @return \Illuminate\Http\Response
     */
    public function show(Gropu $gropu)
    {
        return view('gropu.show', compact('gropu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gropu  $gropu
     * @return \Illuminate\Http\Response
     */
    public function edit(Gropu $gropu)
    {
        return view('gropu.edit', compact('gropu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gropu  $gropu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gropu $gropu)
    {
        $request->validate(
            [
                'semestre' => 'required',
                'nameg' => 'required',
                'capacidad' => 'required'
            ]
        );

        $gropu->update($request->all());
        return redirect()->route('gropu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gropu  $gropu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gropu $gropu)
    {
        $gropu->delete();
        return redirect()->route('gropu.index');
    }
}
