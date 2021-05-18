<?php require_once 'session.php'; ?>
<?php require_once 'helpers.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andrés Casadiegos</title>

    <!-- Icon -->
    <link rel="icon" href="img/portafolio.ico">

    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
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
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">ANDRES CASADIEGOS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-about" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-services" href="#">Conocimientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-proyects" href="#">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-subscribe" href="#">Contacto</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


        <!--  ======================= Start Banner Area =======================  -->
        <section class="site-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text">Hey</h3>
                        <h1 class="title-text text-uppercase">Soy Andrés Casadiegos</h1>
                        <h4 class="title-text text-uppercase">Ingeniero de sistemas</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="https://www.github.com/acasadiegos" type="button" class="btn button primary-button mr-4 text-uppercase">GITHUB</a>
                                <a href="descargar.php?archivo=DiplomasCertificados.pdf" type="button" class="btn button secondary-button text-uppercase mr-4">DIPLOMAS / CERTIFICADOS</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->

        <section class="about-area" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Permíteme</span>
                            <span>presentarme</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                Profesional de ingeniería de sistemas, graduado de la Universidad Autónoma de Bucaramanga. 
                                Con conocimientos y capacidades en el área de desarrollo web (backend y frontend), bases de datos, 
                                desarrollo de videojuegos, dinámica de sistemas, análisis y documentación de requerimientos.
                            </p>
                            <p class="para">
                                Soy un joven apasionado con la programación, responsable en las tareas asignadas, con un espiritú
                                competitivo y de mejoraramiento continuo tanto personal como profesional, en busca de oportunidades en las
                                cuales desarrollar todos mis conocimientos.
                            </p>
                        </div>
                        <a href="descargar.php?archivo=cv.pdf" type="button" class="btn button primary-button text-uppercase">Descargar CV</a>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <!--  ======================== End Brand Area ==============================  -->

        <!--  ====================== Start Services Area =============================  -->

        <section class="services-area" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">Conocimientos</h1>
                        <p class="para">
                            Las siguientes son las tecnologías, lenguajes y herramientas que manejo.
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/html.png" alt="Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">HTML</h5>
                                    <p class="card-text text-secondary">
                                        90%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/css.png" alt="Services-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">CSS</h5>
                                    <p class="card-text text-secondary">
                                        70%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/sass.png" alt="Services-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">SASS</h5>
                                    <p class="card-text text-secondary">
                                        70%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/bootstrap.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Bootstrap</h5>
                                    <p class="card-text text-secondary">
                                        70%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/js.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Javascript</h5>
                                    <p class="card-text text-secondary">
                                        65%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/jquery.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Jquery</h5>
                                    <p class="card-text text-secondary">
                                        50%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/php.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">PHP</h5>
                                    <p class="card-text text-secondary">
                                        75%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/laravel.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Laravel</h5>
                                    <p class="card-text text-secondary">
                                        80%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/java.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Java</h5>
                                    <p class="card-text text-secondary">
                                        70%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/csharp.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">C#</h5>
                                    <p class="card-text text-secondary">
                                        60%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/unity.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Unity 2D</h5>
                                    <p class="card-text text-secondary">
                                        60%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/postgresql.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">PostgreSQL</h5>
                                    <p class="card-text text-secondary">
                                        80%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/mysql.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">MySQL</h5>
                                    <p class="card-text text-secondary">
                                        80%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/git.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">GIT / GITHUB</h5>
                                    <p class="card-text text-secondary">
                                        80%
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/uml.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Documentación de software</h5>
                                    <p class="card-text text-secondary">
                                        80%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== End Services Area =============================  -->

        <!--  ======================= Project Area =============================  -->

        <section class="project-area" id="projects">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Proyectos</h1>
                </div>

                <div class="button-group">
                    <button type="button" class="active" id="btn1" data-filter="*">Todos</button>
                    <button type="button" data-filter=".practicas-profesionales">Praticas profesionales</button>
                    <button type="button" data-filter=".tesis">Tesis</button>
                    <button type="button" data-filter=".universidad">Proyectos universitarios</button>
                    <button type="button" data-filter=".practica">Proyectos de práctica</button>
                </div>

                <div class="container">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                                        <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Blog de videojuegos</h4>
                                    <span class="text-secondary">Blog de videojuegos que permite loggearse, registrarse, crear
                                        y ver entradas separadas por categorías.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                                        <img src="./img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Tienda de camisetas</h4>
                                    <span class="text-secondary">Mini ecommerce que permite logearse como administrador o cliente.
                                        El administrador puede gestionar categorias y productos, mientras que los clientes pueden agregar
                                        esos productos al carrito de compras y realizar un pedido.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                        <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Larafoto</h4>
                                    <span class="text-secondary">Prototipo de red social de imagenes (tipo instagram). Permite 
                                        logearse, registrarse, gestionar imagenes propias y visualizar las de otros usuarios. Se pueden
                                        buscar usuarios y también comentar en imagenes propias o de terceros.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item universidad">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                        <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Portals Wonderland</h4>
                                    <span class="text-secondary">Videojuego 2D uno contra uno, donde dos astronautas pelean
                                        con una pistola de portales, abriendo estratégicamente portales en el mapa para que su 
                                        contrincante caiga en algunas de las trampas.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practicas-profesionales">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                        <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">e-Mailing</h4>
                                    <span class="text-secondary">Sistema de marketing para el envío de correos masivos 
                                        a contactos suscritos a diferencias audiencias. El sistema web también muestra
                                        estadísticas de las campañas creadas y cómo los usuarios pertenecientes a 
                                        una audiencia, interactuan con los mails.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item tesis">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                        <img src="./img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">CC Experience</h4>
                                    <span class="text-secondary">Prototipo de videojuego serio basado en modelos de 
                                        dinámica de sistemas para la simulación de politicas que impacten en el 
                                        cambio climático.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item universidad">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                        <img src="./img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">1v1 Game</h4>
                                    <span class="text-secondary">Mi primer videojuego de plataformas. El objetivo es conseguir suficientes monedas
                                        para derribar el muro, obtener la calavera y matar al contrincante que está del otro lado.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                        <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Portafolio v1</h4>
                                    <span class="text-secondary">Primera versión de mi portafolio profesional.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                        <a href="https://acasadiegos.github.io/PlantillaRestaurante/" target="_blank">
                                            <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                                        </a>
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Plantilla de un café</h4>
                                    <span class="text-secondary">Landing page, plantilla para un café/restaurante. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p10.jpg">
                                        <a href="https://acasadiegos.github.io/PlantillaStartup/" target="_blank">
                                            <img src="./img/portfolio/p10.jpg" alt="portfolio-10" class="img-fluid">
                                        </a>
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Plantilla para una Startup</h4>
                                    <span class="text-secondary">Landing page, plantilla para una startup. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item practica">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p11.jpg">
                                        <a href="https://acasadiegos.github.io/EasyBank_LadingPage/" target="_blank">
                                            <img src="./img/portfolio/p11.jpg" alt="portfolio-11" class="img-fluid">
                                        </a>
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Easybank Landing Page</h4>
                                    <span class="text-secondary">Reto propuesto por el sitio web Codementor, 
                                        elaborar una landing page responsive para un banco. </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================= End Project Area =============================  -->

        <!--  ========================== Subscribe me Area ============================  -->
        <section class="subscribe-us-area" id="subscribe">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase">CONTACTAME</h4>
                    </div>
                </div>
                <form class="formulario" action="enviarMail.php" method="POST">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 mb-5 input-textbox">
                            <div class="d-flex justify-content-center">
                                <input type="text" id="txtemail" name="correo" class="form-control" placeholder="Email" required minlength="3" maxlength="50">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 mb-5 input-textbox">
                            <div class="d-flex justify-content-center">
                                <input type="text" id="txtnombre" name="nombre" class="form-control" placeholder="Nombre" required minlength="3" maxlength="50" pattern="[A-Za-z]+">
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5 input-textbox">
                            <textarea type="text" id="txtmensaje" name="mensaje" class="form-control" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="btn-submit d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--  ========================== End Subscribe me Area ============================  -->


    </main>
    <!--  ======================= End Main Area ================================ -->

    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="social text-center">
                    <h5 class="text-uppercase">Mis redes</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <?php borrarErrores(); ?>
    
    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./js/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./js/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./js/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js main file  -->
    <script src="./js/main.js"></script>

    <!-- custom js animations file-->
    <script src="./js/efectos.js"></script>
    


</body>

</html>