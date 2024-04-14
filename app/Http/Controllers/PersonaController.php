<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view ('personas.index')->with('personas',$personas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view ('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $persona = new Persona();
        $persona->nombre=$request->get('nombre');
        $persona->apellido=$request->get('apellido');
        $persona->telefono=$request->get('telefono');
        $persona->correo=$request->get('correo');

        $persona->save();
        

         return redirect ('/personas');

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
        //
        $editarRegistro=Persona::find($id);


        return view('personas.edit')->with('editarRegistro',$editarRegistro);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Persona::find($id);
        
        $editarRegistro->nombre=$request->get('nombre');
        
        $editarRegistro->apellido=$request->get('apellido');
        
        $editarRegistro->Telefono=$request->get('Telefono');
       
        $editarRegistro->Correo=$request->get('Correo');

        
        $editarRegistro->Save();

        return redirect('personas');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
