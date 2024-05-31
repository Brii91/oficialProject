@extends('layouts.app')
  
@section('title', 'Clientes')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de clientes</h1>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Añadir cliente</a>
        <a href="{{ route('clientes.pdf') }}" class="btn btn-primary">Reporte</a>

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
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acción</th>

            </tr>
        </thead>
        <tbody>+
            @if($cliente->count() > 0)
                @foreach($cliente as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nombre }}</td> 
                        <td class="align-middle">{{ $rs->apellido }}</td> 
                        <td class="align-middle">{{ $rs->telefono }}</td> 
                        <td class="align-middle">{{ $rs->correo }}</td> 

                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('clientes.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalle</a>
                                <a href="{{ route('clientes.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('clientes.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Eiminar?')">
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