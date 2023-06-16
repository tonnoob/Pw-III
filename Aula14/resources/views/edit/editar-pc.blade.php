@extends('components.layout')

@section('conteudo')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/css-edit/styled_edit-pc.css')}}">

    <h1>Página de Edição</h1>

    <form role="form" class="text-start" action="/pc/update/{{$pc->idPc}}" method="post" class="styled-form">
        {{csrf_field()}}

        <h1 class="id-text">O id é: {{$pc->idPc}}</h1>

        <div class="form-group">
            <label for="txPc">Insira o Computador:</label>
            <input type="text" name="txPc" value="{{$pc->Pc}}" class="form-control">
        </div>

        <div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/pc" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
