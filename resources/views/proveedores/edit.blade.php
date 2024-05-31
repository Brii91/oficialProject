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
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Correo" class="form-label">Correo</label>
                <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Correo" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="nombreProducto" class="form-label">Nombre producto</label>
                <input type="text" name="nombreProducto" id="nombreProducto" class="form-control" placeholder="Nombre producto" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="subTotal" class="form-label">SubTotal</label>
                <input type="text" name="subTotal" id="subTotal" class="form-control" placeholder="SubTotal" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="text" name="total" id="total" class="form-control" placeholder="Total" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
