@extends('layout/plantilla')

@section('TituloPagina',"crear un nuevo registro")

@section('contenido')

<br>
<div class="card">
    <h5 class="card-header">Añadir</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Peso por unidad (gr)</label>
                <input type="text" name="peso_unitario_gr" class="form-control" required>
                <label for="">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" required>
                <label for="perecedero" class="form-check-label">Perecedero</label>

                <div class="form-check">
                    <div class="form-check-input-container">
                        <input type="checkbox" id="perecedero" name="perecedero" class="form-check-input" value="1">
                    </div>
                </div>
                
                <button class="btn btn-primary">Añadir</button>
                <a href="{{ route('productos.index') }}" class="btn btn-info">Volver</a>
            </form>
        </p>
    </div>
  </div>
    
@endsection