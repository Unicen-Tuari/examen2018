@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Lista de Productos</h1>
  <p> <a href="{{url('/cargar')}}">cargar</p>
  <table class="table table-striped">
    <thead>
      <th>Nombre</th>
      <th>Precio</th>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{$product->nombre}}</td>
          <td>$ {{$product->precio}}</td>
        </tr>
      @endforeach
      <tr>
        <td>Promedio</td>
        <td>{{$promedio}}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
