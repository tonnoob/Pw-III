<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamacao extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbReclamacao";

    //campos da minha tabela
    protected $fillable = ['idRec','idLab','pc','titulo','descricao', 'dtCriacao'];
     
    public $timestamps=false;
}
