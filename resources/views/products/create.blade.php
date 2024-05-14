@extends('layouts.app')
  
@section('title', 'Crear producto')
  
@section('contents')
    <h1 class="mb-0">Agregar producto</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Titulo">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Precio">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Codigo del producto">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descripcion"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection