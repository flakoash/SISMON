@extends('layouts.layout')
@section('content')
    
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-8 col-md-offset-2">
            <h1>Crear Seguimiento a la Actividad:</h1>
            <form action="/SEGPOA" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Actividad:</label>
                        <select class="form-control" name="actividad" id ="actividad">
                            @foreach($actividads as $obs)
                                <option value="{{$obs->id}}">{{$obs->descripcion}}</option>
                            @endforeach;
                        </select>
                </div>

               
                <div class="form-group">
                    <label>Codigo Actividad:</label>
                    <input name="cod_act" title='Codigo Actividad' type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descripcion:</label>
                    <input name="descripcion" title='descripcion' type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>Producto:</label>
                    <input name="producto" title='Ingrese una fecha' type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>Medios de Verificacion:</label>
                    <input name="medios_ver" title='Ingrese los medios de verificacion' type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label>Cantidad:</label>
                    <input name="cantidad" title='Ingrese la cantidad' type="number" class="form-control">
                </div>

                <div class="form-group">
                    <label>Meses:</label>
                    <table>
                        <thead> 
                               <tr class="text-center"> 
                                <th><center><strong>1</strong></th>
                                <th><center><strong>2</strong></th>
                                <th><center><strong>3</strong></th>
                                <th><center><strong>4</strong></th>
                                <th><center><strong>5</strong></th>
                                <th><center><strong>6</strong></th>
                                <th><center><strong>7</strong></th>
                                <th><center><strong>8</strong></th>
                                <th><center><strong>9</strong></th>
                                <th><center><strong>10</strong></th>
                                <th><center><strong>11</strong></th>
                                <th><center><strong>12</strong></th>
                               </tr> 
                             </thead>
                        <tr>
                            <td> <input name="m1" id ="m1" title='Ingrese cantidad Mes 1' type="number" class="form-control">  </td>
                            <td> <input name="m2" title='Ingrese cantidad Mes 2' type="number" class="form-control">  </td>
                            <td> <input name="m3" title='Ingrese cantidad Mes 3' type="number" class="form-control">  </td>
                            <td> <input name="m4" title='Ingrese cantidad Mes 4' type="number" class="form-control">  </td>
                            <td> <input name="m5" title='Ingrese cantidad Mes 5' type="number" class="form-control">  </td>
                            <td> <input name="m6" title='Ingrese cantidad Mes 6' type="number" class="form-control">  </td>
                            <td> <input name="m7" title='Ingrese cantidad Mes 7' type="number" class="form-control">  </td>
                            <td> <input name="m8" title='Ingrese cantidad Mes 8' type="number" class="form-control">  </td>
                            <td> <input name="m9" title='Ingrese cantidad Mes 9' type="number" class="form-control">  </td>
                            <td> <input name="m10" title='Ingrese cantidad Mes 10' type="number" class="form-control">  </td>
                            <td> <input name="m11" title='Ingrese cantidad Mes 11' type="number" class="form-control">  </td>
                            <td> <input name="m12" title='Ingrese cantidad Mes 12' type="number" class="form-control">  </td>
                            
                        </tr>
                    </table>
                    
                </div>

                <div class="form-group">
                    <label>Observacion:</label>
                    <input name="observacion" title='Ingrese la observacion' type="text" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block" name="modificar" type="submit">Guardar Cambios</button>
                </div>


            </form>
        </div>
    </div>

@endsection
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $("#actividad").change(function(){
        console.log("cambio");
        var act = $("#actividad").val();
        $.ajax({
            url: "/rest_seg_act" ,
            data: "actividad=" + act,
            success: function(data){
                var json = JSON.parse(data);
                console.log(data);
                console.log(json["id"]);
                $("#m1").val(json["id"]);
            }
        });
    });

});
</script>
