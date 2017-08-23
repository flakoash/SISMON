<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    public function privilegios()
    {
        return $this->belongsToMany('Privilegio');
    }
    public function user_rols()
    {
        return $this->hasMany('Rol');
    }
}
