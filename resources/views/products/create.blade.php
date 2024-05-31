@extends('layouts.app')

@section('title', 'Crear producto')

@section('contents')
    <h1 class="mb-0">Agregar producto</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
                <input type="text" name="product_code" id="product_code" class="form-control" placeholder="Codigo del producto" readonly>
            </div>
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Precio" required>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col">
    <label for="categoria" class="form-label">Topping</label>
    <select name="categoria" id="categoria" class="form-control" required>
        <option value="" disabled selected>Seleccionar categoría</option>
        <option value="Tecnología">Tecnología</option>
        <option value="Moda">Moda</option>
        <option value="Deporte">Deporte</option>
        <option value="Hogar">Hogar</option>
        <!-- Puedes agregar más opciones según tus necesidades -->
    </select>
</div>

            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descripcion" required></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

    <script>
        // Function to generate a random product code
        function generateProductCode() {
            const length = 10;
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let code = '';
            for (let i = 0; i < length; i++) {
                code += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return code;
        }

        // Automatically fill the product code field when the page loads
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('product_code').value = generateProductCode();
        });
    </script>
@endsection
