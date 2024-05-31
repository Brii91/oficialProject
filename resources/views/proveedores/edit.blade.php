@extends('layouts.app')
  
@section('title', 'Editar proveedor')
  
@section('contents')
    <h1 class="mb-0">Editar proveedor</h1>
    <hr />
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $proveedor->nombre }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="direccion" value="{{ $proveedor->direccion }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ $proveedor->telefono }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Tipo de empresa</label>
                <input type="text" name="tipoEmpresa" class="form-control" placeholder="Tipo de Empresa" value="{{ $proveedor->tipoEmpresa }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
