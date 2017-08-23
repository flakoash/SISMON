@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Notificaciones</div>

                    <div class="panel-body">
                    
                       <table class="table table-bordered table-condensed table-hover" id="sort" style="font-size: 13px;"> 
                            <thead> 
                               <tr class="text-center"> 
                                <th><strong>#</strong></th>
                                <th><strong>Modulo</strong></th>
                                <th><strong>Url</strong></th>
                                <th><strong>Padre</strong></th>
                                <th><strong>Posicion</strong></th>
                                <th><strong>activo</strong></th>   
                                <th><strong>Modificar</strong></th>   
                                <th><strong>Eliminar</strong></th>   
                               </tr> 
                             </thead> 
                        <tbody>
    	
                        @foreach($actividades as $actividad)
                        	<tr>
                        		<td> {{$actividad->id}}</td>
                        		<td> {{$actividad->modulo}}</td>
                        		<td> {{$actividad->url}}</td>
                        		<td> {{$actividad->padre_id}}</td>
                        		<td> {{$actividad->posicion}}</td>
                        		<td> {{$actividad->activo}}</td>
                        		<td><button type="button" class="btn btn-info">Modificar</button> </td>
                        		<td> <button type="button" class="btn btn-danger">Eliminar</button></td>


                        	</tr>
                        @endforeach
                        </tbody>
                     	</table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection