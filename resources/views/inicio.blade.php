@extends('layout/plantilla')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')
<br>
<div class="card">
    <h5 class="card-header">Productos (laravel8 y MySQL)</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert"> 
                    {{ $mensaje }}
                </div>
                @endif

            </div>
        </div>
        <p>
            <a href="{{ route('producto.create') }}" class="btn btn-primary"><span class="fas fa-cart-plus"></span>
                Añadir nuevo producto</a>
        </p>
        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                            <th>nombre</th>
                            <th>peso por unidad (gr)</th>
                            <th>cantidad</th>
                            <th>perecedero</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                    </thead>
                    <tbody>
                @foreach ($producto as $dato)
                    <tr>
                        <td>{{ $dato->nombre }}</td>
                        <td>{{ $dato->peso_unitario_gr }}</td>                        
                        <td>{{ $dato->cantidad }}</td>                        
                        <td>@if($dato->perecedero == 1)
                                Si
                            @else
                                No
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('producto.edit', $dato->id) }}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <span class="fa fa-pencil"></span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('producto.show', $dato->id) }}" method="GET">
                                <button class="btn btn-danger btn-small">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                    </tbody>

                </table>
            </div>
        </p>
    </div>

@endsection