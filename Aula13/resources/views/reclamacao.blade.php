@extends('components.layout')

@section('conteudo')

<!DOCTYPE html>
<html>
<head>
    <title>Reclamação</title>
    <link rel="stylesheet" href="{{url('css/styled_rec.css')}}">
</head>
<body>
    <h1>Reclamação</h1>

    <form action="/reclamacao" method="post">    
        {{csrf_field()}} 
        <div class="form-group">
            <label for="idLaboratorio">Laboratório:</label>
            <select name="idLaboratorio" id="idLaboratorio">
                @foreach($laboratorios as $l)
                    <option value="{{$l->idLaboratorio}}"> {{$l->Laboratorio}}  </option>    
                @endforeach    
            </select>  
        </div>

        {{csrf_field()}} 
        <div class="form-group">
            <label for="idPc">PC:</label>
            <select name="idPc" id="idPc">
                @foreach($pcs as $p)
                    <option value="{{$p->idPc}}"> {{$p->Pc}}  </option>    
                @endforeach    
            </select>  
        </div>
        
        <div class="form-group">
            <label for="txTitulo">Título:</label>
            <input type="text" name="txTitulo" id="txTitulo" placeholder="Título" />
        </div>

        <div class="form-group">
            <label for="txDescricao">Descrição:</label>
            <input type="text" name="txDescricao" id="txDescricao" placeholder="Descrição" />
        </div>

        <div class="form-group">
            <label for="txDtCriacao">Data de Criação:</label>
            <input type="date" name="txDtCriacao" id="txDtCriacao" placeholder="Data de Criação" />
        </div>

        <input type="submit" value="Salvar" />
    </form>

    <h1>Total de Reclamações: {{App\Http\Controllers\ReclamacaoController::allClaims()}}</h1>

    @foreach($reclamacoes as $r)        
        <div class="reclamacao-item">
            <p>
                {{$r->idRec}}
                {{$r->idLaboratorio}}
                {{$r->idPc}}
                {{$r->titulo}}
                {{$r->descricao}}
                {{date('d/m/Y',strtotime($r->dtCriacao))}}
                <a href="/reclamacao/excluir/{{$r->idRec}}"> Excluir </a>
            </p>
        </div>
    @endforeach
</body>
</html>

    @endsection
