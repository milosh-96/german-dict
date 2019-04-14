<?php

namespace App\Http\Controllers;

use App\Pridev;
use Illuminate\Http\Request;

class PridevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pridev::take(30)->get();
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
     * @param  \App\Pridev  $pridev
     * @return \Illuminate\Http\Response
     */
    public function show(Pridev $pridev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pridev  $pridev
     * @return \Illuminate\Http\Response
     */
    public function edit(Pridev $pridev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pridev  $pridev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pridev $pridev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pridev  $pridev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pridev $pridev)
    {
        //
    }
}
