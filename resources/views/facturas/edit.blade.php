@extends('layouts.app')

@section('title', 'Editar factura')

@section('contents')
    <h1 class="mb-0">Editar factura</h1>
    <hr />
    <form action="{{ route('facturas.update', $factura->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control" placeholder="Cliente" value="{{ $factura->cliente }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="fechaEmision" class="form-label">Fecha de Emisión</label>
                <input type="date" name="fechaEmision" id="fechaEmision" class="form-control" placeholder="Fecha de Emisión" value="{{ $factura->fechaEmision }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="producto" class="form-label">Producto</label>
                <input type="text" name="producto" id="producto" class="form-control" placeholder="Producto" value="{{ $factura->producto }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Cantidad" value="{{ $factura->cantidad }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="precioProducto" class="form-label">Precio del Producto</label>
                <input type="number" step="0.01" name="precioProducto" id="precioProducto" class="form-control" placeholder="Precio del Producto" value="{{ $factura->precioProducto }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción">{{ $factura->descripcion }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="metodoPago" class="form-label">Método de Pago</label>
                <input type="text" name="metodoPago" id="metodoPago" class="form-control" placeholder="Método de Pago" value="{{ $factura->metodoPago }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" step="0.01" name="total" id="total" class="form-control" placeholder="Total" value="{{ $factura->total }}" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
