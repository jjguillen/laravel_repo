<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Models\Incidencia;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$empleados = Empleado::all();
        $empleados = Empleado::where('erte',false)->orderBy('nombre')->paginate(7);
        return view('empleados', ['empleados' => $empleados ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.nuevo')->with('mensaje','Nuevo empleado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado;
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->dni = $request->dni;
        $empleado->direccion = $request->direccion;
        $empleado->ciudad = $request->ciudad;
        $empleado->cargo = $request->cargo;
        $empleado->erte = $request->erte;
        $empleado->save();

        return redirect()->action(
            [EmpleadoController::class, 'index']
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleado.profile', [
            'empleado' => $empleado
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleado.editar')->with('mensaje','Modificar empleado')
                                      ->with('empleado',$empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->dni = $request->dni;
        $empleado->direccion = $request->direccion;
        $empleado->ciudad = $request->ciudad;
        $empleado->cargo = $request->cargo;
        $empleado->erte = $request->erte;
        $empleado->save();

        return redirect()->action(
            [EmpleadoController::class, 'index']
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->action(
            [EmpleadoController::class, 'index']
        );
    }

    public function incidenciasCerradas(Empleado $empleado) {
        //Ojo que si queremos seguir encadenando métodos hay que poner los paréntesis
        //Sino, hay que quitarlos
        $incidencias = $empleado->incidencias_cerradas()->paginate(7);

        return view('incidencias', [ 'incidencias' => $incidencias ]);


    }

    public function asignarEmpleados($incidencia) {
        $empleados = Empleado::all();
        return view('empleados_asig', ['empleados' => $empleados,
                                       'incidencia' => $incidencia ]);
    }

    public function asignarEmpleadosIncidencia($empleado, $incidencia) {
        $empleado = Empleado::find($empleado);
        $incidencia = Incidencia::find($incidencia);
        $empleado->incidencias_abiertas()->save($incidencia); //Cambia el id de la relación (update)

        return view('incidencia.profile', [
            'incidencia' => $incidencia
        ]);

    }
}
