<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libros extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $libros = array(
            array("titulo" => "El juego de Ender",
            "autor" => "Orson Scott Card"),
            array("titulo" => "La tabla de Flandes",
            "autor" => "Arturo Pérez Reverte"),
            array("titulo" => "La historia interminable",
            "autor" => "Michael Ende"),
            array("titulo" => "El Señor de los Anillos",
            "autor" => "J.R.R. Tolkien")
            );

            return view('libros', compact('libros'));

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
      
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
