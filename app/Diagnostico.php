<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    //
    protected $table = "diagnosticos";

    public function ecografia()
    {

        return $this->belongsTo(Ecografia::class);
    }
}
