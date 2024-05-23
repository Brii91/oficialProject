@extends('layouts.app')

@section('title', 'Editar proveedor')

@section('contents')
    <h1 class="mb-4">Editar proveedor</h1>
    <hr>
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="{{ $proveedor->nombre }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección" value="{{ $proveedor->direccion }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" value="{{ $proveedor->telefono }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="tipoEmpresa" class="form-label">Tipo de Empresa</label>
                <input type="text" name="tipoEmpresa" id="tipoEmpresa" class="form-control" placeholder="Tipo de Empresa" value="{{ $proveedor->tipoEmpresa }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
