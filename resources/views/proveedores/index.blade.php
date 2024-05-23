@extends('layouts.app')
  
@section('title', 'Proveedores')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de proveedores</h1>
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary">Añadir proveedor</a>
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
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Teléfono</th>
                <th>Tipo de empresa</th>
                <th>Acción</th>

            </tr>
        </thead>
        <tbody>+
            @if($proveedor->count() > 0)
                @foreach($proveedor as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nombre }}</td>
                        <td class="align-middle">{{ $rs->direccion }}</td> 
                        <td class="align-middle">{{ $rs->telefono }}</td> 
                        <td class="align-middle">{{ $rs->tipoEmpresa }}</td> 

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