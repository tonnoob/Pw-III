@extends('components.layout')

@section('conteudo')
<link rel="stylesheet" href="{{url('css/style.css')}}">
<h1>Pcs</h1>

    <form action="/pc" method="post">        
            {{csrf_field()}}        
            <input type="text" name="txPc" placeholder="Pc" />
            <input type="submit" value="Salvar" />
        </form>

        @foreach($pcs as $p)        
        <p>
        {{$p->idPc}}
        {{$p->Pc}}
            <a href="/pc/excluir/{{$p->idPc}}"> Excluir </a>
            </p>
        @endforeach

 </body>
 </html>

 @endsection