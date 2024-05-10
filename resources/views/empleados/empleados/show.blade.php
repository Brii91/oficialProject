@extends('layouts.app')
  
@section('title', 'Mostrar empleado')
  
@section('contents')
    <h1 class="mb-0">Detalle de empleado</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombres</label>
            <input type="text" name="nombres" class="form-control" placeholder="nombres" value="{{ $empleado->nombres }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" placeholder="apellidos" value="{{ $empleado->apellidos }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sexo</label>
            <input type="text" name="sexo" class="form-control" placeholder="sexo" value="{{ $empleado->sexo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Cedula</label>
            <textarea class="form-control" name="cedula" placeholder="cedula" readonly>{{ $empleado->cedula }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Correo</label>
            <input type="text" name="correo" class="form-control" placeholder="correo" value="{{ $empleado->correo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Telefono</label>
            <textarea class="form-control" name="telefono" placeholder="telefono" readonly>{{ $empleado->telefono }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $empleado->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $empleado->updated_at }}" readonly>
        </div>
    </div>
@endsection