@extends('components.layout')

@section('conteudo')
<!DOCTYPE html>
<html>
<head>
    <title>Pcs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/styled_pc.css')}}">
</head>
<body>
    <h1>Pc</h1>

    <form action="/pc" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="txPc">Cadastre um novo computador</label>
            <input type="text" name="txPc" id="txPc" placeholder="Ex: Pc (Nº)" />
        </div>
        <input type="submit" value="Salvar" />
    </form>

    <h1>Quantidade de Computadores: {{App\Http\Controllers\PcController::totaldePcs()}}</h1>
    <br>

    <div class="pc-item" >
    <h1>Tabela de Dados</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Computador</th>
                    <th colspan="2" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pcs as $p)
                <tr>
                    <td class="text-center">{{$p->idPc}}</td>
                    <td class="text-center">{{$p->Pc}}</td>
                    <td class="text-center"><a href="/pc/excluir/{{$p->idPc}}"> Excluir </a></td>
                    <td class="text-center"><a href="/pc/editar/{{$p->idPc}}"> Editar </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

 @endsection