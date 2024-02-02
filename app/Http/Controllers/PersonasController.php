<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\Comunidades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    
    public function index()
    {
        //Inicio de la pagina
        return view ('inicio');
        
    }


    public function create()
    {
        //Método para agregar datos
        $comunidades = Comunidades::all();
        return view ('agregar',compact('comunidades'));
        
        
    }

   
    public function store(Request $request)
    {
        //Guarda datos en la base de datos (BD)
        //objeto para inicializar
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->apellido = $request->post('apellido');
        $personas->genero = $request->post('genero');
        $personas->comunidad_id = $request->post('comunidad_id');
        $personas->correo_electronico = $request->post('correo_electronico');
        $personas->documento = $request ->post('documento');
        $personas->edad = $request ->post('edad');
        $personas->telefono = $request ->post ('telefono');
        //Método para guardar
        $personas->save();

        //Retorno 
        return redirect()->route("personas.index")->with("success", "Registro agregado con exito!");

    }

    
    public function show(Personas $personas)
    {
        //Mostrar todos los datos de la tabla
        $datos = Personas::all();
        $comunidades = Comunidades::all();
        
        return view ('mostrarRegistros', compact('datos','comunidades'));
    }

    
    public function edit($id)
    {
        //Trae los datos que se van a editar y los coloca en un formulario
        $personas = Personas::find($id);
        $comunidades = Comunidades::all();
        return view ('editarRegistro', compact('personas', 'comunidades'));
    }

   
    public function update(Request $request, $id)
    {
        //Edita los datos en la BD
        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->apellido = $request->post('apellido');
        $personas->genero = $request->post('genero');
        $personas->comunidad_id = $request->post('comunidad_id');
        $personas->correo_electronico = $request->post('correo_electronico');
        $personas->documento = $request ->post('documento');
        $personas->edad = $request ->post('edad');
        $personas->telefono = $request ->post ('telefono');
        //Método para guardar
        $personas->save();

        //Retorno.
        return redirect()->route("personas.index")->with("success", "Registro editado con exito!");
    }

    
    public function destroy($id)
    {
        //Elimina un registro
        //Trae los datos que se van a editar y los coloca en un formulario
        $personas = Personas::find($id);
        return view ('eliminar', compact('personas'));
        
        

    }

    public function delete($id)
    {
        $personas = Personas::find($id);
        $personas->delete();
        //Retorno 
        return redirect()->route("personas.index")->with("success", "Registro eliminado con exito!");
    }

    public function search($id)
    {
        //buscar comunidad he info
        //
        
        $comunidades = Comunidades::find($id);
        return view('buscarComunidad', compact('comunidades'));
        

        
    }


    public function showInfo($id) 
    {
        //buscar personas en la comunidad indicada
        $personas = Personas::where('comunidad_id', '=',$id)->get();
        $comunidades = Comunidades::all();

        return view('reportesDatos', ['datos' => $personas], compact('personas', 'comunidades'));
    }

}
