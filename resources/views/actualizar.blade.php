@extends('layout/plantilla')

@section('TituloPagina',"crear un nuevo registro")

@section('contenido')

<br>
<div class="card">
    <h5 class="card-header">Actualizar</h5>
    <div class="card-body">

        <p class="card-text">
            <form action="{{ route('producto.update', $producto->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$producto->nombre}}">
                <label for="">Peso por unidad (gr)</label>
                <input type="text" name="peso_unitario_gr" class="form-control" required value="{{$producto->peso_unitario_gr}}">
                <label for="">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" required value="{{$producto->cantidad}}">
                <label for="perecedero" class="form-check-label">Perecedero</label>

                <div class="form-check">
                    <div class="form-check-input-container">
                        <input type="checkbox" id="perecedero" name="perecedero" class="form-check-input"  value="{{$producto->perecedero}}">
                    </div>
                </div>
                
                <button class="btn btn-warning">Actualizar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-info">Volver</a>
            </form>
        </p>
    </div>
  </div>
    
@endsection