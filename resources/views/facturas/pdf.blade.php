<!doctype html>
<html lang="en">
    <head>
        <title>Reporte</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>

            .cabecera{
                background-color: #c83f71;
                color: white;
            }



        </style>
    </head>

    <body>
        <!--<img src="img/donas.png" alt="" width="50px" height="50px">-->
        <h1 class="text-center">FACTURAS</h1> <br>
    <table class="table" style="text-align: center;font-size: 15px">
        <thead class="cabecera">
            
            <tr>
            <th>ID</th>
                <th>Cliente</th>
                <th>Fecha emisión</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio producto</th>
                <th>Descripción</th>
                <th>Método de pago</th>
                <th>Total</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($facturas as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->cliente }}</td>
                    <td class="align-middle">{{ $rs->fechaEmision }}</td>
                    <td class="align-middle">{{ $rs->producto }}</td>
                    <td class="align-middle">{{ $rs->cantidad }}</td>
                    <td class="align-middle">{{ $rs->precioProducto }}</td>
                    <td class="align-middle">{{ $rs->descripcion }}</td>
                    <td class="align-middle">{{ $rs->metodoPago }}</td>
                    <td class="align-middle">{{ $rs->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
