<?php
    $URL="http://localhost/Matematica/Web/"
    // $URL="https://proyecto-integrador-mri.000webhostapp.com/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematica</title>
    <link rel="shortcut icon" href="../../Public/Img/Logo.png" class="">
    <link rel="stylesheet" href="../../Public/css/bootstrap.css">
    <style>
        *{
            font-family: monospace;
        }
        .banner-img{
            background-image: url(../../Public/Img/portadaMat.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include("../../Public/php/Part/NavBars.php")?>
    <!-- Fin Navbar -->
    <!-- Header -->
        <div class="banner-img vw-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="bg-white rounded-pill shadow-lg bg-opacity-75" >
                    <h1  class="text-center fw-bold text-dark p-2" >
                        Matemática
                    </h1>
                    <h2 class="text-center fw-bold text-dark p-2">Derivadas</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-danger">Concepto</h5>
                            <hr>
                            <p class="card-text fs-3">La derivada de una función en un punto dado representa la velocidad o la tasa de cambio instantánea de esa función en ese punto. En otras palabras, te dice cuánto cambia el valor de la función cuando te desplazas una cantidad infinitesimalmente pequeña a lo largo del eje x en ese punto específico. Si la derivada es positiva, la función está aumentando en ese punto; si es negativa, está disminuyendo; y si es igual a cero, la función alcanza un máximo o un mínimo en ese punto.</p>
                            <p class="card-text fs-3">Puedes imaginar la derivada como la pendiente de la recta tangente a la curva de la función en ese punto. Cuanto más empinada sea la tangente, mayor será el valor absoluto de la derivada en ese punto, lo que indica un cambio rápido en la función. Por otro lado, si la tangente es casi horizontal, la derivada será cercana a cero, lo que sugiere un cambio lento en la función.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Derivada1.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
            </div>

        <!-- Algunos usos -->
            <div class="card mt-5" id="usos">
                <h1 class="text-center text-bg-info">Algunos usos</h1>
                <!-- Análisis de funciones matemáticas -->
                    <div class="row g-0 p-3">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-info">Análisis de funciones matemáticas</h5>
                                <hr>
                                <p class="card-text fs-3">La derivada se utiliza para estudiar el comportamiento de funciones matemáticas, identificar máximos y mínimos, determinar la concavidad de una curva y entender la tasa de cambio en diversas situaciones.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Funciones.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                <hr>
                <!-- Economía -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Econo.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-info">Economía
                                </h5>
                                <hr>
                                <p class="card-text fs-3">La derivada se aplica en economía para analizar funciones de oferta y demanda, calcular elasticidades de precios y comprender la dinámica de los mercados.</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                <!-- Ingeniería -->
                    <div class="row g-0 p-3">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-info">Ingeniería</h5>
                                <hr>
                                <p class="card-text fs-3">La derivada se aplica en la ingeniería para diseñar sistemas de control automático, analizar la dinámica de sistemas mecánicos y eléctricos, y resolver problemas de transferencia de calor y fluidos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Inge.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                <hr>
                <!-- Medicina -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Matematica/medicina.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Medicina</h5>
                            <hr>
                            <p class="card-text fs-3">La derivada se utiliza en la modelización de sistemas biológicos y fisiológicos, como la difusión de medicamentos en el cuerpo o la propagación de enfermedades.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Ciencias de la computación -->
                    <div class="row g-0 p-3">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-info">Ciencias de la computación</h5>
                                <hr>
                                <p class="card-text fs-3">La derivada se utiliza en algoritmos de optimización, procesamiento de imágenes y reconocimiento de patrones en campos como la visión por computadora y el aprendizaje automático.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Geometria.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
            </div>
        <hr>
    <!-- Uso de las derivadas en la física -->
        <div class="card mt-5 pt-5 bg-light" id="física">
            <h1 class="text-center bg-light">Uso de las derivadas en la física</h1>
            <p class="ps-5 px-5 fs-4">La velocidad es una magnitud física que describe el cambio de posición de un objeto en relación al tiempo. En términos matemáticos, la velocidad se define como la derivada de la posición respecto al tiempo.</p>
            <p class="ps-5 px-5 fs-4">Si tenemos una <strong>función de posición x(t)</strong>, donde <strong>x</strong> representa <strong>la posición</strong> y <strong>t</strong> representa <strong>el tiempo</strong>, la <strong>velocidad promedio</strong> entre dos instantes de <strong>tiempo t1 y t2</strong> se calcula mediante la fórmula:</p>
            <ul>
                <li class="fs-4"><strong>v_promedio =</strong></li>
                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/v_promedio.jpg" alt="" class="img-fluid rounded-start">
                <li class="fs-4"><strong>La velocidad instantánea</strong> es <strong>la velocidad</strong> de <strong>un objeto en un punto específico</strong> y en <strong>un instante de tiempo particular</strong>. En contraste con la velocidad promedio, que se <strong>calcula entre dos puntos en un intervalo de tiempo</strong>, la velocidad instantánea <strong>se refiere al valor de la velocidad en un momento exacto</strong>.</li>
                <li class="fs-4">Matemáticamente, la velocidad instantánea se obtiene mediante la derivada de la posición respecto al tiempo. Si tenemos una función de posición <strong>x(t)</strong>, donde <strong>x</strong> representa <strong>la posición</strong> y <strong>t</strong> representa <strong>el tiempo</strong>, la velocidad instantánea se calcula como la derivada de x(t) con respecto a t:</li>
                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/velocidad_instantánea.jpg" alt="" class="img-fluid rounded-start">
                <li class="fs-4">Esta derivada representa la tasa de cambio de la posición en un instante de tiempo específico. La velocidad instantánea puede ser positiva, negativa o cero, dependiendo de la dirección y sentido del movimiento.</li>
                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Pelota.jpg" alt="" class="img-fluid rounded-start">
                <img src="http://fisica.ciens.ucv.ve/rea/img/velmedia.gif" alt="" class="img-fluid rounded-start ms-5 ps-5">
            </ul>
        </div>
        <hr>
        <!-- TEMAS NUEVOS -->
            <!-- DERIVADAS COMPUESTAS -->
            <h1 class="text-center" id="Compuestas"><strong>Derivadas compuestas</strong></h1>
            <!-- Concepto -->
            <h2 class="text-center">Regla de la cadena</h2>
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Concepto</h5>
                            <hr>
                            <p class="card-text fs-3">
                            Se utiliza para encontrar la derivada de una función compuesta. Cuando tienes una función que está formada por la composición de dos o más funciones, la regla de la cadena te permite calcular la derivada de esa función compuesta en términos de las derivadas de las funciones individuales que la componen.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Regla-Concepto.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
            </div>
            <!-- Formula -->
            <div class="card mb-5" id="Ejemplo">
                <h1 class="text-center">Ejemplo</h1>
                <hr>
                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Regla-Ejemplo.jpg" class="img-fluid rounded-start">
            </div>
            
            <!-- Actividad -->
            <div class="card mt-5" id="Ejercicio">
                <h1 class="text-center text-success">Ejercicios</h1>
                <hr>
                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Regla-Ejercicio1.jpg" class="img-fluid rounded-start">
            
                <hr>
                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Regla-Ejercicio2.jpg" style="height=100px; width: 500px; " >
            </div>
        
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>