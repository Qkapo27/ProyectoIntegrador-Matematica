<?php
    $URL="http://localhost/Matematica/Web/"
    // $URL="https://proyecto-integrador-mri.000webhostapp.com/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes de datos</title>
    <link rel="shortcut icon" href="<?php echo $URL?>Public/Img/Logo.png" class="">
    <link rel="stylesheet" href="../../Public/css/bootstrap.css">
    <link rel="stylesheet" href="../../Public/css/timeline.css">
    <style>
        *{
            font-family: monospace;
        }
        .banner-img{
            background-image: url(../../Public/Img/PortadaRed.jpg);
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
                        Redes de datos
                    </h1>
                    <h2 class="text-center fw-bold text-dark p-2">Tecnologia Inalambrica</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/t1.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info">Concepto</h5>
                            <hr>
                            <p class="card-text fs-4">La tecnología inalámbrica se refiere a sistemas y dispositivos que permiten la transmisión de datos, información o señales sin la necesidad de cables físicos. Estos sistemas utilizan ondas electromagnéticas, como ondas de radio, microondas e infrarrojos, para la comunicación entre dispositivos, lo que los hace ideales para la conexión de dispositivos móviles y la creación de redes de comunicación sin necesidad de cables físicos.

                                La tecnología inalámbrica se utiliza en una variedad de aplicaciones, desde redes de comunicación móvil, como las redes 4G y 5G, hasta la conexión de dispositivos Bluetooth, Wi-Fi, sistemas de comunicación por satélite, control remoto de dispositivos, transmisión de datos en redes de sensores y muchas otras áreas. Permite la movilidad y la flexibilidad en la comunicación, lo que la hace fundamental en la era moderna de la conectividad.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/t2.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
            </div>
    <!-- Tecnologias -->
        <div class="card mb-3" id="Tecnologia">
            <h1 class="text-center text-success">Tecnologia Inalambrica</h1>
            <!-- 1G (Primera Generación) -->
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-center text-info">1G (Primera Generación)</h5>
                            <hr>
                            <p class="card-text fs-3">La primera generación de tecnología móvil, conocida como 1G, se introdujo en la década de 1980. Esta tecnología permitía la comunicación de voz a través de teléfonos móviles analógicos. Las llamadas se realizaban a través de una red celular que utilizaba señales analógicas y eran susceptibles a interferencias y escuchas no autorizadas.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/1G.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- 2G (Segunda Generación) -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/2G.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">2G (Segunda Generación)</h5>
                            <hr>
                            <p class="card-text fs-3">La segunda generación, o 2G, surgió a fines de la década de 1980 y principios de la década de 1990. Esta tecnología introdujo la comunicación digital, lo que permitió la transmisión de voz y mensajes de texto. También se mejoró la seguridad y la eficiencia de la red en comparación con la 1G. Los estándares 2G más conocidos son el GSM (Global System for Mobile Communications) y el CDMA (Code Division Multiple Access).</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 3G (Tercera Generación) -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">3G (Tercera Generación)</h5>
                            <hr>
                            <p class="card-text fs-3">La tercera generación, o 3G, se desarrolló en la década de 2000. Esta tecnología permitió una mayor velocidad de transmisión de datos y proporcionó acceso a servicios de datos móviles, como Internet móvil, videollamadas y transmisión de medios. Los estándares 3G incluyen el UMTS (Sistema Universal de Telecomunicaciones Móviles) y el CDMA2000.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/3G.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- 4G (Cuarta Generación) -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/4G.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">4G (Cuarta Generación)</h5>
                            <hr>
                            <p class="card-text fs-3">La cuarta generación, o 4G, se introdujo a partir de 2009. Fue un gran avance en términos de velocidad y capacidad de datos. La tecnología 4G permitió velocidades de descarga mucho más rápidas que las generaciones anteriores, lo que hizo posible la transmisión de video de alta definición y servicios de Internet móvil más rápidos y eficientes. Los estándares 4G incluyen LTE (Evolución a Largo Plazo) y WiMAX (Worldwide Interoperability for Microwave Access).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Generación</th>
                        <th scope="col">Fechas</th>
                        <th scope="col">Inventor</th>
                        <th scope="col">Características</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1G</th>
                        <td>Años 80</td>
                        <td>NTT (Japón)	</td>
                        <td>Llamadas de voz analógicas</td>
                    </tr>
                    <tr>
                        <th scope="row">2G</th>
                        <td>Finales de los 80 a principios de los 90</td>
                        <td>Motorola</td>
                        <td>Llamadas digitales, SMS</td>
                    </tr>
                    <tr>
                        <th scope="row">3G</th>
                        <td>Finales de los 90 a principios de 2000</td>
                        <td>European Telecommunications Standards Institute</td>
                        <td>Datos y video móvil</td>
                    </tr>
                    <tr>
                        <th scope="row">4G</th>
                        <td>Inicios de 2010</td>
                        <td>IEEE (Instituto de Ingenieros Eléctricos y Electrónicos)</td>
                        <td>Alta velocidad de datos, streaming</td>
                    </tr>
                    <tr>
                        <th scope="row">5G</th>
                        <td>En despliegue a partir de 2019</td>
                        <td>Varios contribuyentes (no un solo inventor)</td>
                        <td>Alta velocidad, baja latencia, IoT, eficiencia energética</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <h1 class="text-center mt-5">Tecnologia 5G</h1>
            <div class="card mb-3" id="5G">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/5g.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info">Concepto</h5>
                            <hr>
                            <p class="card-text fs-4">Es la quinta generación de tecnología de red inalámbrica. Se caracteriza por su alta velocidad, baja latencia y capacidad para conectar una amplia gama de dispositivos, lo que la hace fundamental para la expansión de la Internet de las cosas (IoT). Las características principales del 5G incluyen:</p>
                        </div>
                    </div>
                    <ul>
                        <li class="fs-4 ms-5"><strong class="text-info">Velocidad</strong>: Ofrece velocidades de descarga de varios gigabits por segundo, superando con creces a las generaciones anteriores.
                        </li>
                        <li class="fs-4 ms-5"><strong class="text-info">Baja latencia</strong>: Reducción significativa del tiempo de respuesta entre dispositivos, crucial para aplicaciones que requieren respuestas instantáneas, como la realidad virtual, los vehículos autónomos, entre otros.
                        </li>
                        <li class="fs-4 ms-5"><strong class="text-info">Capacidad de conexión</strong>: Puede manejar una gran cantidad de dispositivos conectados simultáneamente, lo que es fundamental para el avance de la IoT y la comunicación de máquina a máquina.
                        </li>
                        <li class="fs-4 ms-5"><strong class="text-info">Eficiencia energética</strong>: Está diseñada para ser más eficiente en términos de energía en comparación con sus predecesoras, lo que la hace más amigable con el medio ambiente.
                        </li>
                    </ul>
                </div>
                <h1 class="text-center text-bg-light mt-5">Ventajas</h1>
                <ul>
                    <li class="fs-4 ms-5"><strong class="text-success">Avances en la conectividad</strong>: Permiten una comunicación más rápida y eficiente, facilitando la vida cotidiana y el progreso tecnológico.
                    </li>
                    <li class="fs-4 ms-5"><strong class="text-success">Desarrollo de la IoT</strong>: Impulsa la interconexión de dispositivos, mejorando sectores como la salud, transporte y seguridad.
                    </li>
                    <li class="fs-4 ms-5"><strong class="text-success">Innovación y crecimiento económico</strong>: Estimula la innovación y la creación de nuevas industrias.
                    </li>
                </ul>
                <h1 class="text-center text-bg-light mt-5">Consecuencias para el medio ambiente y los seres humanos</h1>
                <ul>
                    <li class="fs-4 ms-5"><strong class="text-danger">Impacto ambiental</strong>: El aumento en el uso de tecnologías inalámbricas puede generar mayores emisiones de carbono, especialmente con la construcción de infraestructura para 5G.
                    </li>
                    <li class="fs-4 ms-5"><strong class="text-danger">Salud humana</strong>: Aunque las investigaciones están en curso, algunas personas expresan preocupación por posibles efectos en la salud debido a la exposición a ondas electromagnéticas, aunque no se ha establecido una conexión clara.
                    </li>
                </ul>
            </div>
            
            
        </div>
        <div class="container-fluid">
            <h1 class="text-center">Linea del tiempo</h1>
            <div id="timeline"></div>    
        </div>
        
        
      
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="../../Public/js/Tecnologia-Inalambrica.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>