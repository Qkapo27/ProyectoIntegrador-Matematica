<?php
    $URL="http://localhost/Matematica/Web/";
    // $URL="https://proyecto-integrador-mri.000webhostapp.com/";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrador</title>
    <link rel="shortcut icon" href="Public/Img/Logo.png" class="">
    <link rel="stylesheet" href="Public/css/bootstrap.css">
    <style>
        *{
            font-family: monospace;
        }
        .banner-img{
            background-image: url(Public/Img/portada.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
        <?php include("Public/php/Part/NavBars.php")?>
    <!-- Fin Navbar -->
    <!-- Header -->
        <div class="banner-img w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="bg-white rounded-pill shadow-lg bg-opacity-75" >
                    <h1  class="text-center fw-bold text-dark" >
                        Integrador
                    </h1>
                    <p class="fw-bolder text-success fs-3 text-center">
                        Integrantes:
                        <ul class="list-group-flush">
                            <li class="fw-bold text-dark list-group-item text-center fs-4">Cativa Alesandro</li>
                            <li class="fw-bold text-dark list-group-item text-center fs-4">Vera Diego</li>
                            <li class="fw-bold text-dark list-group-item text-center fs-4">Miranday Luca</li>
                            <li class="fw-bold text-dark list-group-item text-center fs-4">Loyola Agustin</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container">
        <div class="container">
            <!-- Matematica -->
            <h1 class="text-center mt-5">Matematica</h1>
            <h3 class="text-center">Temas</h3>
            <div class="container mb-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- GeoGebra -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/GeoGebra.png" class="card-img-top  mx-auto d-block mt-5 pt-3">
                                <h5 class="text-center pt-3">
                                    GeoGebra
                                </h5>
                                <p class="text-center pb-5">
                                    Es un software de matemáticas dinámicas libre para todas las áreas de las matemáticas escolares. 
                                </p>
                                <a href="<?php echo $URL?>Layout/Matematica/Geogebra.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                    <!-- Derivadas -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Derivada.jpg" class="card-img-top mx-auto d-block">
                                <h5 class="text-center pt-3">
                                    Derivadas.
                                </h5>
                                <p class="text-center">
                                    La derivada es el resultado de un límite y representa la pendiente de la recta tangente a la gráfica de la función en un punto.
                                </p>
                                <a href="<?php echo $URL?>Layout/Matematica/Derivadas.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                    <!-- Integrales -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Integrales.jpg" class="card-img-top mx-auto d-block mt-5">
                                <h5 class="text-center pt-3">
                                    Integrales
                                </h5>
                                <p class="text-center pb-4">
                                    Administra de forma centralizada todas las áreas de recursos humanos en tu empresa bajo una única app.
                                </p>
                                <a href="<?php echo $URL?>Layout/Matematica/Integrales.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Redes de datos -->
            <h1 class="text-center mt-5">Redes de datos</h1>
            <h3 class="text-center">Temas</h3>
            <div class="container mb-5">
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Pagina web -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/RD/PW.jpg" class="card-img-top  mx-auto d-block">
                                <h5 class="text-center pt-3">
                                    Pagina web
                                </h5>
                                <p class="text-center">
                                    Es un componente fundamental de Internet y se utiliza para presentar contenido en línea de manera accesible y estructurada.
                                </p>
                                <a href="<?php echo $URL?>Layout/Redes/Pagina-web.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                    <!-- Proteger -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/RD/Proteger.jpg" class="card-img-top mx-auto d-block">
                                <h5 class="text-center pt-3">
                                    Proteger identidad en internet.
                                </h5>
                                <p class="text-center pb-4">
                                    Proteger la identidad en internet es asegurar la privacidad y seguridad de tus datos personales online.
                                </p>
                                <a href="<?php echo $URL?>Layout/Redes/Proteger-Identidad.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                    <!-- Tecnologia inalambricas -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/RD/Tecnologia-Inalambrica.jpg" class="card-img-top mx-auto d-block pt-4" style="background-color: #63DB9E;">
                                <h5 class="text-center pt-3">
                                    Tecnologia inalambricas
                                </h5>
                                <p class="text-center">
                                    Es aquella que permite la comunicación entre dispositivos sin la necesidad de conexiones físicas por cables.
                                </p>
                                <a href="<?php echo $URL?>Layout/Matematica/Tecnologia-Inalambrica.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                </div>
            </div>
            <!-- Instalacion y Mantenimiento de HyS-->
            <h1 class="text-center mt-5">Instalacion y Mantenimiento de <br><strong>Hardware y Software </strong></h1>
            <h3 class="text-center">Temas</h3>
            <div class="container mb-5">
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Dominio nivel superior -->
                        <div class="col">
                            <div class="card">
                                <div style="background-color: #F1F1F1;">
                                    <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio-Superior.webp" class="card-img-top  mx-auto d-block mt-5 pt-4" >
                                </div>
                                <h5 class="text-center pt-3">
                                    Dominio nivel superior
                                </h5>
                                <p class="text-center mb-5">
                                    Indica el tipo de organización o categoría a la que pertenece el sitio web.
                                </p>
                                <a href="<?php echo $URL?>Layout/Instalacion/Dominio.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                    <!-- Netiqueta -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/Ins/Netiqueta.jpg" class="card-img-top mx-auto d-block">
                                <h5 class="text-center pt-3">
                                    Netiqueta.
                                </h5>
                                <p class="text-center mb-5">
                                    La netiqueta es un conjunto de normas y reglas de etiqueta que se aplican al comportamiento en línea.
                                </p>
                                <a href="<?php echo $URL?>Layout/Instalacion/Netiqueta.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                    <!-- Linea del tiempo -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/Ins/Evolucion.jpg" class="card-img-top mx-auto d-block pt-4">
                                <h5 class="text-center pt-3">
                                    Evolución de la computadora
                                </h5>
                                <p class="text-center">
                                    La Evolución de las computadoras tiene una larga trayectoria y no comienza con el silicio y la electrónica.
                                </p>
                                <a href="<?php echo $URL?>Layout/Instalacion/Evolucion.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                        <!-- SO Tiempo Real -->
                        <div class="col">
                            <div class="card">
                                <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO.webp" class="card-img-top mx-auto d-block pt-4">
                                <h5 class="text-center pt-3">
                                    Sistema Operativo de <strong>Tiempo Real </strong>
                                </h5>
                                <p class="text-center">
                                    Su prioridad es la respuesta inmediata a eventos en lugar de atender las necesidades del usuario.
                                </p>
                                <a href="<?php echo $URL?>Layout/Instalacion/SO-TReal.php" class="btn btn-outline-info">Leer más</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>