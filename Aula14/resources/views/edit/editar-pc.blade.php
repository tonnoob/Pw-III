@extends('components.layout')

@section('conteudo')
<h1>O id é: {{$pc->idPc}} </h1>

<form action="/pc" method="post">
    {{csrf_field()}} 
    
    <div>                    
        <input type="text" name="txPc" value="{{$pc->Pc}}"/>
    </div>
                                        
    <div>
        <button type="submit"> Salvar </button>
    </div>                  
</form>      
@endsection        