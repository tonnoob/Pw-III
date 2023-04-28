<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li><a href="/">Principal</a></li>
        <li><a href="/quemsomos">Quem Somos</a></li>
        <li><a href="/contato">Contatos</a></li>
        <li><a href="/laboratorio">Laboratorios</a></li>
    </ul>

    <form action="/reclamacao" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txPc" placeholder="Pc"/>
        <input type="text" name="txTitulo" placeholder="Título" />
        <input type="text" name="txDescricao" placeholder="Descrição" />
        <input type="text" name="txDtCriacao" placeholder="Data de Criação" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($reclamacoes as $r)        
        <p>
        {{$r->idRec}}
        {{$r->idLab}}
        {{$r->pc}}
        {{$r->titulo}}
        {{$r->descricao}}
        {{$r->dtCriacao}}
        <a href="/reclamacao/excluir/{{$r->idRec}}"> Excluir </a>
        </p>
    @endforeach

</body>
</html>