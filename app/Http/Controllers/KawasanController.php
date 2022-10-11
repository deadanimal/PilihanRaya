<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKawasanRequest;
use App\Http\Requests\UpdateKawasanRequest;
use App\Models\Kawasan;

class KawasanController extends Controller
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
     * @param  \App\Http\Requests\StoreKawasanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKawasanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kawasan  $kawasan
     * @return \Illuminate\Http\Response
     */
    public function show(Kawasan $kawasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kawasan  $kawasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kawasan $kawasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKawasanRequest  $request
     * @param  \App\Models\Kawasan  $kawasan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKawasanRequest $request, Kawasan $kawasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kawasan  $kawasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kawasan $kawasan)
    {
        //
    }
}
