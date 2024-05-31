<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Donut's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">Tasty Donut's</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">Tasty Donut's</h1>
            </header>
            <nav>
                <ul>
                    <li>
                        <a class="boton-menu boton-volver" href="{{route('productos')}}">
                            <i class="bi bi-arrow-return-left"></i> Seguir comprando
                        </a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito active" href="{{route('carrito')}}">
                            <i class="bi bi-cart-fill"></i> Carrito
                        </a>

                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2024 Tasty Donut's</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal">Carrito - Pedir con 2 días de antelación.</h2>
            <div class="contenedor-carrito">
            <style>
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 14px;
            color: #333333;
        }
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
                <p id="carrito-vacio" class="carrito-vacio">Tu carrito está vacío. <i class="bi bi-emoji-frown"></i></p>
                <form id="pedido-form" action="" method="POST">
        @csrf
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        </form>
                <div id="carrito-productos" class="carrito-productos disabled">
                    <!-- Esto se va a completar con el JS -->
                </div>

                <div id="carrito-acciones" class="carrito-acciones disabled">
                    <div class="carrito-acciones-izquierda">
                        <button id="carrito-acciones-vaciar" class="carrito-acciones-vaciar">Vaciar carrito</button>
                    </div>
                    <div class="carrito-acciones-derecha" name="total">
                        <div class="carrito-acciones-total">
                            <p>Total:</p>
                            <p id="total">$3000</p>
                        </div>
                        <a href="{{route('Notification')}}">
    <button id="carrito-acciones-comprar" class="carrito-acciones-comprar">Pedir ahora</button>
</a>
                        
                    </div>
                </div>

                <p id="carrito-comprado" class="carrito-comprado disabled">Muchas gracias por tu compra, revise su correo electrónico. <i class="bi bi-emoji-laughing"></i></p>

            </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./jsTienda/carrito.js"></script>
    <script src="./jsTienda/menu.js"></script>
</body>
</html>