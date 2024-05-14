<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="css/styleProduct.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header>
      <div class="menu logo-nav">
        <a href="index.html" class="logo">Tasty Donut's</a>
        <label class="menu-icon"><span class="fas fa-bars icomin"></span></label>
        <nav class="navigation">
          <ul>
            <li class="search-icon">
              <input type="search" placeholder="Search">
              <label class="icon">
                <span class="fas fa-search"></span>
              </label>
            </li>
            <li class="car" >
              <svg class="bi bi-cart3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
                <div id="carrito" class="dropdown-menu">
                  <table id="lista-carrito" class="table">
                      <thead>
                          <tr>
                              <th>Imagen</th>
                              <th>Nombre</th>
                              <th>Precio</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody></tbody>
                  </table>

                  <a href="#" id="vaciar-carrito" class="button-vaciar">Vaciar Carrito</a>
                  <a href="{{route('/carrito')}}" id="procesar-pedido" class="button-pedido">Procesar Compra</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </header>


<main>
  <div class="containerBG"></div>

        <div class="modal" id="modal">
          <div class="modal-content">
            <img src="" alt="" class="modal-img" id="modal-img">
          </div>
          <div class="modal-boton" id="modal-boton">X</div>
        </div>

        <div class="container-productos" id="lista-productos">

          <div class="card">
            <img src="./img/imgTienda/coconut.jpg" class="card-img">
            <h4>Combo de una docena de donas de azúcar glass</h4>
            <p>RD$<small class="precio">18</small></p>
            <a href="#" class="button agregar-carrito" data-id="1">Comprar</a>
          </div>
          <div class="card">
            <img src="./img/imgTienda/donaconchispitas.jpg" class="card-img">
            <h4>Combo de una decena de donas con glaseado y topping de chispas</h4>
            <p>RD$<small class="precio">14</small></p>
            <a href="#" class="button agregar-carrito" data-id="2">Comprar</a>
          </div>
          <div class="card">
            <img src="./img/imgTienda/Donachocolate.jpg" class="card-img">
            <h4>Combo de una decena de donas con glaseado de chocolate</h4>
            <p>RD$<small class="precio">24</small></p>
            <a href="#" class="button agregar-carrito" data-id="3">Comprar</a>
          </div>

          <div class="card">
            <img src="./img/imgTienda/donaconoreo.jpg" class="card-img">
            <h4>Combo de una docena de donas con glaseado y topping de galletas oreo</h4>
            <p>RD$<small class="precio">26</small></p>
            <a href="#" class="button agregar-carrito" data-id="4">Comprar</a>
          </div>
          <div class="card">
            <img src="./img/imgTienda/donamalvada.jpg" class="card-img">
            <h4>Combo de una decena de donas con glaseado y topping de malvavisco</h4>
            <p>RD$<small class="precio">35</small></p>
            <a href="#" class="button agregar-carrito" data-id="5">Comprar</a>
          </div>
          <div class="card">
            <img src="./img/imgTienda/donaconalmendra.jpg" class="card-img">
            <h4>Combo de una docena de donas con glaseado y topping de almendra</h>
            <p>RD$<small class="precio">21</small></p>
            <a href="#" class="button agregar-carrito" data-id="6">Comprar</a>
          </div>

          <div class="card">
            <img src="./img/imgTienda/donafresa.jpg" class="card-img">
            <h4>Combo de una docena de donas con glaseado y topping de fresa</h4>
            <p>RD$<small class="precio">29</small></p>
            <a href="#" class="button agregar-carrito" data-id="7">Comprar</a>
          </div>
          <div class="card">
            <img src="./img/imgTienda/donaconchispitas.jpg" class="card-img">
            <h4>Dona rellena de chocolate</h4>
            <p>RD$<small class="precio">60</small></p>
            <a href="#" class="button agregar-carrito" data-id="8">Comprar</a>
          </div>
          <div class="card">
            <img src="./img/imgTienda/blanca.jpg" class="card-img">
            <h4>Donas con relleno de dulce de leche</h4>
            <p>RD$<small class="precio">45</small></p>
            <a href="#" class="button agregar-carrito" data-id="9">Comprar</a>
          </div>

        </div>

        <div class="waveWrapper waveAnimation">
          <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
          </div>
          <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
          </div>
          <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
          </div>
        </div>
</main>
  

<footer class="footer-section">
  <div class="copyright-area">
      <div class="container-footer">
          <div class="row-footer">
              <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                  <div class="copyright-text">
                      <p>Copyright &copy; 2024, todos los derechos reservados <a href="index.html">Tasty Donut's</a></p>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                  <div class="footer-menu">
                      <ul>
                          <li><a href="nosotros.html">Nosotros</a></li>
                          <li><a href="productos.html">Productos</a></li>
                          <li><a href="contacto.html">Contacto</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer> 


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script  src="./js/scripts.js"></script>
    <script src="./js/carrito.js"></script>
    <script src="./js/pedido.js"></script>
    <script src="./js/compra.js"></script>
</body>
</html>
