<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
    //
    protected $table = "prestacions";
    public function citas()
    {

        return $this->hasMany(Cita::class);
    }
}
