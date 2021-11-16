<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_Clinico extends Model
{
    //
    protected $table = "historial_clinicos";
    
    public function paciente()
    {

        return $this->belongsTo(Paciente::class);
    }
    
    
}
