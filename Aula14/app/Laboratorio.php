<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table="tbLaboratorio";
    protected $primaryKey = 'idLaboratorio';

    //campos da minha tabela
    protected $fillable = ['idLaboratorio','Laboratorio'];

    public $timestamps=false;
}