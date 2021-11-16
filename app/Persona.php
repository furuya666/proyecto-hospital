<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Paciente;
use User;
class Persona extends Model
{
    protected $table = "personas";
    
    public function users()
    {

        return $this->hasMany(User::class);
    }
    public function pacientes()
    
{

        return $this->hasMany(Paciente::class);
   
 }
 
}
