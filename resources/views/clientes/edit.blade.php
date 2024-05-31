@extends('layouts.app')
  
@section('title', 'Editar cliente')
  
@section('contents')
    <h1 class="mb-0">Editar cliente</h1>
    <hr />
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $cliente->nombre }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="{{ $cliente->apellido }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ $cliente->telefono }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Correo</label>
                <input type="email" name="correo" class="form-control" placeholder="Correo" value="{{ $cliente->correo }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
