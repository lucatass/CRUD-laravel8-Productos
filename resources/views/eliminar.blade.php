@extends('layout/plantilla')

@section('TituloPagina',"crear un nuevo registro")

@section('contenido')

<br>
<div class="card">
    <h5 class="card-header">Eliminar</h5>
    <div class="card-body">
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Este producto se eliminará permanentemente ¿Desea proceder?
              </div>
            <table class="table table-sm table-hover table-bordered" style="background-color: rgb(206, 82, 82)">
                <thead>
                        <th>nombre</th>
                        <th>peso por unidad (gr)</th>
                        <th>cantidad</th>
                        <th>perecedero</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->peso_unitario_gr }}</td>                        
                    <td>{{ $producto->cantidad }}</td>                        
                    <td>{{ $producto->perecedero }}</td>
                </tr>
                </tbody>
            </table>
            <br>
            <form action="{{ route('producto.destroy', $producto -> id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('productos.index') }}">Cancelar</a>
                <button class="btn btn-danger btn-small">
                    <span class="fa fa-trash">Eliminar</span>
                </button>
            </form>

        </p>
    </div>
  </div>
    
@endsection