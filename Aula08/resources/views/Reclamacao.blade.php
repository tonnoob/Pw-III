<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<body>

    <form action="/reclamacao" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txPc" placeholder="Pc"/>
        <input type="text" name="txTitulo" placeholder="Titulo" />
        <input type="text" name="txDescricao" placeholder="Descricao" />
        <input type="text" name="txDtCriacao" placeholder="DtCriacao" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($reclamacoes as $r)        
        <p>
        {{$r->idRec}}
        {{$r->pc}}
        {{$r->titulo}}
        {{$r->descricao}}
        {{$r->dtCriacao}}
        <a href="/reclamacao/excluir/{{$c->idRec}}"> Excluir </a>
        </p>
    @endforeach
    
</body>
</html>
