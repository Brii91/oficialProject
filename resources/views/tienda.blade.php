<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda</title>
  <link rel="stylesheet" href="{{ ('css/sty.css') }}">
</head>
<body>
  <section class="main">
    <header>
      <a href="#"><img src="" class="logo"></a>
    </header>
    <div class="content">
      <div class="text">
        <h2>Bienvenido<br>a  <span> Tasty Donut's.</span>
        </h2>
        </h2>
        <p>Únete a la revolución de las mini donas y descubre por qué Tasty Donut's es el destino número uno para los amantes de los dulces en línea. ¡Haz tu pedido hoy mismo y sumérgete en el delicioso mundo de las mini donas con Tasty Donut's!</p>
        <button onclick="window.location.href='{{route('productos')}}'" class="learn-more">
          <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
          </span>
          <span class="button-text">Ir ahora</span>
      </button>
          
      </div>
      <div class="slider">
        <div class="slides active">
          <div class="bounce-in-fwd">
          <img src="img/imgtienda/tienda-online.png">
        </div>
      </div>
      </div>
    </div>


    <div class="footer">
      <ul class="sci">
        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
      </ul>
      
    </div>
  </section>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    //toggle 
    const menutoggle = document.querySelector('.toggle');
    const navigation = document.querySelector('.navigation');
    menutoggle.onclick = function(){
      menutoggle.classList.toggle('active')
      navigation.classList.toggle('active')
    }

    //slider
    const slides = document.querySelectorAll('.slides');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    i = 0;
    
    function ActiveSlide(n){
      for(slide of slides)
      slide.classList.remove('active');
      slides[n].classList.add('active');
    }

    // function for next btn
    next.addEventListener('click', function(){
      if(i == slides.length - 1){
        i = 0;
        ActiveSlide(i);
      }
      else 
      {
        i++;
        ActiveSlide(i);
      }
    })

     // function for prev btn
     prev.addEventListener('click', function(){
      if(i == 0){
        i = slides.length - 1;
        ActiveSlide(i);
      }
      else 
      {
        i--;
        ActiveSlide(i);
      }
    })
  </script>
</body>
</html>