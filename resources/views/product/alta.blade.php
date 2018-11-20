@extends('layouts.app')

@section('content')

<article class="col-md-12">
  <div class="panel panel-default">
      <h4>Alta producto</h4>
    </div>
    <div class="panel-body">

         <form class="form-horizontal" action='{{route("product.store")}}' method="POST">
        {{csrf_field()}}
        {{method_field('POST')}}

          <label class="col-md-4 control-label" name="nombre" > Nombre:</label>
          <div class="col-md-6">
            <input class="form-control" type="text" name="nombre" placeholder= "Nombre">
          </div>
    
            <label class="col-md-4 control-label" name="precio" > Precio: $</label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="precio" placeholder= "Precio">
              </div>

            <label class="col-md-4 control-label" name="puntaje" > Puntaje</label>
              <div class="col-md-6">
                <input class="form-control" type="text" name="puntaje" placeholder= "Puntaje">
              </div>
              <div class="form-group">

           <div class="col-md-6 col-md-offset-4">
             <button type="submit" class="btn btn-primary">
                  <i class=" glyphicon glyphicon-user">Guardar</i>
              </button>
            </div>
    </div>
@endsection
