@extends('layouts.app')

@section('title', 'Mostrar factura')

@section('contents')
    <h1 class="mb-4">Detalle de factura</h1>
    <hr>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Cliente</label>
            <input type="text" name="cliente" class="form-control" placeholder="Cliente" value="{{ $factura->cliente }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Fecha de emisión</label>
            <input type="text" name="fechaEmision" class="form-control" placeholder="Fecha de emisión" value="{{ $factura->fechaEmision }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Producto</label>
            <input type="text" name="producto" class="form-control" placeholder="Producto" value="{{ $factura->producto }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" value="{{ $factura->cantidad }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Precio producto</label>
            <input type="text" name="precioProducto" class="form-control" placeholder="Precio producto" value="{{ $factura->precioProducto }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Descripción</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripción" value="{{ $factura->descripcion }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Método pago</label>
            <input type="text" name="metodoPago" class="form-control" placeholder="Método de pago" value="{{ $factura->metodoPago }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Total</label>
            <input type="text" name="total" class="form-control" placeholder="Total" value="{{ $factura->total }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $factura->created_at }}" readonly>
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $factura->updated_at }}" readonly>
        </div>
    </div>
@endsection