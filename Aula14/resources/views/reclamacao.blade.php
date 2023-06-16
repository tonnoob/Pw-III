@extends('components.layout')

@section('conteudo')
    <title>Reclamação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/styled_rec.css')}}">

    <h1>Reclamação</h1>

    <form action="/reclamacao" method="post">    
        {{csrf_field()}} 
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
            <label for="idPc">Selecione o Computador:</label>
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
        <input type="submit" value="Salvar" />
    </form>

    <h1>Total de Reclamações: {{App\Http\Controllers\ReclamacaoController::allClaims()}}</h1>
    <br>

    <div class="reclamacao-item">
        <h1>Tabela de Dados</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ID Reclamação</th>
                    <th scope="col" class="text-center">ID Laboratório</th>
                    <th scope="col" class="text-center">ID Pc</th>
                    <th scope="col" class="text-center">Título</th>
                    <th scope="col" class="text-center">Descrição</th>
                    <th scope="col" class="text-center">Data De Criação</th>
                    <th colspan="2" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reclamacoes as $r)
                <tr>
                    <td class="text-center">{{$r->idRec}}</td>
                    <td class="text-center">{{$r->idLaboratorio}}</td>
                    <td class="text-center">{{$r->idPc}}</td>
                    <td class="text-center">{{$r->titulo}}</td>
                    <td class="text-center">{{$r->descricao}}</td>
                    <td class="text-center">{{date('d/m/Y',strtotime($r->dtCriacao))}}</td>
                    <td class="text-center"><a href="/reclamacao/excluir/{{$r->idRec}}"> Excluir </a></td>
                    <td class="text-center"><a href="/reclamacao/editar/{{$r->idRec}}"> Editar </a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @endsection
