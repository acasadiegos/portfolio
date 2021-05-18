<?php require_once 'session.php'; ?>
<?php require_once 'helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portafolio Ing. Casadiegos</title>
  <link rel="icon" href="img/portafolio.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/lightbox.min.css">
  <script src="js/lightbox-plus-jquery.min.js"></script>
</head>

<body>
  <header>
    <!-- Mensajes (De error y éxito) -->
    <?php if (isset($_SESSION['completado'])) : ?>
      <div class="alerta alerta-exito">
        <?= $_SESSION['completado'] ?>
      </div>

    <?php elseif (isset($_SESSION['errores']['general'])) : ?>
      <div class="alerta alerta-error">
        <?= $_SESSION['errores']['general'] ?>
      </div>
    <?php endif; ?>

    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'correo') : ''; ?>
    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'mensaje') : ''; ?>

    <div class="contenedor">
      <!-- Menú -->
      <nav class="menu">
        <a href="#" id="btn-acercaDe">Acerca de</a>
        <a href="#" id="btn-trabajos">Trabajos</a>
        <a href="#" id="btn-contacto">Contacto</a>
      </nav>

      <!-- Nombre y profesión -->
      <div class="contenedor-texto">
        <div class="texto">
          <h1 class="nombre">Andrés Casadiegos</h1>
          <h2 class="profesion">Ingeniero de sistemas</h2>
        </div>
      </div>
    </div>
  </header>
  <section class="main">
    <section class="acerca-de" id="acerca-de">
      <div class="contenedor">
        <div class="foto">
          <img src="img/foto.jpg" width="115" height="115" alt="Andrés Eduardo Casadiegos Gómez" />
        </div>
        <div class="texto">
          <h3 class="titulo">Acerca de</h3>
          <p>
            Profesional de <span class="bold">ingeniería de sistemas</span>,
            graduado de la Universidad Autónoma de Bucaramanga. Con
            conocimientos y capacidades en el área de
            desarrollo web (backend y frontend), bases de datos, desarrollo de videojuegos
            dinámica de sistemas, análisis y documentación de requerimientos.
          </p>
          <p>
            <span class="bold"> Manejo los siguientes lenguajes, programas y ramas del conocimiento: </span> 
            HTML, CSS, Bootstrap, PHP, Java, Javascript, C#, SQL, MySQL, PostgreSQL, Laravel, Unity 2D, Documentación UML
            y Git/Github. <span class="bold"> Nivel de inglés B1 </span>
          </p>
          <p>
            <a href="descargar.php?archivo=cv.pdf" class="descargar-cv">Descargar CV</a>
            <a href="descargar.php?archivo=DiplomasCertificados.pdf" class="descargar-certificados">Diplomas / Certificados</a>
            <a href="https://www.github.com/acasadiegos" class="github">Github <i class="fa fa-github" aria-hidden="true"></i></a>
          </p>
        </div>
      </div>
    </section>
    <section class="trabajos" id="trabajos">
      <div class="contenedor">
        <h3 class="titulo">Trabajos</h3>
        <div class="contenedor-trabajos">
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/5.jpg" data-lightbox="mygallery" data-title="Sistema de marketing para el envío de e-mails masivos pubilicitarios">
                <img src="img/trabajos/5.jpg" alt="Sistema de marketing con Laravel" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre">
                <span> Proyecto de prácticas profesionales: </span>
                Sistema de marketing para el envío de e-mails masivos pubilicitarios
              </p>
              <p class="categoria">HTML - CSS - Bootstrap - Javascript - Jquery - Laravel - PHP - MySQL </p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/6.jpg" data-lightbox="mygallery" data-title="Prototipo de videojuego serio basado en modelos de dinámica de sistemas para la simulación de politicas que impacten en el cambio climático">
                <img src="img/trabajos/6.jpg" alt="Videojuego serio con Unity" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Proyecto de grado: </span> Prototipo de videojuego serio basado en modelos de dinámica de sistemas para la simulación de politicas que impacten en el cambio climático</p>
              <p class="categoria">C# - Unity - Dinámica de sistemas - Vensim</p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/3.jpg" data-lightbox="mygallery" data-title="Prototipo de red social de imagenes (tipo instagram)Lorem Ipsum">
                <img src="img/trabajos/3.jpg" alt="Sistema de red social de imagenes con Laravel" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Proyecto de práctica: </span> Prototipo de red social de imagenes (tipo instagram)</p>
              <p class="categoria">HTML - CSS - Bootstrap - Javascript - Jquery - Laravel - PHP - MySQL</p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/2.jpg" data-lightbox="mygallery" data-title="Tienda virtual">
                <img src="img/trabajos/2.jpg" alt="Tienda virtual con PHP" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Proyecto de práctica: </span> Tienda virtual</p>
              <p class="categoria">HTML - CSS - PHP - MVC - MySQL</p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/1.jpg" data-lightbox="mygallery" data-title="Blog de videojuegos">
                <img src="img/trabajos/1.jpg" alt="Blog de videojuegos con PHP" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Proyecto de práctica: </span> Blog de videojuegos</p>
              <p class="categoria">HTML - CSS - PHP - MySQL</p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/4.jpg" data-lightbox="mygallery" data-title="Portals Wonderland, videojuego 1 vs 1 de plataformas">
                <img src="img/trabajos/4.jpg" alt="Videojuego de plataformas con Unity" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Proyecto universitario de fin de curso: </span> Portals Wonderland, videojuego 1 vs 1 de plataformas</p>
              <p class="categoria"> C# - Unity </p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/7.jpg" data-lightbox="mygallery" data-title="Mi primer videojuego 1 vs 1 de plataformas">
                <img src="img/trabajos/7.jpg" alt="Videojuego de plataformas con Unity" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Proyecto universitario: </span> Mi primer videojuego 1 vs 1 de plataformas</p>
              <p class="categoria"> C# - Unity </p>
            </div>
          </div>
          <div class="trabajo">
            <div class="thumb">
              <a href="img/trabajos/8.jpg" data-lightbox="mygallery" data-title="Portafolio profesional">
                <img src="img/trabajos/8.jpg" alt="Portafolio profesional con HTML y CSS" />
              </a>
            </div>
            <div class="descripcion">
              <p class="nombre"><span> Portafolio profesional </span></p>
              <p class="categoria"> HTML - CSS - Javascript - Jquery - PHP </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <footer>
    <section class="contacto" id="contacto">
      <div class="contenedor">
        <h3 class="titulo">Contacto</h3>
        <form class="formulario" action="enviarMail.php" method="POST">
          <input type="text" placeholder="Nombre" name="nombre" required minlength="3" maxlength="50" pattern="[A-Za-z]+"/>
          <input type="email" placeholder="Correo" name="correo" required  minlength="3" maxlength="50"/>
          <textarea name="mensaje" placeholder="Mensaje:" required></textarea>
          <input class="boton" type="submit" value="Enviar" />
        </form>
      </div>
    </section>

    <section class="redes-sociales">
      <div class="contenedor">
        <a href="https://www.github.com/acasadiegos" class="github"><i class="fa fa-github" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/andres.casadiegogomez" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      </div>
    </section>
  </footer>
  <?php borrarErrores(); ?>

  
  <script src="js/efectos.js"></script>
</body>

</html>