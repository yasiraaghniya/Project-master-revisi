<?php

namespace App\Http\Controllers;

use App\Perjalanandns;
use Illuminate\Http\Request;

class PerjalanandnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $perjalanandns = Perjalanandns::with('datapegawai')->Paginate(2);
         return view('perjalanan/index', compact('perjalanandns'));
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
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function show(Perjalanandns $perjalanandns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjalanandns $perjalanandns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjalanandns $perjalanandns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perjalanandns  $perjalanandns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perjalanandns $perjalanandns)
    {
        //
    }
}
