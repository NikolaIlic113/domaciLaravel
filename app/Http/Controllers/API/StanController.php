<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Stan;
use Illuminate\Http\Request;

class StanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Stan::all());
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
     * @param  \App\Models\Stan  $stan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Stan::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stan  $stan
     * @return \Illuminate\Http\Response
     */
    public function edit(Stan $stan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stan  $stan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stan $stan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stan  $stan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stan $stan)
    {
        //
    }
}
