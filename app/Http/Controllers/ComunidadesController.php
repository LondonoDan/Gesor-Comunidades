<?php

namespace App\Http\Controllers;

use App\Models\Comunidades;
use App\Models\Personas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComunidadesController extends Controller
{
    
    public function index()
    {
        //inicio
        
    }

    
    public function created()
    {
        //crear
        $personas = Personas::all();
        return view ('agregarComunidad', compact("personas"));
    }

    
    public function stored(Request $request)
    {
        //Guarda datos en la base de datos (BD)
        //objeto para inicializar
        $comunidades = new Comunidades();
        $comunidades->pais = $request->post('pais');
        $comunidades->departamento = $request->post('departamento');
        $comunidades->municipio = $request->post('municipio');
        $comunidades->ubicacion_geografica = $request->post('ubicacion_geografica');
        $comunidades->nombre = $request ->post('nombre');
        
        //Método para guardar
        $comunidades->save();

        //Retorno 
        return redirect()->route("personas.index")->with("success", "Comunidad agregada con exito!");
    }

    
    public function see(Comunidades $comunidades)
    {
        //mostrar las comunidades registradas
        $dato = Comunidades::all();
        return view ('registroComunidades', compact('dato'));
    }

    
    public function edited($id)
    {
        //Editar
        //Trae los datos que se van a editar y los coloca en un formulario
        $comunidades = Comunidades::find($id);
        return view ('editarComunidad', compact('comunidades'));
    }

    
    public function updated(Request $request, $id)
    {
        //Guardar la actualización y datos editados. 
        $comunidades = Comunidades::find($id);
        $comunidades->pais = $request->post('pais');
        $comunidades->departamento = $request->post('departamento');
        $comunidades->municipio = $request->post('municipio');
        $comunidades->ubicacion_geografica = $request->post('ubicacion_geografica');
        $comunidades->nombre = $request->post('nombre');
        //Método para guardar
        $comunidades->save();

        //Retorno.
        return redirect()->route("personas.index")->with("success", "Comunidad editada con exito!");
    }

    
    public function deleted($id)
    {
        //Trae los datos que se van a eliminar y los coloca en un formulario
        $comunidades = Comunidades::find($id);
        return view ('eliminarComunidad', compact('comunidades'));
    }

  



    public function remove($id)
    {
        //Funcion para eliminar el dato completamente
        $comunidades = Comunidades::find($id);
        $comunidades->delete();
        //Retorno 
        return redirect()->route("personas.index")->with("success", "Registro eliminado con exito!");
    }
}
