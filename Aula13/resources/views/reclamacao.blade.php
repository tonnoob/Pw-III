@extends('components.layout')

@section('conteudo')
<h1>Reclamação</h1>    

    <form action="/reclamacao" method="post">    

        {{csrf_field()}} 
        <select name="idLaboratorio">
        @foreach($laboratorios as $l)
        <option value="{{$l->idLaboratorio}}"> {{$l->Laboratorio}}  </option>    
        @endforeach    
        </select>  

        {{csrf_field()}} 
        <select name="idPc">
        @foreach($pcs as $p)
        <option value="{{$p->idPc}}"> {{$p->Pc}}  </option>    
        @endforeach    
        </select>  
        
        <input type="text" name="txTitulo" placeholder="Título" />
        <input type="text" name="txDescricao" placeholder="Descrição" />
        <input type="text" name="txDtCriacao" placeholder="Data de Criação" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($reclamacoes as $r)        
        <p>
        {{$r->idRec}}
        {{$r->idLaboratorio}}
        {{$r->idPc}}
        {{$r->titulo}}
        {{$r->descricao}}
        {{$r->dtCriacao}}
        <a href="/reclamacao/excluir/{{$r->idRec}}"> Excluir </a>
        </p>
    @endforeach

    @endsection
