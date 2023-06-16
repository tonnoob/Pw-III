@extends('components.layout')

@section('conteudo')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('css/styled_ctt.css')}}">

<h1 class="text-center" >Contato</h1>

    <form action="/contato" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txNome" placeholder="Nome"/>
        <input type="text" name="txEmail" placeholder="E-mail" />
        <input type="text" name="txAssunto" placeholder="Assunto" />
        <input type="text" name="txMensagem" placeholder="Mensagem" />
        <br>
        <input type="submit" value="Salvar" />
    </form>

    <h1 class="text-center">Total de Contatos: {{App\Http\Controllers\ContatoController::allContacts()}}</h1>
    <br>

    <div class="contato-item">
    <h1 class="text-center" >Tabela de Dados</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Nome</th>
                    <th scope="col" class="text-center">E-mail</th>
                    <th scope="col" class="text-center">Assunto</th>
                    <th scope="col" class="text-center">Mensagem</th>
                    <th colspan="2" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contatos as $c)
                <tr>
                    <td class="text-center">{{$c->idContato}}</td>
                    <td class="text-center">{{$c->nome}}</td>
                    <td class="text-center">{{$c->email}}</td>
                    <td class="text-center">{{$c->assunto}}</td>
                    <td class="text-center">{{$c->mensagem}}</td>
                    <td class="text-center"><a href="/contato/excluir/{{$c->idContato}}"> Excluir </a></td>
                    <td class="text-center"><a href="/contato/editar/{{$c->idContato}}"> Editar </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @endsection