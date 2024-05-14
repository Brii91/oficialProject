@extends('layouts.app')
  
@section('title', 'Crear empleado')
  
@section('contents')
    <h1 class="mb-0">Agregar empleado</h1>
    <hr />
    <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nombres" class="form-control" placeholder="Nombres">
            </div>
            <div class="col">
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="sexo" class="form-control" placeholder="Sexo">
            </div>
            <div class="col">
                <textarea class="form-control" name="cedula" placeholder="Cedula"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="correo" class="form-control" placeholder="Correo">
            </div>
            <div class="col">
                <textarea class="form-control" name="telefono" placeholder="Telefono"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection