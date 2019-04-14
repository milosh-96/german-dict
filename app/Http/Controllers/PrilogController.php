<?php

namespace App\Http\Controllers;

use App\Prilog;
use Illuminate\Http\Request;

class PrilogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Prilog::take(30)->get();
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
     * @param  \App\Prilog  $prilog
     * @return \Illuminate\Http\Response
     */
    public function show(Prilog $prilog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prilog  $prilog
     * @return \Illuminate\Http\Response
     */
    public function edit(Prilog $prilog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prilog  $prilog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prilog $prilog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prilog  $prilog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prilog $prilog)
    {
        //
    }
}
