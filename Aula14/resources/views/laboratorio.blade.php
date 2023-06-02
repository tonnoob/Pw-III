@extends('components.layout')

@section('conteudo')

<!DOCTYPE html>
<html>
<head>
    <title>Laboratórios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/styled_lab.css')}}">
    
</head>
<body>
    <h1>Laboratório</h1>

    <form action="/laboratorio" method="post">        
        {{csrf_field()}}        
        <div class="form-group">
            <label for="txLaboratorio">Cadastre um novo laboratório</label>
            <input type="text" name="txLaboratorio" id="txLaboratorio" placeholder="Ex: Laboratório (Nº)" />
        </div>
        <input type="submit" value="Salvar" />
    </form>

    <h1>Quantidade de Laboratórios: {{App\Http\Controllers\LaboratorioController::totaldeLaboratorios()}}</h1>
    <br>

    <div class="laboratorio-item">
    <h1>Tabela de Dados</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Laboratório</th>
                    <th colspan="2" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($laboratorios as $l)
                <tr>
                    <td class="text-center">{{$l->idLaboratorio}}</td>
                    <td class="text-center">{{$l->Laboratorio}}</td>
                    <td class="text-center"><a href="/laboratorio/excluir/{{$l->idLaboratorio}}"> Excluir </a></td>
                    <td class="text-center"><a href="/laboratorio/editar/{{$l->idLaboratorio}}"> Editar </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>


 @endsection