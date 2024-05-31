@extends('layouts.app')

@section('title', 'Crear pedido')

@section('contents')
    <h1 class="mb-4">Agregar pedido</h1>
    <hr>
    <form action="{{ route('pedido.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre del cliente</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Correo" class="form-label">Correo</label>
                <input type="text" name="Correo" id="correo" class="form-control" placeholder="Correo" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="Telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required>
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection
