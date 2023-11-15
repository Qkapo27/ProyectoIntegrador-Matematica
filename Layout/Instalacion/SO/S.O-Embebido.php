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
    <link rel="stylesheet" href="../../../Public/css/bootstrap.css">
    <style>
        *{
            font-family: monospace;
        }
        .banner-img{
            background-image: url(../../../Public/Img/portadaIns.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include("../../../Public/php/Part/NavBars.php")?>
    <!-- Fin Navbar -->
    <!-- Header -->
        <div class="banner-img w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="bg-white rounded-pill shadow-lg bg-opacity-75" >
                    <h1  class="text-center fw-bold text-dark p-2">
                        Instalacion y mantenimiento de <strong>hardware</strong> y <strong>software</strong>
                    </h1>
                    <h2 class="text-center fw-bold text-dark p-2">Sistema <strong>Embebido</strong></h2>
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
                                Un sistema embebido, también conocido como sistema empotrado o sistema integrado, es un sistema de cómputo diseñado para realizar tareas específicas o funciones dedicadas, generalmente en un dispositivo o sistema más amplio. A diferencia de las computadoras personales convencionales, que están diseñadas para ejecutar una amplia gama de aplicaciones, los sistemas embebidos están destinados a cumplir un propósito particular y, a menudo, funcionan sin la interacción directa del usuario.
                            </p>
                        </div>
                    </div>
                    <!-- Img -->
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Embebido/embebido-concepto.png" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            
        <!-- Características -->
            <div class="card mt-5 bg-light mb-5" id="Características">
                <h1 class="text-center bg-light"><strong class="text-info">Características</strong></h1>
                <div class="card ">
                    <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <p class="card-text">
                                        <ul class="list-group list-group-numbered">
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Limitación de recursos</strong>: Los sistemas embebidos a menudo tienen recursos limitados, como procesadores, memoria y almacenamiento, ya que se optimizan para su tarea específica y no necesitan la versatilidad y potencia de las computadoras personales.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Tiempo real</strong>: Muchos sistemas embebidos funcionan en tiempo real, lo que significa que deben responder a eventos y entradas en un plazo determinado. Esto es fundamental en aplicaciones críticas, como el control de vuelo, donde la latencia es crítica.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Conectividad y redes:</strong>: A medida que la tecnología avanza, muchos sistemas embebidos están incorporando capacidades de conectividad para comunicarse con otros dispositivos o sistemas, lo que permite la creación de sistemas más interconectados.
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        <!-- Ejemplos -->
            <div class="card mt-5 mb-5 pt-5" id="Ejemplos">
                <h1 class="text-center text-bg-info">Ejemplos</h1>
                <!-- Sistema de Navegación GPS en Automóviles -->
                <div class="row g-0 p-3">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Embebido/gps.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Sistema de Navegación GPS en Automóviles</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Los sistemas de navegación integrados en vehículos, como los sistemas de GPS, son ejemplos de sistemas embebidos. Estos sistemas están diseñados para proporcionar indicaciones de navegación, información de tráfico en tiempo real y otros servicios relacionados con la conducción, todo en un paquete integrado en el automóvil. Funcionan en tiempo real para ayudar a los conductores a navegar por rutas y llegar a su destino.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Electrodomésticos Inteligentes -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Electrodomésticos Inteligentes</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Muchos electrodomésticos modernos, como lavadoras, refrigeradores y hornos, utilizan sistemas embebidos para automatizar tareas y brindar funcionalidades avanzadas. Por ejemplo, un horno con sistema embebido puede ofrecer funciones de cocina programable y control de temperatura preciso, mientras que una lavadora inteligente puede ajustar automáticamente ciclos de lavado y consumo de agua según las necesidades.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Embebido/Smarts.webp" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                <hr>
                <!-- Dispositivos Médicos -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Embebido/Medico.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Dispositivos Médicos</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Dispositivos multimedia, como reproductores de DVD y sistemas de entretenimiento en el automóvil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>