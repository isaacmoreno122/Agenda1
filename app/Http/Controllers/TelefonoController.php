<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefono;
use App\Models\Persona;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $telefonos = Telefono::all();
        return view ('Telefono.index')->with('telefonos',$telefonos);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //

        $idPersona= $id;
        
        return view ('Telefono.create')->with('id', $idPersona);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $telefono = new Telefono();
        
    //    $telefono->idpersona= $request ->get('idpersona');
       $telefono->idpersona = $request->get('idpersona');
       $telefono->telefono=$request->get('telefono');
        

        $telefono->save();
        

         return redirect ('/personas');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $telefonos = Telefono::all();
        $idPersona = $id;
        return view ('Telefono.index')->with('telefonos',$telefonos)->with('idPersona', $idPersona);

        


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Telefono::find($id);


        return view('telefono.edit')->with('editarRegistro',$editarRegistro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $editarRegistro=Telefono::find($id);
        
        $editarRegistro->idpersona=$request->get('idpersona');
        
        $editarRegistro->telefono=$request->get('telefono');
        
        

        
        $editarRegistro->Save();

        return redirect('personas');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro2 = Telefono::find($id);
        $eliminarRegistro2->delete();

        return redirect ('personas');
    }
    public function eliminar(string $id)
    {
        $eliminarRegistro2 = Telefono::find($id);

        return view ('Telefono.eliminar')->with('eliminarRegistro2',$eliminarRegistro2);

    }
}
