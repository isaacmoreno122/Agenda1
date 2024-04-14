<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Correo;

class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $correos = Correo::all();
        return view ('Correo.index')->with('correos',$correos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        //
        $idPersona= $id;
        
        return view ('Correo.create')->with('id', $idPersona);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $correo = new Correo();
        
        
           $correo->idpersona = $request->get('idpersona');
           $correo->correo=$request->get('correo');
            
    
            $correo->save();
            
    
             return redirect ('/personas');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $correos = Correo::all();
        $idPersona = $id;
        return view ('Correo.index')->with('correos',$correos)->with('idPersona', $idPersona);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editarRegistro=Correo::find($id);


        return view('Correo.edit')->with('editarRegistro',$editarRegistro);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editarRegistro=Correo::find($id);
        
        $editarRegistro->idpersona=$request->get('idpersona');
        
        $editarRegistro->correo=$request->get('correo');
        
        

        
        $editarRegistro->Save();

        return redirect('personas');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro2 = Correo::find($id);
        $eliminarRegistro2->delete();

        return redirect ('personas');
    }
    public function eliminar(string $id)
    {
        $eliminarRegistro2 = Correo::find($id);

        return view ('Correo.eliminar')->with('eliminarRegistro2',$eliminarRegistro2);

    }
}
