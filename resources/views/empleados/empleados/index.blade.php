@extends('layouts.app')
  
@section('title', 'Empleados')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Agregar empleado</a>
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
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Cedula</th>
                <th>Correo</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>+
            @if($empleado->count() > 0)
                @foreach($empleado as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nombres }}</td>
                        <td class="align-middle">{{ $rs->apellidos }}</td>
                        <td class="align-middle">{{ $rs->sexo }}</td>
                        <td class="align-middle">{{ $rs->cedula }}</td> 
                        <td class="align-middle">{{ $rs->correo }}</td> 
                        <td class="align-middle">{{ $rs->telefono }}</td>  
 
 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('empleados.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('empleados.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('empleados.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Empleado not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection