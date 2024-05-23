@extends('layouts.app')
  
@section('title', 'Mostrar proveedores')
  
@section('contents')
    <h1 class="mb-0">Detalle proveedor</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $proveedor->nombre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{ $proveedor->nombre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{ $proveedor->telefono }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tipo de empresa</label>
            <input type="text" name="tipoEmpresa" class="form-control" placeholder="Tipo de empresa" value="{{ $proveedor->tipoEmpresa }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $proveedor->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $proveedor->updated_at }}" readonly>
        </div>
    </div>
@endsection