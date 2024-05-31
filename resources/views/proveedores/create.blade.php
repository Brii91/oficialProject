@extends('layouts.app')

@section('title', 'Crear proveedor')

@section('contents')
    <h1 class="mb-4">Agregar proveedor</h1>
    <hr>
    <form action="{{ route('proveedores.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="tipoEmpresa" class="form-label">Tipo de Empresa</label>
                <input type="text" name="tipoEmpresa" id="tipoEmpresa" class="form-control" placeholder="Tipo de Empresa" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection
