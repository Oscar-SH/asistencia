<?php

namespace App\Http\Controllers;

use App\Models\Asisten;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AsistenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asisten = Asisten::latest()->paginate(5);
        $teacher = Teacher::latest()->paginate(5);
        return view('asisten.index', compact('asisten'))->with('i',(request()->input('page',1)-1)*5);
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
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function show(Asisten $asisten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function edit(Asisten $asisten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asisten $asisten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asisten  $asisten
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asisten $asisten)
    {
        //
    }
}
