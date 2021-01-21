<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
use Illuminate\Support\Facades\Log;
use Exception;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Sacamos todas las incidencias
        $incidencias = Incidencia::all();

        //Sesión para llevar contador de visitas de la url /incidencias
        if (session()->has('visitasIncidencia')) {
            $cont = session('visitasIncidencia', 'default');
            $cont++;
            session(['visitasIncidencia' => $cont]);
        } else {
            session(['visitasIncidencia' => 0]);
        }
        
        //Pintamos la vista incidencias con las incidencias y el contador
        return view('incidencias', [ 'incidencias' => $incidencias, 
                                     'contador' => session('visitasIncidencia') ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidencia.nuevo')->with('mensaje','Nueva incidencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        echo "<h1>Store</h1>";
        echo $request->path()."<br>";
        echo $request->url()."<br>";
        echo $request->ip()."<br>";

        if ($request->has(['latitud', 'longitud','estado'])) {
            echo ($request->input('latitud'));
            echo ($request->input('longitud'));
            echo $request->estado;
        }
        */

        //Validación de los datos del formulario
        $validated = $request->validate([
            'latitud' => 'required|numeric|digits_between:0,360',
            'longitud' => 'required|numeric|digits_between:0,360',
            'estado' => 'required',
            'foto' => 'required|file|image|mimes:jpg,png',
        ]);

        try {
            //Insertar en BD a través de ELOQUENT
            $incidencia = new Incidencia;
            $incidencia->latitud = $request->latitud;
            $incidencia->longitud = $request->longitud;
            $incidencia->ciudad = $request->ciudad;
            $incidencia->direccion = $request->direccion;
            $incidencia->etiqueta = $request->etiqueta;
            $incidencia->descripcion = $request->descripcion;
            $incidencia->estado = $request->estado;
            $incidencia->save();
        } catch (Exception $e) {
            Log::error("Error en BD insertando incidencia ".$e->getMessage());
            return "ERROR";
        }

        Log::info("Insertada incidencia");

        //Subir un archivo y grabarlo en nuestro disco. Carpeta storage
        $path = $request->foto->storeAs('images','incidencia'.$incidencia->id.'.png');
        
        //Creamos una cookie en el cliente
        return response('Incidencia')->cookie(
            'incidencia', 'hola mundo', 3
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return view('incidencia.profile', [
            'incidencia' => Incidencia::findOrFail($id)
        ]);
        
        
        /*
        //Devuelve el modelo, o sea, la incidencia en JSON 
        $incidencia = Incidencia::findOrFail($id);
        return $incidencia;
        */
        
        /*
        return response($incidencia)
            ->header('Content-Type', 'application/json');
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
