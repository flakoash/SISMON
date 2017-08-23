<?php

namespace App\Http\Controllers;

use App\Privilegio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\Rol as Rol;
use \App\Rol_Privilegio as Rol_Privilegio;
use \App\User_Rol as User_Rol;
use \App\actividads;
use \App\objetivos;
use \App\objetivo_esps;
use \App\unidads;
use \App\areas;
use \App\indicadors;

class POMController extends Controller
{

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

    function get_unidad(){
         $id = Auth::id();
        //print_r($id);
        $ur = User_Rol::where('user_id', $id)
            ->get();
        //echo $ur[0]->rol_id;

        $unidad = $ur[0]->unidad_id;


        return $unidad;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $privilegios = $this->privilegio();
        $unidad = $this->get_unidad(); 
        $actividades = DB::select( DB::raw("SELECT a.id, a.cod_act, a.descripcion, a.producto, a.cantidad, a.medios_ver, a.observacion, a.m1, a.m2, a.m3, a.m4, a.m5, a.m6, a.m7, a.m8, a.m9, a.m10, a.m11, a.m12, b.descripcion as unidad, c.descripcion as indicador FROM actividads a, unidads b, indicadors c where unidad_id = :var1 and a.indicador_id = c.id and a.unidad_id = b.id") , array(
           'var1' => $unidad,
         ));
        return view(('POA.index'),compact('privilegios','actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $privilegios = $this->privilegio();
        $objetivos = objetivos::all();
        $areas = areas::all();
        $indicadores = indicadors::all();
        $unidades = unidads::all();
        $objetivo_esps = objetivo_esps::all();
        return view(('POA.create'),compact('privilegios','objetivos','objetivo_esps','areas','indicadores','unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $actividadnueva = new actividads;
        $actividadnueva->objetivo_id = $request['objetivo'];
        $actividadnueva->objetivo_esp_id = $request['objetivo_esp'];
        $actividadnueva->cod_act = $request['cod_act'];
        $actividadnueva->unidad_id = $request['unidad'];
        $actividadnueva->area_id = $request['area'];
        $actividadnueva->indicador_id = $request['indicador'];
        $actividadnueva->descripcion = $request['descripcion'];
        $actividadnueva->producto = $request['producto'];
        $actividadnueva->medios_ver = $request['medios_ver'];
        $actividadnueva->cantidad = $request['cantidad'];
        $actividadnueva->m1 = $request['m1'];
        $actividadnueva->m2 = $request['m2'];
        $actividadnueva->m3 = $request['m3'];
        $actividadnueva->m4 = $request['m4'];
        $actividadnueva->m5 = $request['m5'];
        $actividadnueva->m6 = $request['m6'];
        $actividadnueva->m7 = $request['m7'];
        $actividadnueva->m8 = $request['m8'];
        $actividadnueva->m9 = $request['m9'];
        $actividadnueva->m10 = $request['m10'];
        $actividadnueva->m11 = $request['m11'];
        $actividadnueva->m12 = $request['m12'];
        $actividadnueva->observacion = $request['observacion'];
        $actividadnueva->user_id = Auth::id();
        $actividadnueva->save();
        /*
        $actividades = actividads::all();
        $privilegios = $this->privilegio();
        return view(('POA.index'),compact('privilegios','actividades'));*/
        return redirect()->route('listPOA');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $actividad= actividads::find($id);
        $privilegios = $this->privilegio();
        $objetivos = objetivos::all();
        $areas = areas::all();
        $indicadores = indicadors::all();
        $unidades = unidads::all();
        $objetivo_esps = objetivo_esps::all();
        return view(('POA.modificar'),compact('privilegios','actividad','objetivos','objetivo_esps','areas','indicadores','unidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $actividad=actividads::find($id);
        $actividad->objetivo_id = $request['objetivo'];
        $actividad->objetivo_esp_id = $request['objetivo_esp'];
        $actividad->cod_act = $request['cod_act'];
        $actividad->unidad_id = $request['unidad'];
        $actividad->area_id = $request['area'];
        $actividad->indicador_id = $request['indicador'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->producto = $request['producto'];
        $actividad->medios_ver = $request['medios_ver'];
        $actividad->cantidad = $request['cantidad'];
        $actividad->m1 = $request['m1'];
        $actividad->m2 = $request['m2'];
        $actividad->m3 = $request['m3'];
        $actividad->m4 = $request['m4'];
        $actividad->m5 = $request['m5'];
        $actividad->m6 = $request['m6'];
        $actividad->m7 = $request['m7'];
        $actividad->m8 = $request['m8'];
        $actividad->m9 = $request['m9'];
        $actividad->m10 = $request['m10'];
        $actividad->m11 = $request['m11'];
        $actividad->m12 = $request['m12'];
        $actividad->observacion = $request['observacion'];
        $actividad->save();
        return redirect()->route('listPOA');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $actividad = actividads::find($id);
        $actividad->delete();
        return redirect()->route('listPOA');
    }
}
