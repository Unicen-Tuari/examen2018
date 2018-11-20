@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Lista de Productos</h1>
  <table class="table table-striped">
    <thead>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Puntaje</th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{$product->nombre}}</td>
          <td>$ {{$product->precio}}</td>
          <td>{{$product->puntaje}}</td>
          <td><a href="{{ route('product.edit', $product->id) }}">Editar</a></td>
          <td>
              <form action="{{route('product.destroy',$product)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" >Eliminar</button>
              </form>
          </td>
        </tr>
      @endforeach
    </tbody>
    </table>
    <a href="{{route('product.create')}}" class="list-group-item">Cargar</a>

  <h4>Promedio de precios: {{$promedio}}</h4>
</div>
@endsection
