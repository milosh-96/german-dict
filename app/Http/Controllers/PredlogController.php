<?php

namespace App\Http\Controllers;

use App\Predlog;
use Illuminate\Http\Request;

class PredlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Predlog::take(30)->get();
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
     * @param  \App\Predlog  $predlog
     * @return \Illuminate\Http\Response
     */
    public function show(Predlog $predlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Predlog  $predlog
     * @return \Illuminate\Http\Response
     */
    public function edit(Predlog $predlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Predlog  $predlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predlog $predlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Predlog  $predlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predlog $predlog)
    {
        //
    }
}
