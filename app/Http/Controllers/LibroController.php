<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros['libros'] = libro::paginate(10);
        // $libros = libro::paginate(10);
        // return view('libro.index', [ 'data' => libro::all()  ]);


        // return view('libro.index', [ 'libros' => $libros ]);
        return view('libro.index', $libros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate();
        $data = $request->all();
        // dd($request->file('imagen')->guessExtension());
        // dd($request->file('imagen')->getClientOriginalName());
        // dd($request->file('imagen'));

        if($request->hasFile('imagen')){

                $data['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        libro::create($data);


        # mostrar en JSON (Navegador o en POSTMAN)
        // return response()->json($data);

        return redirect()->route('libro.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libro $libro)
    {
        //
    }
}
