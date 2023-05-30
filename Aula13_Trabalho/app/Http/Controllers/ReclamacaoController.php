<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamacao;
use App\Laboratorio;
use App\Pc;

class ReclamacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamacoes = Reclamacao::all();
        $laboratorios = Laboratorio::all();
        $pcs = Pc::all();
        
        $reclamacao = Reclamacao::orderBy('dtCriacao', 'ASC')->get();
        return view('Reclamacao', compact('reclamacoes','laboratorios', 'pcs'));
    }

    public static function allClaims(){
        $reclamacoes = Reclamacao::all()->count();
        return $reclamacoes;
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
        $reclamacao = new Reclamacao();
        $reclamacao -> idPc = $request -> idPc;
        $reclamacao -> titulo = $request -> txTitulo;
        $reclamacao -> descricao = $request -> txDescricao;
        $reclamacao -> dtCriacao = $request -> txDtCriacao;
        $reclamacao -> idLaboratorio = $request -> idLaboratorio;

        $reclamacao -> save();

        return redirect('/reclamacao');
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
    public function destroy($idRec)
    {
        $reclamacao = new Reclamacao();
        $reclamacao->where('idRec','=',$idRec)->delete();
        return redirect('/reclamacao');
    }

    public function reclamacaoLista()
    {
        $reclamacoes = Reclamacao::all();
   
        return view('reclamacao',compact('reclamacoes'));
    }
}
