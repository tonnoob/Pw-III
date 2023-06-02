@extends('components.layout')

@section('conteudo')
<h1>O id é: {{$contato->idContato}}</h1>  

<form action="/contato" method="post">
    {{csrf_field()}} 
    
    <div>                    
        <input type="text" name="txNome" value=  "{{$contato->nome}}"/>
        <input type="text" name="txEmail" value=  "{{$contato->email}}"/>
        <input type="text" name="txAssunto" value=  "{{$contato->assunto}}"/>
        <input type="text" name="txMensagem" value=  "{{$contato->mensagem}}"/>
    </div>
                                        
    <div>
        <button type="submit"> Salvar </button>
    </div>                  
</form>      
@endsection        