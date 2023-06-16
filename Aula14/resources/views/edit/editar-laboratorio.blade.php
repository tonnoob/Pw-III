@extends('components.layout')

@section('conteudo')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/css-edit/styled_edit-lab.css')}}">

    <h1>Página de Edição</h1>

    <form role="form" class="text-start" action="/laboratorio/update/{{$laboratorio->idLaboratorio}}" method="post" class="styled-form">
        {{csrf_field()}}

        <h1 class="id-text">O id é: {{$laboratorio->idLaboratorio}}</h1>

        <div class="form-group">
            <label for="txLaboratorio">Insira o Laboratório:</label>
            <input type="text" name="txLaboratorio" value="{{$laboratorio->idLaboratorio}}" class="form-control">
        </div>

        <div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/laboratorio" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
