@extends('layouts.app')
  
@section('title', 'Facturas')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de factura</h1>
        <a href="{{ route('facturas.create') }}" class="btn btn-primary">Añadir factura</a>
        <a href="{{ route('facturas.pdf') }}" class="btn btn-primary">Reporte</a>

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
                <th>Fecha emision</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio producto</th>
                <th>Descripcion</th>
                <th>Metodo de pago</th>
                <th>Total</th>

                <th>Accion</th>

            </tr>
        </thead>
        <tbody>+
            @if($factura->count() > 0)
                @foreach($factura as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->cliente }}</td>
                        <td class="align-middle">{{ $rs->fechaEmision }}</td> 
                        <td class="align-middle">{{ $rs->producto }}</td> 
                        <td class="align-middle">{{ $rs->cantidad }}</td> 
                        <td class="align-middle">{{ $rs->precioProducto }}</td> 
                        <td class="align-middle">{{ $rs->descripcion }}</td> 
                        <td class="align-middle">{{ $rs->metodoPago }}</td> 
                        <td class="align-middle">{{ $rs->total }}</td> 

                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('facturas.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalle</a>
                                <a href="{{ route('facturas.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('facturas.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Eiminar?')">
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
                    <td class="text-center" colspan="5">No hay facturas registradas.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection