<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    //
    // Privilegio __belongs_to_many__ Rol
    public function rols()
    {
        return $this->belongsToMany('Rol');
    }
}
