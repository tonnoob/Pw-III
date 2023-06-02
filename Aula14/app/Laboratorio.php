<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table="tbLaboratorio";

    //campos da minha tabela
    protected $fillable = ['idLaboratorio','Laboratorio'];

    public $timestamps=false;
}