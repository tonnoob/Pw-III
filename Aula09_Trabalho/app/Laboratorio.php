<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table="tbLaboratorio";

    //campos da minha tabela
    protected $fillable = ['idLab','Lab'];

    public $timestamps=false;
}