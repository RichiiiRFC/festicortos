<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;

class autores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $autores = Autor::get();
        return view('autores', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
   /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //$autores = Autor::get();
        return view('createautores');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = new Autor();
        $autor->nombre = $request->get('nombre');
        $autor->nacimiento = $request->get('nacimiento');
        $autor->save();
        return redirect()->route('autores.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $autor = Autor::findOrFail($id);
        return view('modificarAutores', compact('id', 'autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $autorAModificar = Autor::findOrFail($id);
        $autorAModificar->nombre = $request->get('nombre');
        $autorAModificar->nacimiento = $request->get('nacimiento');
        $autorAModificar->save();

        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { {
            Autor::findOrFail($id)->delete();
           return redirect()->route('autores.index');
        }
    }
}
