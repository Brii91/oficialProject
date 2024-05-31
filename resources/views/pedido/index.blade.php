@extends('layouts.app')
  
@section('title', 'Pedidos')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de pedidos</h1>
        <a href="{{ route('pedido.create') }}" class="btn btn-primary">Añadir pedido</a>

    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Correo</th>
                <th>Nombre producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal</th>
                <th>Total</th>
                <th>Acción</th>

            </tr>
        </thead>
        <tbody>+
            @if($pedido->count() > 0)
                @foreach($pedido as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->cliente }}</td>
                        <td class="align-middle">{{ $rs->correo }}</td> 
                        <td class="align-middle">{{ $rs->nombreProducto }}</td> 
                        <td class="align-middle">{{ $rs->precio }}</td> 
                        <td class="align-middle">{{ $rs->cantidad }}</td> 
                        <td class="align-middle">{{ $rs->dubTotal }}</td> 
                        <td class="align-middle">{{ $rs->total }}</td> 


                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('proveedores.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalle</a>
                                <a href="{{ route('proveedores.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('proveedores.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Eiminar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">No hay clientes registrados.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection