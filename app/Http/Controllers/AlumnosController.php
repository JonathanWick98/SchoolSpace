<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['alumnos'] = Alumnos::paginate();
        return view('alumnos.Index', $datos);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosAlumno=$request->all();
        $datosAlumno = $request->except('_token');

        if($request->hasFile('Foto')){
            $datosAlumno['Foto']=$request->file('Foto')->store('uploads','public');
            
        }

        Alumnos::insert($datosAlumno);

        return response()->json($datosAlumno);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $alumno = Alumnos::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
            

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Alumnos::destroy($id);

        //return redirect("Alumnos");
        return redirect()->route('alumnos.index');

    }

    
}
