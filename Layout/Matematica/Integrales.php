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
                    <h2 class="text-center fw-bold text-dark p-2">Integrales</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
        <div class="col">
            <div class="card"id="Concepto">
                <h2 class="card-title text-center bg-info">Concepto</h2>
                <img src="../../Public/Img/Assets/Matematica/Integral-concepto.jpg" class="card-img-top" style="height: 30em;">
                <div class="card-body">
                    
                    <p class="card-text fs-4">Proceso matemático de encontrar una medida acumulada o suma continua a lo largo de una curva, una superficie o una región, donde esta medida puede representar una cantidad acumulada o la suma de pequeños incrementos infinitesimales a lo largo de una variable independiente. En otras palabras, la integral se utiliza para calcular el resultado acumulado de una función o fenómeno a lo largo de un rango continuo o una región.</p>
                </div>
            </div>
        </div>
        <!-- Algunos usos -->
            <div class="card mt-5" id="usos">
                <h1 class="text-center text-bg-info">Algunos usos</h1>
                <!-- Cálculo de áreas -->
                    <div class="row g-0 p-3">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-info">Cálculo de áreas</h5>
                                <hr>
                                <p class="card-text fs-3">La integral se utiliza para encontrar el área bajo una curva en un gráfico, lo que es útil para problemas de geometría y cálculo de áreas de regiones irregulares.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/calculoarea.png" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                <hr>
                <!-- Cálculo de volúmenes -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/calculovolumen.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-info">Cálculo de volúmenes
                                </h5>
                                <hr>
                                <p class="card-text fs-3">En cálculo integral, se utilizan integrales para calcular volúmenes de sólidos tridimensionales y revolucionarios, como cilindros, conos y esferas.</p>
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
                                <p class="card-text fs-3">En ingeniería, la integral se utiliza para calcular momentos de inercia, centro de masas y análisis de sistemas dinámicos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Inge.jpg" class="img-fluid rounded-start" alt="...">
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
                            <h5 class="card-title fs-2 text-info">Economía</h5>
                            <hr>
                            <p class="card-text fs-3">La integral se usa en economía para calcular el área bajo las curvas de oferta y demanda, lo que permite analizar el excedente del consumidor y del productor.</p>
                        </div>
                    </div>
                </div>
            </div>
        <hr>


    
    <!-- Integral Definida y Integral Indefinida -->
    <div class="card mt-5 pt-5 bg-light" id="Ventajas">
        <h1 class="text-center bg-light">Integral <strong class="text-info">Definida</strong> e <strong class="text-danger">Indefinida</strong>:</h1>
        <div class="card mb-3">
            <div class="row g-0">
                <!-- Integral Definida -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-center text-info">Integral Definida</h5>
                            <hr>
                            <p class="card-text fs-3">
                                <ul class="list-group list-group-numbered">
                                    <li class="list-group-item fs-5">
                                        La integral definida se utiliza para calcular la acumulación de una cantidad específica entre dos límites dados en una función. En otras palabras, determina el área entre la curva de la función y el eje x en un intervalo específico. Matemáticamente, se denota como <strong>∫[a, b] f(x) dx</strong> y se interpreta como la acumulación de la función <strong>f(x)</strong> desde <strong>a</strong> hasta <strong>b</strong>.
                                    </li>
                                    <img src="../../Public/Img/Assets/Matematica/definida.gif"  class="img-fluid rounded-start" alt="">
                                    <a href="https://www.geogebra.org/m/Vb38e3aZ" class="btn btn-success" target="_blank">Ir a GeoGebra</a>
                                </ul>
                            </p>
                        </div>
                    </div>
                <!-- Integral Indefinida -->
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-center text-danger">Integral Indefinida</h5>
                            <hr>
                            <p class="card-text fs-3">
                                <ul class="list-group list-group-numbered">
                                    <li class="list-group-item fs-5">
                                        La integral indefinida, también conocida como antiderivada, se utiliza para encontrar una función cuya derivada sea igual a la función dada. En otras palabras, se busca una función <strong>F(x)</strong> tal que <strong>F'(x)=f(x)</strong>,donde <strong>f(x)</strong> es la función original. Matemáticamente, se denota como <strong>∫f(x) dx</strong> y se representa como la integral sin límites específicos.
                                    </li>
                                    <img src="../../Public/Img/Assets/Matematica/indefinida.gif"  class="img-fluid rounded-start" alt="">
                                    <a href="https://www.geogebra.org/m/rhuKWrcx" class="btn btn-success" target="_blank">Ir a GeoGebra</a>
                                </ul>
                            </p>
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