@extends('layouts.app')
  
@section('title', 'Crear topping')
  
@section('contents')
    <h1 class="mb-0">Agregar topping</h1>
    <hr />
    <form action="{{ route('toppings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection