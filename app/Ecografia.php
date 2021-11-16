<?php

namespace App;

use Diagnostico;
use Illuminate\Database\Eloquent\Model;

class Ecografia extends Model
{

    protected $table = "ecografias";
    public function diagnosticos()
    {

        return $this->hasMany(Diagnostico::class);
    }
   
    public function citas()
    {

        return $this->hasMany(Cita::class);
    }
    
    
    
}
