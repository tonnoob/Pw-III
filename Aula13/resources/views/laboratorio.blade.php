@extends('components.layout')

@section('conteudo')

<!DOCTYPE html>
<html>
<head>
    <title>Laboratórios</title>
    <link rel="stylesheet" href="{{url('css/styled_lab.css')}}">
</head>
<body>
    <h1>Laboratórios</h1>

    <form action="/laboratorio" method="post">        
        {{csrf_field()}}        
        <div class="form-group">
            <label for="txLab">Laboratório:</label>
            <input type="text" name="txLab" id="txLab" placeholder="Laboratório" />
        </div>
        <input type="submit" value="Salvar" />
    </form>

    <h1>Quantidade de Laboratórios: {{App\Http\Controllers\LaboratorioController::totaldeLaboratorios()}}</h1>

    @foreach($laboratorios as $l)        
        <div class="laboratorio-item">
            <p>
                {{$l->idLaboratorio}}
                {{$l->Laboratorio}}
                <a href="/laboratorio/excluir/{{$l->idLaboratorio}}"> Excluir </a>
            </p>
        </div>
        
    @endforeach

</body>
</html>


 @endsection