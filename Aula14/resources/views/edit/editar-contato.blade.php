@extends('components.layout')

@section('conteudo')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/css-edit/styled_edit-ctt.css')}}">

    <h1>Página de Edição</h1>    

    <form role="form" class="text-start" action="/contato/update/{{$contato->idContato}}" method="post" class="styled-form">
        {{csrf_field()}}

        <h1 class="id-text">O id é: {{$contato->idContato}}</h1>

        <div class="form-group">
            <label for="txNome">Insira o nome:</label>
            <input type="text" name="txNome" value="{{$contato->nome}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="txEmail">Insira o E-mail:</label>
            <input type="text" name="txEmail" value="{{$contato->email}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="txAssunto">Insira o Assunto:</label>
            <input type="text" name="txAssunto" value="{{$contato->assunto}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="txMensagem">Insira a Mensagem:</label>
            <input type="text" name="txMensagem" value="{{$contato->mensagem}}" class="form-control">
        </div>

        
        <div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="/contato" class="btn btn-danger">Cancelar</a>
        </div>
        
        
    </form>

@endsection
