<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Upravnik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpravnikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Upravnik::all());
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
        $validator = Validator::make($request->all(), [
            'ime_prezime' => 'required',
            'broj_licence' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $upravnik = Upravnik::create([
            'ime_prezime' => $request->ime_prezime,
            'broj_licence' => $request->broj_licence,
        ]);

        return response()->json($upravnik);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upravnik  $upravnik
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Upravnik::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upravnik  $upravnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Upravnik $upravnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upravnik  $upravnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upravnik $upravnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upravnik  $upravnik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Upravnik::find($id)->delete();
        return response()->json('Upravnik je uspesno obrisan u bazi podataka.');
    }
}
