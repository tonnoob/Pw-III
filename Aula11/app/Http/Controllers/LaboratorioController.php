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
        $laboratorio -> idLab = $request ->txIdLab;
        $laboratorio -> Lab = $request -> txLab;

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
    public function destroy($idLab)
    {
        $laboratorio = new Laboratorio();
        $laboratorio->where('idLab','=',$idLab)->delete();
        return redirect('/laboratorio');
    }

    public function reclamacaoLista()
    {
        $reclamacoes = Reclamacao::all();
        //$contatos = Contato::where('email','=','maria@gmail.com')->get();
        
        return view('reclamacao',compact('reclamacoes'));

        /*
        foreach($contatos as $c){
            echo $c->nome;
        }
        */
    }


    public function allReclamacoes(){
        $reclamacoes = Reclamacao::all();      
        return $reclamacoes;
    }
}