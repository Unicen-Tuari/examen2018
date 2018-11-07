@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Lista de Productos</h1>
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
    </tbody>
  </table>
</div>
@endsection
