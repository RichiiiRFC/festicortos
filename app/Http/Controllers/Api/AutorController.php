<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $autores = Autor::get();
        return response()->json($autores, 200);

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
    public function show(Autor $autore)
    {
        return response()->json($autore, 200);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autore)
    {
        //
    }
}
