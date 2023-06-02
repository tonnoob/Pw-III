@extends('components.layout')

@section('conteudo')
<h1>O id é: {{$reclamacao->idRec}}</h1>

<form action="/reclamacao" method="post">
    {{csrf_field()}} 
    
    <div>                    
        <input type="text" name="txLaboratorio" value="{{$laboratorio->Laboratorio}}"/>
    </div>

    ____________________________________________
    <div class="form-group">
            <label for="idLaboratorio">Selecione o Laboratório:</label>
            <select name="idLaboratorio" id="idLaboratorio">
                @foreach($laboratorios as $l)
                    <option value="{{$l->idLaboratorio}}"> {{$l->Laboratorio}}  </option>    
                @endforeach    
            </select>  
        </div>
        {{csrf_field()}} 
        <div class="form-group">
            <label for="idPc">Selecione o Pc:</label>
            <select name="idPc" id="idPc">
                @foreach($pcs as $p)
                    <option value="{{$p->idPc}}"> {{$p->Pc}}  </option>    
                @endforeach    
            </select>  
        </div>
        <div class="form-group">
            <label for="txTitulo">Insira o Título:</label>
            <input type="text" name="txTitulo" id="txTitulo" placeholder="Título" />
        </div>
        <div class="form-group">
            <label for="txDescricao">Insira a Descrição:</label>
            <input type="text" name="txDescricao" id="txDescricao" placeholder="Descrição" />
        </div>
        <div class="form-group">
            <label for="txDtCriacao">Data de Criação:</label>
            <input type="date" name="txDtCriacao" id="txDtCriacao" placeholder="Data de Criação" />
        </div>   
        ____________________________________
        


    <div>
        <button type="submit"> Salvar </button>
    </div>                  
</form>      
@endsection        