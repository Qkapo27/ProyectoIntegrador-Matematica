<?php
    $URL="http://localhost/Matematica/Web/"
    // $URL="https://proyecto-integrador-mri.000webhostapp.com/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalacion y mantenimiento de hardware y software</title>
    <link rel="shortcut icon" href="<?php echo $URL?>Public/Img/Logo.png" class="">
    <link rel="stylesheet" href="../../Public/css/bootstrap.css">
    <link rel="stylesheet" href="../../Public/css/timeline.css">
    <style>
        *{
            font-family: monospace;
        }
        .banner-img{
            background-image: url(../../Public/Img/portadaIns.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include("../../Public/php/Part/NavBars.php")?>
    <!-- Fin Navbar -->
    <!-- Header -->
        <div class="banner-img w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="bg-white rounded-pill shadow-lg bg-opacity-75" >
                    <h1  class="text-center fw-bold text-dark p-2">
                        Instalacion y mantenimiento de <strong>hardware</strong> y <strong>software</strong>
                    </h1>
                    <h2 class="text-center fw-bold text-dark p-2">Sistema Operativos en <strong>Tiempo real</strong></h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-1"></div>
                    <!-- Texto -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info">Concepto</h5>
                            <hr>
                            <p class="card-text fs-4">
                                Un sistema operativo en tiempo real (RTOS, por sus siglas en inglés, Real-Time Operating System) es un tipo de sistema operativo diseñado específicamente para gestionar tareas y procesos con requisitos de tiempo real. Los sistemas en tiempo real son críticos para aplicaciones en las que la velocidad de procesamiento y la capacidad de respuesta son esenciales. Aquí tienes información sobre los conceptos, características, aplicaciones y campos de aplicación de los sistemas operativos en tiempo real:
                            </p>
                        </div>
                    </div>
                    <!-- Img -->
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Tiempo-real.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            
        <!-- Características -->
            <div class="card mt-5 bg-light mb-5" id="Características">
                <h1 class="text-center bg-light"><strong class="text-info">Características</strong></h1>
                <div class="card ">
                    <div class="row g-0">
                        <!-- Ventajas -->
                            <div class="col-md-12">
                                <div class="card-body">
                                    <p class="card-text">
                                        <ul class="list-group list-group-numbered">
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Control Industrial</strong>: Se utilizan para controlar maquinaria y procesos en tiempo real en la industria manufacturera y procesos químicos.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Manejo de Interrupciones Eficiente</strong>: Son capaces de procesar ráfagas de miles de interrupciones por segundo sin perder eventos importantes, lo que los hace ideales para aplicaciones donde las interrupciones son frecuentes.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Tiempo real duro o blando</strong>: Los RTOS pueden ser de tiempo real duro, donde la respuesta se considera crítica y debe ser instantánea, o de tiempo real suave, donde se permiten ciertas desviaciones en los plazos.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Multitarea en tiempo real</strong>: Los RTOS son eficientes para administrar múltiples tareas que se ejecutan simultáneamente.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Gestión de Memoria Eficiente</strong>: La gestión de memoria en los RTOS es menos exigente que en sistemas de tiempo compartido, ya que los procesos suelen ser residentes permanentemente en la memoria para garantizar una respuesta rápida.
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        <!-- Aplicaciones -->
            <div class="card mt-5" id="Aplicaciones">
                <h1 class="text-center text-bg-info">Aplicaciones</h1>
                <!-- Automatización industrial -->
                <div class="row g-0 p-3">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Automatización industrial.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Automatización industrial</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Control de maquinaria, robótica industrial y sistemas de control de procesos.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Automoción -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Automoción
                            </h5>
                            <hr>
                            <p class="card-text fs-3">
                                Sistemas de control del motor, frenado y seguridad, así como en vehículos autónomos.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Automoción.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                <hr>
                <!-- Electrónica de consumo -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Electrónica de consumo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Electrónica de consumo</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Dispositivos multimedia, como reproductores de DVD y sistemas de entretenimiento en el automóvil.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Aeroespacial y defensa -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Aeroespacial y defensa</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Sistemas de navegación, aviónica y control de misiles.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Aeroespacial y defensa.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        <!-- Campos de Aplicación -->
            <div class="card mt-5" id="Campos">
                <h1 class="text-center text-bg-info">Campos de Aplicación</h1>
                <!-- Control en tiempo real -->
                <div class="row g-0 p-3">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/tiempo real.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Control en tiempo real</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Los RTOS se utilizan en sistemas de control de procesos industriales para garantizar la estabilidad y el rendimiento en tiempo real.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Seguridad crítica -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Seguridad crítica.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Seguridad crítica</h5>
                            <hr>
                            <p class="card-text fs-3">
                                En aplicaciones como la aeroespacial y la automoción, los RTOS se utilizan para garantizar la seguridad de los sistemas.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Telecomunicaciones y redes -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Telecomunicaciones y redes.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Telecomunicaciones y redes</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Los RTOS son esenciales para garantizar el funcionamiento eficiente de los dispositivos de red y los servicios de telecomunicaciones.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Salud y atención médica -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Salud y atención médica.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Salud y atención médica</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Los equipos médicos dependen de RTOS para garantizar la precisión y la confiabilidad en tiempo real.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Robótica y automatización -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Robótica y automatización.webp" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Robótica y automatización</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Los sistemas de robótica e automatización requieren RTOS para coordinar múltiples tareas y procesos de manera sincronizada.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="../../Public/js/Tecnologia-Inalambrica.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>