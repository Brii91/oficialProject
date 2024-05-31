@extends('layouts.app')
  
@section('title', 'Mostrar clientes')
  
@section('contents')
    <h1 class="mb-0">Detalle clientes</h1>
    <hr />
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $cliente->nombre }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="{{ $cliente->apellido }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{ $cliente->telefono }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Correo</label>
            <input type="text" name="correo" class="form-control" placeholder="Correo" value="{{ $cliente->correo }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $cliente->created_at }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $cliente->updated_at }}" readonly>
        </div>
    </div>
@endsection
