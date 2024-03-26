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
    <link rel="stylesheet" href="./js/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./js/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./js/owl-carousel/css/owl.theme.default.min.css">


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
                            <a class="nav-link" id="btn-about" href="#about_area">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-services" href="#services_area">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-proyects" href="#projects_area">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="btn-subscribe" href="#subscribe_area">Contact</a>
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
                        <h1 class="title-text text-uppercase">I'm Andrés Casadiegos</h1>
                        <h4 class="title-text text-uppercase">Systems Engineer</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="https://www.github.com/acasadiegos" type="button" class="btn button primary-button mr-4 text-uppercase">GITHUB</a>
                                <a href="descargar.php?archivo=DiplomasCertificados.pdf" type="button" class="btn button secondary-button text-uppercase mr-4">DEGREES / CERTIFICATES</a>
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

        <section class="about-area" id="about_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Let me</span>
                            <span>introduce myself</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                            Systems engineering professional with 2 years of experience, graduated from the Autonomous University of
                             Bucaramanga. With experience, knowledge and skills working under the agile Scrum 
                             methodology in the area of web development (backend and frontend), databases, analysis 
                             and requirements documentation.
                            </p>
                            <p class="para">
                            I am a young man passionate about programming, responsible in the assigned tasks, with a competitive spirit 
                            and continuous improvement, both personal and professional, looking for opportunities in which to develop all 
                            my knowledge.
                            </p>
                        </div>
                        <a href="descargar.php?archivo=cv.pdf" type="button" class="btn button primary-button text-uppercase">Download CV</a>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <!--  ======================== End Brand Area ==============================  -->

        <!--  ====================== Start Services Area =============================  -->

        <section class="services-area" id="services_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">KNOWLEDGE</h1>
                        <p class="para">
                            The following are the technologies, languages and tools that I use.
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/csharp.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">C#</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    C# programming language
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/NET.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">.Net</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    .Net Framework, .Net Core and .Net. Web APIs Development, MVC, Microservices, Clean Architecture.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/Oracle.jpg" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Oracle</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    Oracle databases, with knowledge of PL/SQL. Stored procedures, functions, jobs, etc.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/sql-server.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">SQL Server</h5>
                                </div>
                                <p class="card-text text-secondary">
                                        SQL Server databases, with knowledge of Transact SQL. 
                                        Stored procedures, functions, jobs, etc.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/html.png" alt="Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">HTML</h5>
                                </div>
                                <p class="card-text text-secondary">
                                        HTML.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/css.png" alt="Services-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">CSS</h5>
                                </div>
                                <p class="card-text text-secondary">
                                        CSS.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/sass.png" alt="Services-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">SASS</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    SASS.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/bootstrap.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Bootstrap</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    Bootstrap.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/js.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Javascript</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    Javascript programming language.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/Angular.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Angular</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    Angular Framework for Front-end web development.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/php.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">PHP</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    PHP programming language.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/laravel.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Laravel</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    Laravel framework for MVC web development.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/solid.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">SOLID</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    SOLID principles for clean code development and good practices.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="services-img text-center py-4">
                                    <img src="./img/services/git.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">GIT / GITHUB</h5>
                                </div>
                                <p class="card-text text-secondary">
                                    Git.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== End Services Area =============================  -->

        <!--  ======================= Project Area =============================  -->

        <section class="project-area" id="projects_area">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Projects</h1>
                </div>

                <div class="button-group">
                    <button type="button" class="active" id="btn1" data-filter="*">All</button>
                    <button type="button" data-filter=".laboral">Job projects</button>
                    <button type="button" data-filter=".personal">Personal Projects</button>
                    <button type="button" data-filter=".practicas-profesionales">Internship</button>
                </div>

                <div class="container">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                        <img src="./img/portfolio/p4.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CONDOR/Login.aspx?ReturnUrl=%2fcondor" target="_blank">
                                            Billing Migration
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net Framework, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Descripción: </b>ERP change that involved developments on Condor, Sodexo's core card system, 
                                    to consume services in Azure and build stored procedures in charge of migrating customer and affiliate invoices to the new ERP.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                        <img src="./img/portfolio/p4.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CONDOR/Login.aspx?ReturnUrl=%2fcondor" target="_blank">
                                            Virtual Card
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net Framework, .NET 6.0, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Developments on Condor, Sodexo's core card system, and on the PaymentGateway microservice for activation of QR payments, 
                                        to allow customers to request, load and manage virtual cards that are enrolled in their mobile device, to later be able to make payments via QR.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                        <img src="./img/portfolio/p4.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CONDOR/Login.aspx?ReturnUrl=%2fcondor" target="_blank">
                                            Maintenance
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net Framework, Javascript, Typescript, Angular, CSS, Sass, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Maintenance work on Sodexo core systems such as: Front-end bug fixes, rest APIs, microservices and database procedures. 
                                        Changes in the look and feel of the applications, improvements in source code to optimize processes and implement patterns for clean code.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                        <img src="./img/portfolio/p4.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CONDOR/Login.aspx?ReturnUrl=%2fcondor" target="_blank">
                                            Delivery Tracking - Request and Generation of electronic guides
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net Framework, Azure Storage, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Implementation of functionality to request, obtain, store and present the guides for Sodexo card delivery 
                                        packages in the Condor application, consuming web services exposed by delivery logistics operators.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                        <img src="./img/portfolio/p4.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CONDOR/Login.aspx?ReturnUrl=%2fcondor" target="_blank">
                                            7Center - Implementation of multicontract option in state clients
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net Framework, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Project in the Condor application, with the objective of making adjustments throughout the system so that 
                                    state clients can support the option of managing multiple contracts for the same card product.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/nexoz.png">
                                        <img src="./img/portfolio/nexoz.png" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CalculadoraNexoz/Front/userAuthentication" target="_blank">
                                            Nexoz - PSE Payment
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net 5.0, Javascript, Typescript, Angular, CSS, Sass, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Front-end and back-end developments to implement payment with PSE in Sodexo's Nexoz application, 
                                        a platform where clients can request cash dispersions for their beneficiaries.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/nexoz.png">
                                        <img src="./img/portfolio/nexoz.png" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CalculadoraNexoz/Front/userAuthentication" target="_blank">
                                            Nexoz - Database normalization
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>.Net 5.0, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Normalization of tables in the database of Sodexo's Nexoz application, under the guidelines of the technical 
                                        leader of the project, to optimize queries and have a more decoupled and organized database model. Adjustments in the back-end of the application to adapt 
                                        it according to the changes made in normalization.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/nexoz.png">
                                        <img src="./img/portfolio/nexoz.png" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/CalculadoraNexoz/Front/userAuthentication" target="_blank">
                                            Nexoz - Rebranding
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>Javascript, Typescript, Angular, CSS, Sass, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Change in the entire design/look and feel of the Front-End of the Nexoz application, 
                                        in accordance with the guidelines of the brand change, or rebranding requested by Sodexo's parent company 
                                        for its entire business.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item laboral">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/conexo.png">
                                        <img src="./img/portfolio/conexo.png" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">                                
                                        <a href="https://transacciones.sodexhopass.com.co/AFILIADOS/pages/login" target="_blank">
                                            Conexo - Implementation of validations and messages
                                        </a>
                                    </h4>
                                    <span><b>Client: </b> Sodexo / Pluxee Colombia</span>
                                    <br/>
                                    <span><b>Technologies: </b>Javascript, Typescript, Angular, CSS, Sass, .Net Framework, Oracle PL/SQL</span>
                                    <br/>
                                    <br/>
                                    <span class="text-secondary"><b>Description: </b>Developments on the Conexo application, a voucher reading system for affiliate 
                                        establishments. The development consisted of implementing new validations and restrictions for loading bonuses, 
                                        and presenting on-screen messages and/or warnings according to these new validations.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item personal">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                                        <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Videogames blog</h4>
                                    <span class="text-secondary">Videogames blog that allows you to log in, register, 
                                        create and view entries separated by categories.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item personal">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                        <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Larafoto</h4>
                                    <span class="text-secondary">Prototype of social image network (Instagram type). 
                                        It allows you to log in, register, manage your own images and view those of other users. 
                                        You can search for users and also comment on your own or third-party images.
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
                                    <span class="text-secondary">Marketing system for sending mass emails to contacts subscribed to different audiences. 
                                        The web system also shows statistics of the campaigns created and how users belonging 
                                        to an audience interact with the emails.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item personal">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                        <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Portfolio v1</h4>
                                    <span class="text-secondary">First version of my professional portfolio.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item personal">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                        <a href="https://acasadiegos.github.io/PlantillaRestaurante/" target="_blank">
                                            <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                                        </a>
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Cafe template</h4>
                                    <span class="text-secondary">Landing page, template for a cafe/restaurant. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item personal">
                            <div class="our-project">
                                <div class="img">
                                    <a class="test-popup-link" href="./img/portfolio/p10.jpg">
                                        <a href="https://acasadiegos.github.io/PlantillaStartup/" target="_blank">
                                            <img src="./img/portfolio/p10.jpg" alt="portfolio-10" class="img-fluid">
                                        </a>
                                    </a>
                                </div>
                                <div class="title py-4">
                                    <h4 class="text-uppercase">Template for a startup</h4>
                                    <span class="text-secondary">Landing page, template for a startup. </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 element-item personal">
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
                                    <span class="text-secondary">Challenge proposed by the Codementor website, create a responsive landing 
                                        page for a bank.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================= End Project Area =============================  -->

        <!--  ========================== Subscribe me Area ============================  -->
        <section class="subscribe-us-area" id="subscribe_area">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase">CONTACT ME</h4>
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
                                <input type="text" id="txtnombre" name="nombre" class="form-control" placeholder="Name" required minlength="3" maxlength="50" pattern="[A-Za-z]+">
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5 input-textbox">
                            <textarea type="text" id="txtmensaje" name="mensaje" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="btn-submit d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Send</button>
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
                    <h5 class="text-uppercase">My social media</h5>
                    <a href="https://www.linkedin.com/in/andrés-eduardo-casadiegos-gómez-b579501b8/"><i class="fab fa-linkedin"></i></a>
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