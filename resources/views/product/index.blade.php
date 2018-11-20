@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Lista de Productos</h1>
  <table class="table table-striped">
    <thead>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Puntaje</th>
      <td><button type="submit" class = "btn btn-success">Agregar</button></td>
    </thead>
   <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{$product->nombre}}</td>
          <td>$ {{$product->precio}}</td>
          <td>{{$product->puntaje}}</td>
          <td><button type="submit" class = "btn btn-primary">Editar</button></td>
          <td><button type="submit" class = "btn btn-danger">Borrar</button></td>
        </tr>
      @endforeach
        <tr>
        <td> Promedio de productos  </td>
        <td> {{$prom}}</td>
      </tr>
     </tbody>
  </table>
</div>
@endsection
