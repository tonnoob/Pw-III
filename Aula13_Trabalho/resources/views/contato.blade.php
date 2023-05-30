@extends('components.layout')

@section('conteudo')
<link rel="stylesheet" href="{{url('css/styled_ctt.css')}}">
<h1>Contato</h1>

<form action="/contato" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txNome" placeholder="Nome"/>
        <input type="text" name="txEmail" placeholder="E-mail" />
        <input type="text" name="txAssunto" placeholder="Assunto" />
        <input type="text" name="txMensagem" placeholder="Mensagem" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($contatos as $c)        
        <p>
        {{$c->idContato}}
        {{$c->nome}}
        {{$c->email}}
        {{$c->assunto}}
        {{$c->mensagem}}
        <a href="/contato/excluir/{{$c->idContato}}"> Excluir </a>
        </p>
    @endforeach

    <select name="selContato">
    @foreach($contatos as $c)
    <option value="{{$c->idContato}}"> {{$c->nome}}  </option>    
    @endforeach
    </select>

    @endsection