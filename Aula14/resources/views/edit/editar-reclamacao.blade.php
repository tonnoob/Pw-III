@extends('components.layout')

@section('conteudo')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/css-edit/styled_edit-rec.css')}}">

    <h1>Página de Edição</h1>

    <form role="form" class="text-start" action="/reclamacao/update/{{$reclamacao->idRec}}" method="post" class="styled-form">
        {{csrf_field()}}

    <h1 class="id-text">O id é: {{$reclamacao->idRec}}</h1>

        <div class="form-group">
            <label for="idLaboratorio">Selecione o Laboratório:</label>
            <select name="idLaboratorio" id="idLaboratorio" class="form-control">
                @foreach($laboratorios as $laboratorio)
                    <option value="{{$laboratorio->idLaboratorio}}" 
                    @if($reclamacao->idLaboratorio == $laboratorio->idLaboratorio) 
                    selected @endif>{{$laboratorio->Laboratorio}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idPc">Selecione o Computador:</label>
            <select name="idPc" id="idPc" class="form-control">
                @foreach($pcs as $pc)
                    <option value="{{$pc->idPc}}" 
                    @if($reclamacao->idPc == $pc->idPc) 
                    selected @endif>{{$pc->Pc}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="txTitulo">Insira o Título:</label>
            <input type="text" name="txTitulo" value="{{$reclamacao->titulo}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="txDescricao">Insira a Descrição:</label>
            <input type="text" name="txDescricao" value="{{$reclamacao->descricao}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="txDtCriacao">Data de Criação:</label>
            <input type="date" name="txDtCriacao" value="{{$reclamacao->dtCriacao}}" class="form-control">
        </div>

        <div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/reclamacao" class="btn btn-danger">Cancelar</a>
        </div>
        
    </form>
@endsection
