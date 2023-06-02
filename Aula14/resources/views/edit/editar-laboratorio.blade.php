@extends('components.layout')

@section('conteudo')
<h1>O id é: {{$laboratorio->idLaboratorio}}</h1>

<form action="/laboratorio" method="post">
    {{csrf_field()}} 
    
    <div>                    
        <input type="text" name="txLaboratorio" value="{{$laboratorio->Laboratorio}}"/>
    </div>
                                        
    <div>
        <button type="submit"> Salvar </button>
    </div>                  
</form>      
@endsection        