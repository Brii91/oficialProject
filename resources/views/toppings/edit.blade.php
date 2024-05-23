@extends('layouts.app')
  
@section('title', 'Editar topping')
  
@section('contents')
    <h1 class="mb-0">Editar topping</h1>
    <hr />
    <form action="{{ route('toppings.update', $topping->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $topping->nombre }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" value="{{ $topping->descripcion }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection