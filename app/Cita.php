<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    protected $table = "citas";
    public function paciente()
    {

        return $this->belongsTo(Paciente::class);
    }
    public function ecografia()
    {

        return $this->belongsTo(Ecografia::class);
    }
    public function prestacion()
    {

        return $this->belongsTo(Prestacion::class);
    }
    
   
}
