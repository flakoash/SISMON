<?php

namespace App\Http\Controllers;

use App\Privilegio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Rol as Rol;
use \App\Rol_Privilegio as Rol_Privilegio;
use \App\User_Rol as User_Rol;


class Menu extends Controller
{
    //
    public function getPrivilegios(){
        $privilegios = $this->privilegio();
        return view(('menu'),compact('privilegios'));
    }

    
    public function showActividades(){
        $privilegios = $this->privilegio();
        $actividades = Privilegio::all();
        return view(('actividades'),compact('privilegios','actividades'));
    }


    function privilegio(){
         $id = Auth::id();
        //print_r($id);
        $ur = User_Rol::where('user_id', $id)
            ->get();
        //echo $ur[0]->rol_id;

        $rol = Rol::where('id',$ur[0]->rol_id)->get();
        //echo $rol[0]->id;
        $rp = Rol_Privilegio::where('rol_id',$rol[0]->id)->pluck('privilegio_id');
        //echo $rp;

        $privilegios = Privilegio::whereIn('id',$rp)->get();
        return $privilegios;
    }
}
