<?php

namespace App\Http\Controllers;

use App\Ong;
use Illuminate\Http\Request;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ongs = Ong::all();
       
       return view('ongs')->with('ongs', $ongs);
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
     * @param  \App\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function show(Ong $ong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function edit(Ong $ong)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ong $ong)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ong  $ong
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ong $ong)
    {
        //
    }
}
