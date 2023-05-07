<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos["alumno"]=alumnos::paginate();
        return view('alumnos.index', $datos);
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
        $datoAlumno = request()->except('_token');
        alumnos::insert($datoAlumno);
        return redirect('alumnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $alumno = alumnos::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datoAlumno = request()->except(['_token','_method']);
        alumnos::where('id','=',$id)->update($datoAlumno);
        return redirect('alumnos');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        alumnos::destroy($id);
        return redirect('alumnos');
    }
}
