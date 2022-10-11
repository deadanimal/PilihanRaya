<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartiRequest;
use App\Http\Requests\UpdatePartiRequest;
use App\Models\Parti;

class PartiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePartiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parti  $parti
     * @return \Illuminate\Http\Response
     */
    public function show(Parti $parti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parti  $parti
     * @return \Illuminate\Http\Response
     */
    public function edit(Parti $parti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartiRequest  $request
     * @param  \App\Models\Parti  $parti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartiRequest $request, Parti $parti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parti  $parti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parti $parti)
    {
        //
    }
}
