<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li><a href="/">Principal</a></li>
        <li><a href="/quemsomos">Quem Somos</a></li>
        <li><a href="/reclamacao">Reclamacao</a></li>
        <li><a href="/laboratorio">Laboratorios</a></li>
    </ul>
    
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

</body>
</html>