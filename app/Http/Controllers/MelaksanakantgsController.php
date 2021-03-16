<?php

namespace App\Http\Controllers;

use App\Melaksanakantgs;
use Illuminate\Http\Request;

class MelaksanakantgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $melaksanakantgs = Melaksanakantgs::with('datapegawai')->Paginate(2);
         return view('melaksanakan/index', compact('melaksanakantgs'));
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
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function show(Melaksanakantgs $melaksanakantgs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function edit(Melaksanakantgs $melaksanakantgs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Melaksanakantgs $melaksanakantgs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Melaksanakantgs  $melaksanakantgs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Melaksanakantgs $melaksanakantgs)
    {
        //
    }
}
