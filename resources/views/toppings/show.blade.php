@extends('layouts.app')
  
@section('title', 'Show toppings')
  
@section('contents')
    <h1 class="mb-0">Detalle topping</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $topping->nombre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" value="{{ $topping->descripcion }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $topping->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $topping->updated_at }}" readonly>
        </div>
    </div>
@endsection