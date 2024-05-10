<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tasty Donut's</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/donas.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/font-size/font-size.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">

  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Tasty Donut's</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros </a></li>
          <li><a class="nav-link scrollto" href="#gallery">Productos</a></li>
          <li><a class="nav-link scrollto" href="#estadisticas">Estadísticas</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
          <li><a class="nav-link scrollto" href="#faq">P.F</a></li>
          <li><a class="nav-link scrollto" href="{{route('register')}}">Registrate</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>"Pequeñas delicias, <span>grandes sonrisas".</span></h1>
            <h2>La vida está llena de pequeños placeres, y Tasty Donut's es definitivamente uno de ellos.</h2>
            <div class="text-center text-lg-start">
              <button class="animated-button" onclick="redireccionar()">
                <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
                <span class="text">Realizar pedido</span>
                <span class="circle"></span>
                <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                  ></path>
                </svg>
              </button>

              <script>
               function redireccionar(){
                 window.location.href = '{{route('tienda')}}';
               }
              </script>
              
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="img/dona-inicio.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

 <!-- ======= Sobre Nosaotros ======= -->
 <section id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
        <div class="section-title" data-aos="fade-up">
          <h2>Sobre Nosotros</h2>
          <p>Sobre Nosotros</p>
        </div>


</section>
<div style="display: flex; justify-content: center;">
  <style>
    /* Fuente Open Sans */
    body {
      font-family: 'Open Sans', sans-serif;
    }
  </style>
  
  <div style="display: flex; justify-content: center;">
    <!-- Mision -->
    <div class="card wallet" style="margin-right: 20px; padding: 20px;">
      <div class="overlay"></div>
  
      <svg width="100" height="100">
        <defs></defs>
        <g transform="translate(23.000000, 29.500000)" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="icon">
        </g>
      </svg>
      <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" onclick="toggleDescription(this)">
        <center>
          <div class="icon"><img src="img/mision.png" alt="Donas Rosadas"></div>
        </center>
        <h4 class="title" style="color: black; text-align: center;">Misión</h4>
        <p class="description" style="text-align: justify; margin: 10px 0;">La misión de Tasty Donut´s es deleitar a los clientes con las donas más deliciosas y creativas, mientras contribuye a un mundo más sostenible y solidario.</p>
      </div>
    </div>
    <!-- Final Mision -->
  
    <!-- Vision -->
    <div class="card wallet" style="margin-right: 20px; padding: 20px;">
      <div class="overlay"></div>
  
      <svg width="100" height="100">
        <defs></defs>
        <g transform="translate(23.000000, 29.500000)" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="icon">
        </g>
      </svg>
      <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" onclick="toggleDescription(this)">
        <center>
          <div class="icon"><img src="img/vision.png" alt="Donas Rosadas"></div>
        </center>
        <h4 class="title" style="color: black; text-align: center;">Visión</h4>
        <p class="description" style="text-align: justify; margin: 10px 0;">La visión de Tasty Donut´s es convertirse en una marca de donas, reconocida por la innovación, calidad y compromiso social.</p>
      </div>
    </div>
    <!-- Final Vision -->
  </div>
  

  <!--Valores-->
  <div class="card wallet">
    <div class="overlay"></div>

    <svg width="100" height="100">
      <defs></defs>
      <g transform="translate(23.000000, 29.500000)" fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="icon">
      </g>
    </svg>
    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" onclick="toggleDescription(this)">
      <center>
        <div class="icon"><img src="img/valores.png" alt="Donas Rosadas"></div>
      </center>
      <h4 class="title" style="color: black; text-align: center;"><a href="#">Valores</a></h4>
      <p class="description" style="text-align: center;"><p class="description" style="display: none;">
        <class="lista">
          <li>Innovación</li>
          <li>Responsabilidad</li>
          <li>Sostenibilidad</li>
          <li>Compromiso Social</li>
          <li>Excelencia</li>
          <li>Pasión</li>
        </p>
    </div>

  </div>
  <!--Final Valores-->
</div>


    <!-- ======= Galería ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Productos</h2>
          <p>Nuestros Productos</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="img/gallery/Donachocolate.jpg" class="gallery-lightbox">
                <img src="img/gallery/Donachocolate.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="img/gallery/blanca.jpg" class="gallery-lightbox">
                <img src="img/gallery/blanca.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="img/gallery/donaconchispitas.jpg" class="gallery-lightbox">
                <img src="img/gallery/donaconchispitas.jpg" alt="100" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="img/gallery/donafresa.jpg" class="gallery-lightbox">
                <img src="img/gallery/donafresa.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="img/gallery/donaconoreo.jpg" class="gallery-lightbox">
                <img src="img/gallery/donaconoreo.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="img/gallery/coconut.jpg" class="gallery-lightbox">
                <img src="img/gallery/coconut.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="img/gallery/donaconalmendra.jpg" class="gallery-lightbox">
                <img src="img/gallery/donaconalmendra.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="img/gallery/donamalvada.jpg" class="gallery-lightbox">
                <img src="img/gallery/donamalvada.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Fin de galería -->

    
    <!-- ======= Estadísticasd ======= -->
    <section id="estadisticas" class="counts">
      <div class="container">

        
        <div class="section-title" data-aos="fade-up">
          <h2>Estadísticas</h2>
          <p>Informe Numérico</p>
        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="3" class="purecounter"></span>
              <p>Clientes Satisfechos</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="3" class="purecounter"></span>
              <p>Toppings</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="3" class="purecounter"></span>
              <p>Visitas al Local</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-clock"></i>
              <span data-purecounter-start="0" data-purecounter-end=" 15" data-purecounter-duration="3" class="purecounter"></span>
              <p>Tiempo de Preparación</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Estadísticas -->
    

    <!-- ======= Seccion de testimonios iniciada ======= -->
    </div>
    <section id="testimonials" class="testimonials">
      <div class="container">



        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/testimonials/Joseph.jpeg" class="testimonial-img" alt="">
                <h3>Joseph Gutiérrez</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ¡Las mini donas de esta página son una delicia! Cada bocado es como una explosión de sabor. ¡Definitivamente recomendaría este lugar a cualquier amante de las donas!                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/testimonials/Mabel.jpeg" class="testimonial-img" alt="">
                <h3>Yerlenis Mabel</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ¡Hola! Me gustaría decirles que estás donas son increíblemente deliciosas. Realicé un pedido para una actividad y el servicio fue espectacular. Cumplieron todas mis expectativas
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fin de Testimonios -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/testimonials/Raonny.jpeg" class="testimonial-img" alt="">
                <h3>Raonny Muñoz</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ¡Las mini donas de esta página son un verdadero placer para el paladar! La frescura, la textura y el sabor son incomparables. Definitivamente, son mi nuevo antojo favorito.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fin de Testimonios  -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/testimonials/Herlyn.jpeg" class="testimonial-img" alt="">
                <h3>Herlyn de León</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Como amante de las donas, siempre estoy buscando las mejores. Y puedo decir con confianza que las mini donas de esta página están en la cima de mi lista. ¡Son simplemente perfectas en cada aspecto!                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fin de Testimonios  -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="img/testimonials/Darlenys.jpeg" class="testimonial-img" alt="">
                <h3>Darlenys Acevedo</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Probé las mini donas de esta página para un evento y fueron todo un éxito. ¡Todos los invitados quedaron impresionados por lo deliciosas que estaban! Sin duda, volveré a pedir más para la próxima ocasión.                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- Fin de Testimonios -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- Seccion de testimonios terminada -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Equipo</h2>
          <p>Administradores</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="img/team/Brin.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Britney Polanco</h4>
                <span>Colaboradora - Desarrollo Web</span>
                <div class="social">

                  <a href="https://www.instagram.com/brii.polanco/"><i class="bi bi-instagram"></i></a>
                  <a href="http://www.linkedin.com/in/britney-polanco-579759308"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="img/team/Mederlinn.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mederlin Franco</h4>
                <span>CEO</span>
                <div class="social">
                  <a href="https://www.instagram.com/mederlinfc25/?next=%2F"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/mederlin-franco-cris%C3%B3stomo-647472209/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="img/team/Adrian.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adrian Franco</h4>
                <span>CEO</span>
                <div class="social">
                  <a href="https://www.instagram.com/adrianf.22/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="img/team/Yirlinn.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Yirlin Carrasco</h4>
                <span>Colaboradora - Desarrollo Web</span>
                <div class="social">
                  <a href="https://www.instagram.com/yirlincarrascop_?igsh=MThqemc0bm9ubXE5ZA=="><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/yirlin-carrasco-0407b2291/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>P.F</h2>
          <p>Preguntas Frecuentes</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">¿Qué hace que sus mini donas sean únicas en comparación con las donas tradicionales? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Nuestras mini donas son una versión adorable y divertida de las donas clásicas. Su tamaño compacto las hace perfectas para disfrutar como bocadillo o compartir en cualquier ocasión. Además, su pequeño tamaño permite una mayor variedad de sabores y opciones de decoración creativas que no encontrarás en las donas tradicionales.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">¿Cómo se les ocurrió la idea de crear mini donas? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  La idea de nuestras mini donas surgió de nuestra pasión por la innovación en la repostería. Queríamos ofrecer a nuestros clientes una experiencia única y deliciosa que se destacara en el mercado. Las mini donas nos permiten jugar con sabores y presentaciones de una manera emocionante y sorprendente.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">¿Puedo programar la entrega de mis mini donas para una fecha específica? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  ¡Absolutamente! Entendemos que a veces necesitas planificar con anticipación. Durante el proceso de pago, tendrás la opción de seleccionar la fecha de entrega deseada para tu pedido de mini donas. Así podrás asegurarte de tenerlas a tiempo para cualquier ocasión especial o evento importante.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">¿Cómo puedo realizar un pedido y cuánto tiempo tardará en llegar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Hacer un pedido es fácil. Simplemente visita nuestra página web, selecciona tus mini donas favoritas y sigue el proceso de pago. Una vez que hayamos recibido tu pedido, nos esforzaremos por prepararlo lo más rápido posible. El tiempo de envío depende de tu ubicación, pero generalmente los pedidos se entregan dentro de unas horas hábiles.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">¿Cuál es su política de devolución si no estoy satisfecho con mi pedido? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Nos esforzamos por la satisfacción del cliente y queremos que estés completamente satisfecho con tu compra. Si por alguna razón no estás contento con tus mini donas, contáctanos dentro de un plazo razonable después de recibir tu pedido y haremos todo lo posible para resolver cualquier problema o emitir un reembolso.                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End P.F Section -->

  <!-- ======= Footer ======= -->
  <footer class="footer" style="background-color: #fbd6df; color: #333;">

<!-- Widgets - Bootstrap Brain Component -->
<div class="py-3 py-md-5 py-xl-8 border-top border-light-subtle">
  <div class="container overflow-hidden">
    <div class="row gy-3 gy-md-5 gy-xl-0 align-items-sm-center">
      <div class="col-xs-12 col-sm-6 col-xl-3 order-0 order-xl-0">
        <div class="footer-logo-wrapper text-center text-sm-start">
          <a href="#!">
            <img src="/img/LOGO.png" alt="BootstrapBrain Logo" width="175" height="120">
          </a>
        </div>
      </div>

      <div class="col-xs-12 col-xl-6 order-2 order-xl-1">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link link-secondary px-2 px-md-3" href="#about">Sobre nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-secondary px-2 px-md-3" href="#gallery">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-secondary px-2 px-md-3" href="#estadisticas">Estadísticas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-secondary px-2 px-md-3" href="#team">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-secondary px-2 px-md-3" href="#faq">P.F</a>
          </li>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-6 col-xl-3 order-1 order-xl-2">
        <div class="social-media-wrapper">
          <ul class="list-unstyled m-0 p-0 d-flex justify-content-center justify-content-sm-end">
            <li class="me-3">
              <a href="https://maps.app.goo.gl/qgr4D1HWgms8ybTM6" class="link-dark link-opacity-75-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                </svg>
              </a>
            </li>
            <li class="">
              <a href="https://www.instagram.com/tasty_donutts/" class="link-dark link-opacity-75-hover">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Copyright - Bootstrap Brain Component -->
<div class="py-3 py-md-5 border-top border-light-subtle">
  <div class="container overflow-hidden">
    <div class="row">
      <div class="col">
        <div class="footer-copyright-wrapper text-center">
          &copy; 2024. Tasty Donut´s.
        </div>
        <div class="credits text-secondary text-center mt-2 fs-8">
        <a href="https://bootstrapbrain.com/" class="link-secondary text-decoration-none"></a><span class="text-primary">&#9829;</span>
        </div>
      </div>
    </div>
  </div>
</div>

</footer>
                  
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
 