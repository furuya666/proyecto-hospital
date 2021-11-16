<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table="pacientes";
    public function persona()
    {

        return $this->belongsTo(Persona::class);
    }
    public function citas()
    {

        return $this->belongsTo(Cita::class);
    }
    
    
    
}
