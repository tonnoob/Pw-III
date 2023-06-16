<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //colocar o nome da tabela do banco
    protected $table = "tbContato";
    
    protected $primaryKey = 'idContato';

    //campos da minha tabela
    protected $fillable = ['idContato','nome','email','assunto','mensagem'];

    public $timestamps=false;

}
