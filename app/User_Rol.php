<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Rol extends Model
{
    //
    public function users()
    {
        return $this->belongsTo('User');
    }
    public function rols()
    {
        return $this->belongsTo('Rol');
    }
}
