@extends('layouts.app')
  
@section('title', 'Editar empleados')
  
@section('contents')
    <h1 class="mb-0">Editar empleado</h1>
    <hr />
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nombres</label>
                <input type="text" name="nombres" class="form-control" placeholder="nombres" value="{{ $empleado->nombres }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="apellidos" value="{{ $empleado->apellidos }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Sexo</label>
                <input type="text" name="sexo" class="form-control" placeholder="sexo" value="{{ $empleado->sexo }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Cedula</label>
                <textarea class="form-control" name="cedula" placeholder="cedula" >{{ $empleado->cedula }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Correo</label>
                <input type="text" name="correo" class="form-control" placeholder="correo" value="{{ $empleado->correo }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Telefono</label>
                <textarea class="form-control" name="telefono" placeholder="telefono" >{{ $empleado->telefono }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Enviar</button>
            </div>
        </div>
    </form>
@endsection