<?php

namespace App\Http\Controllers;

use App\Imenica;
use Illuminate\Http\Request;

class ImenicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Imenica::take(30)->get();
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
     * @param  \App\Imenica  $imenica
     * @return \Illuminate\Http\Response
     */
    public function show(Imenica $imenica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imenica  $imenica
     * @return \Illuminate\Http\Response
     */
    public function edit(Imenica $imenica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imenica  $imenica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imenica $imenica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imenica  $imenica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imenica $imenica)
    {
        //
    }
}
