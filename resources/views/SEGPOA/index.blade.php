@extends('layouts.layout')

@section('content')
      <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de Seguimiento de Actividades</div>

                    <div class="panel-body">
                        <div class="col-md-4 col-md-offset-8"> 
                            <div class="col-md-offset-10">
                                <a href="{{url('SEGPOA/registrar')}}" class="btn btn-success" title="Agregar">
                                    <i class="fa fa-plus" aria-hidden="false"></i>
                                </a> 
                            </div>
                        </div>
                       <table class="table table-bordered table-condensed table-hover" id="sort" style="font-size: 11px;"> 
                            <thead> 
                               <tr class="text-center"> 
                               <th><strong>Unidad</strong></th>
                               <th><strong>#</strong></th>
                                <th><strong>Indicador PMDC</strong></th>
                                <th><strong>Codigo Actividad</strong></th>
                                <th><strong>Descripción</strong></th>
                                <th><strong>Producto</strong></th>   
                                <th><strong>Cantidad</strong></th> 
                                <th><strong>Medios Verificación</strong></th>
                                <th><strong>M1</strong></th>     
                                <th><strong>M2</strong></th>
                                <th><strong>M3</strong></th>
                                <th><strong>M4</strong></th>
                                <th><strong>M5</strong></th>
                                <th><strong>M6</strong></th>
                                <th><strong>M7</strong></th>
                                <th><strong>M8</strong></th>
                                <th><strong>M9</strong></th>
                                <th><strong>M10</strong></th>
                                <th><strong>M11</strong></th>
                                <th><strong>M12</strong></th>
                                <th><strong>Observación</strong></th>

                               </tr> 
                             </thead> 
                             @foreach($actividades as $actividad)
                                <tr>
                                    <td> {{$actividad->unidad}}</td>
                                    <td> {{$actividad->id}}</td>
                                    <td> {{$actividad->indicador}}</td>
                                    <td> {{$actividad->cod_act}}</td>
                                    <td> {{$actividad->descripcion}}</td>
                                    <td> {{$actividad->producto}}</td>
                                    <td> {{$actividad->cantidad}}</td>
                                    <td> {{$actividad->medios_ver}}</td>
                                    <td> {{$actividad->m1}}</td>
                                    <td> {{$actividad->m2}}</td>
                                    <td> {{$actividad->m3}}</td>
                                    <td> {{$actividad->m4}}</td>
                                    <td> {{$actividad->m5}}</td>
                                    <td> {{$actividad->m6}}</td>
                                    <td> {{$actividad->m7}}</td>
                                    <td> {{$actividad->m8}}</td>
                                    <td> {{$actividad->m9}}</td>
                                    <td> {{$actividad->m10}}</td>
                                    <td> {{$actividad->m11}}</td>
                                    <td> {{$actividad->m12}}</td>
                                    <td> {{$actividad->observacion}}</td>
                                    <td><center>
                                            <a href="{{url('SEGPOA/'.$actividad->id)}}" class="btn btn-info" title="Modificar">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </center>
                                    </td>
                                    <td><center>
                                            <a class="btn btn-danger" onclick="eliminar({{$actividad->id}});" title="Eliminar">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </center>
                                    </td>

                                </tr>
                            @endforeach
                        </table> 

                                   </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function eliminar(id) {
            if (confirm('¿Esta seguro que desea borrar este registro de la base de datos?')) {
                window.location.replace("eliminar/"+id);
            } else {
                // Do nothing!
            }
        }
        
    </script>
@endsection