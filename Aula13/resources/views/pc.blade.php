@extends('components.layout')

@section('conteudo')
<!DOCTYPE html>
<html>
<head>
    <title>Pcs</title>
    <link rel="stylesheet" href="{{url('css/styled_pc.css')}}">
</head>
<body>
    <h1>Pcs</h1>

    <form action="/pc" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="txPc">Pc:</label>
            <input type="text" name="txPc" id="txPc" placeholder="Pc" />
        </div>
        <input type="submit" value="Salvar" />
    </form>

    <h1>Total de Computadores: {{App\Http\Controllers\PcController::totaldePcs()}}</h1>

    @foreach($pcs as $p)
        <div class="pc-item">
            <p>
                {{$p->idPc}}
                {{$p->Pc}}
                <a href="/pc/excluir/{{$p->idPc}}"> Excluir </a>
            </p>
        </div>
    @endforeach

</body>
</html>

 @endsection