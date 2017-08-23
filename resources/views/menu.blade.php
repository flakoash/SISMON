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
                                <th><strong>Fecha</strong></th>
                                <th><strong>Comentario</strong></th>
                                <th><strong>Fecha de Respuesta</strong></th>
                                <th><strong>Estado</strong></th>   
                               </tr> 
                             </thead> 
                        </table> 

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection