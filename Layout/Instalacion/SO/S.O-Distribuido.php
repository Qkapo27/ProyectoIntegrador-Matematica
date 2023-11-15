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
                    <h2 class="text-center fw-bold text-dark p-2">Sistema <strong>Distribuido</strong></h2>
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
                                Un sistema distribuido se refiere a un conjunto de componentes de software y hardware que se ejecutan en múltiples computadoras interconectadas y colaboran para lograr una tarea o conjunto de tareas comunes. A diferencia de un sistema centralizado, donde un solo servidor o computadora maneja todas las operaciones, un sistema distribuido distribuye la carga y las funciones entre varias máquinas que pueden estar geográficamente separadas. A continuación, se describen algunas características y conceptos clave relacionados con los sistemas distribuidos:
                            </p>
                        </div>
                    </div>
                    <!-- Img -->
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Distribuido/distribuido-concepto.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
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
                                                <strong class="text-success fs-4">Interconexión de Computadoras</strong>: Los sistemas distribuidos constan de múltiples computadoras o nodos que se conectan mediante una red, ya sea una red local (LAN), una red de área amplia (WAN) o incluso Internet. Esta interconexión permite la comunicación y la colaboración entre los nodos.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Cooperación y Colaboración</strong>: En un sistema distribuido, los nodos trabajan juntos para lograr tareas específicas. Esto implica la comunicación y la coordinación entre los componentes distribuidos para lograr objetivos comunes.
                                            </li>
                                            <li class="list-group-item fs-5">
                                                <strong class="text-success fs-4">Escalabilidad:</strong>: Los sistemas distribuidos suelen ser escalables, lo que significa que pueden crecer para satisfacer las demandas cambiantes. Pueden agregar más nodos o recursos para aumentar su capacidad y rendimiento a medida que sea necesario.
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
            <!-- La World Wide Web (WWW): -->
                <div class="row g-0 p-3">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Distribuido/www.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">La World Wide Web (WWW):</h5>
                            <hr>
                            <p class="card-text fs-3">
                                La WWW es un sistema distribuido a escala global que utiliza servidores web y navegadores para permitir el acceso y la navegación por páginas web en Internet. Los servidores web almacenan y ofrecen contenido, mientras que los navegadores, que se ejecutan en computadoras de usuarios, solicitan y muestran las páginas web. Este sistema distribuido permite a las personas acceder y compartir información en todo el mundo.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Redes Sociales en Línea -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Redes Sociales en Línea</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Plataformas de redes sociales como Facebook, Twitter e Instagram son ejemplos de sistemas distribuidos que permiten a los usuarios interactuar y compartir contenido con otros usuarios en línea. Estas plataformas utilizan servidores distribuidos para almacenar perfiles de usuarios, publicaciones, fotos y videos, y permiten a los usuarios acceder a la información y comunicarse entre sí a través de múltiples nodos en la red.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Distribuido/RD.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                <hr>
                <!-- Sistemas de Nube (Cloud Computing): -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/SO/Distribuido/Cloud.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Sistemas de Nube (Cloud Computing):</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Los servicios en la nube, como Amazon Web Services (AWS), Microsoft Azure y Google Cloud, son ejemplos de sistemas distribuidos utilizados para proporcionar recursos informáticos y almacenamiento a usuarios y organizaciones en todo el mundo. Estos sistemas distribuidos utilizan una infraestructura global de servidores para ofrecer servicios de computación, almacenamiento y redes a través de Internet, lo que permite a las empresas y particulares acceder a recursos informáticos de manera escalable y rentable.
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