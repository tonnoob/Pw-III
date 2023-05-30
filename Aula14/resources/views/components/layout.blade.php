<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/styled_header.css')}}">
</head>
<body>
    <header>
        <ul>
            <li><a href="/">Principal</a></li>
            <li><a href="/reclamacao">Reclamação</a></li>
            <li><a href="/laboratorio">Laboratório</a></li>
            <li><a href="/pc">Pc</a></li>
            <li><a href="/viacep">Buscar CEP</a></li>
            <li><a href="/contato">Contato</a></li>
            <li><a href="/quemsomos">Quem Somos</a></li>
            <li><a href="/grafico">Veja também nosso gráfico</a></li>
        </ul>
    </header>

    @yield('conteudo')
    
</body>
</html>
