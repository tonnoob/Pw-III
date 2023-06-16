<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    protected $table="tbPc";
    protected $primaryKey = 'idPc';

    //campos da minha tabela
    protected $fillable = ['idPc','Pc'];

    public $timestamps=false;
}
