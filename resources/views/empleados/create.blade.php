@extends('layouts.app')

@section('title', 'Crear empleado')

@section('contents')
    <h1 class="mb-4">Agregar empleado</h1>
    <hr>
    <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" required>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col-md-6 mb-3">
    <label for="sexo" class="form-label">Sexo</label>
    <select name="sexo" id="sexo" class="form-control" required>
        <option value="" disabled selected>Seleccionar sexo</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
    </select>
</div>

<div class="col-md-6 mb-3">
    <label for="cedula" class="form-label">Cédula</label>
    <input type="text" name="cedula" id="cedula" class="form-control" placeholder="Cédula" pattern="[0-9]+" title="Ingrese solo números" required>
    <div id="cedulaError" style="color: red;"></div>
</div>

<script>
    document.getElementById("cedula").addEventListener("input", function() {
        var cedulaInput = this.value.replace(/\D/g, '');
        if (cedulaInput != this.value) {
            this.value = cedulaInput;
            document.getElementById("cedulaError").textContent = "Ingrese solo números.";
        } else {
            document.getElementById("cedulaError").textContent = "";
        }
    });
</script>

        </div>
        <div class="row mb-3">
            <div class="col-md-6 mb-3">
                <label for="correo" class="form-label">Correo electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" required>
            </div>
            <div class="col-md-6 mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono" required>
    <div id="telefonoError" style="color: red;"></div>
</div>

<script>
    document.getElementById("telefono").addEventListener("input", function() {
        var telefonoInput = this.value.replace(/\D/g, '');
        if (telefonoInput != this.value) {
            this.value = telefonoInput;
            document.getElementById("telefonoError").textContent = "Ingrese solo números.";
        } else {
            document.getElementById("telefonoError").textContent = "";
        }
    });
</script>

        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            
        </div>
    </form>
@endsection
