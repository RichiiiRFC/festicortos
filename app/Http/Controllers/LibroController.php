<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autor;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $libros = Libro::get();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $autores = Autor::get();
        return view('libros.create', compact("autores"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = new Libro();
        $libro->titulo = $request->get('titulo');
        $libro->editorial = $request->get('editorial');
        $libro->precio = $request->get('precio');
        $libro->autor_id = $request->get('autor');
        $libro->save();
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.detalles', compact('libro'));

    }

    public function listado(){
        $libros = Libro::paginate(5);
        return view('libros.listado', compact('libros'));
    }

    public function filtro(){
        $autores = Autor::get();
        return view('libros.filtro', compact('autores'));
    }


    public function resultado(Request $request){
        $autor = Autor::findOrFail($request->get('autor'));
        return view('libros.listadofiltro', compact('autor'));
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {

        $autores = Autor::get();
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('id', 'libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libroAModificar = Libro::findOrFail($id);
        $libroAModificar->titulo = $request->get('titulo');
        $libroAModificar->editorial = $request->get('editorial');
        $libroAModificar->precio = $request->get('precio');
        $libroAModificar->autor_id = $request->get('autor');
        $libroAModificar->save();

        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { {
            Libro::findOrFail($id)->delete();
            //$libros = Libro::get();
            return redirect()->route('libros.index');
        }
    }



    
}
