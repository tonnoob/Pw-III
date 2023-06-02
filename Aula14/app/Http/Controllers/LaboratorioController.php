<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorio;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('laboratorio',compact('laboratorios'));
    }

    public static function totaldeLaboratorios(){
        $laboratorios = Laboratorio::all()->count();
        return $laboratorios;
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratorio = new Laboratorio();
        $laboratorio -> idLaboratorio = $request ->txIdLab;
        $laboratorio -> Laboratorio = $request -> txLab;

        $laboratorio -> save();

        return redirect('/laboratorio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idLaboratorio)
    {   
        $laboratorio = Laboratorio::where('idLaboratorio','=',$idLaboratorio)->first();        
        return view('edit.editar-laboratorio',compact('laboratorio'));        
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
    public function destroy($idLaboratorio)
    {
        $laboratorio = new Laboratorio();
        $laboratorio->where('idLaboratorio','=',$idLaboratorio)->delete();
        return redirect('/laboratorio');
    }

    public function LaboratorioLista()
    {
        $laboratorios = Laboratorio::all();
        
        return view('laboratorio',compact('laboratorios'));
    }

    public function allLaboratories(){
        $laboratorios = Laboratorio::all();      
        return $laboratorios;
    }
}