@extends('components.layout')

@section('conteudo')
<link rel="stylesheet" href="{{url('css/style.css')}}">
<h1>Laboratorios</h1>

    <form action="/laboratorio" method="post">        
            {{csrf_field()}}        
            <input type="text" name="txLab" placeholder="Laboratorio" />
            <input type="submit" value="Salvar" />
        </form>

        @foreach($laboratorios as $l)        
        <p>
        {{$l->idLaboratorio}}
        {{$l->Laboratorio}}
            <a href="/laboratorio/excluir/{{$l->idLaboratorio}}"> Excluir </a>
            </p>
        @endforeach

 </body>
 </html>

 @endsection