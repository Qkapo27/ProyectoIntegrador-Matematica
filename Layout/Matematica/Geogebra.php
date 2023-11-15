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
        <div class="banner-img w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="bg-white rounded-pill shadow-lg bg-opacity-75" >
                    <h1  class="text-center fw-bold text-dark p-2" >
                        Matemática
                    </h1>
                    <h2 class="text-center fw-bold text-dark p-2">GeoGebra</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Matematica/GeoGebra" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-danger">Concepto</h5>
                            <hr>
                            <p class="card-text fs-3">GeoGebra es un software de matemáticas que combina múltiples representaciones dinámicas, como álgebra, geometría, cálculo, gráficos y estadísticas, en una sola plataforma interactiva. Fue desarrollado para apoyar el aprendizaje y la enseñanza de las matemáticas, y es ampliamente utilizado en entornos educativos, desde escuelas primarias hasta instituciones de educación superior.</p>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Características básicas -->
        <hr>
        <h1 class="text-center" id="Características">Características básicas</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <!-- Geometria interactiva -->
            <div class="col">
                <div class="card">
                    <img src="../../Public/Img/Assets/Matematica/Geo1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="https://www.geogebra.org/t/geometry" class="text-decoration-none">
                            <h5 class="card-title fs-4">Geometria interactiva</h5>
                        </a><hr>
                        <p class="card-text">Permite crear y manipular objetos geométricos, como puntos, líneas, segmentos, circunferencias y polígonos.</p>
                    </div>
                </div>
            </div>
            <!-- Algebra y calculo -->
            <div class="col">
                <div class="card">
                    <img src="../../Public/Img/Assets/Matematica/Geo2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="https://www.geogebra.org/t/algebra" class="text-decoration-none">
                            <h5 class="card-title fs-4">Algebra y calculo</h5>
                        </a><hr>
                        <p class="card-text">Los usuarios pueden definir funciones, realizar cálculos numéricos y simbólicos, resolver ecuaciones y realizar operaciones algebraicas básicas.</p>
                    </div>
                </div>
            </div>
            <!-- Representación grafica -->
            <div class="col">
                <div class="card">
                    <img src="../../Public/Img/Assets/Matematica/Geo3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="https://www.geogebra.org/m/J6ATTYp8" class="text-decoration-none">
                            <h5 class="card-title fs-4">Representación grafica</h5>
                        </a><hr>
                        <p class="card-text">Los usuarios pueden trazar gráficos de funciones, visualizar relaciones entre variables, crear tablas de valores y ajustar parámetros para explorar diferentes representaciones gráficas.</p>
                    </div>
                </div>
            </div>
            <!-- Animaciones y manipulación dinámica -->
            <div class="col">
                <div class="card">
                    <img src="../../Public/Img/Assets/Matematica/Geo4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="https://www.geogebra.org/m/cjq7dquj" class="text-decoration-none">
                            <h5 class="card-title fs-4">Animaciones y manipulación dinámica</h5>
                        </a><hr>
                        <p class="card-text">Los usuarios pueden trazar gráficos de funciones, visualizar relaciones entre variables, crear tablas de valores y ajustar parámetros para explorar diferentes representaciones gráficas.</p>
                    </div>
                </div>
            </div>
            <!-- Calculo simbolico -->
            <div class="col">
                <div class="card">
                    <img src="../../Public/Img/Assets/Matematica/Geo5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="https://www.geogebra.org/m/vqeraymq" class="text-decoration-none">
                            <h5 class="card-title fs-4">Calculo simbolico</h5>
                        </a><hr>
                        <p class="card-text">Geogebra ofrece capacidades de cálculo simbólico que permiten realizar operaciones algebraicas y cálculos avanzados. Los usuarios pueden simplificar expresiones, derivar e integrar funciones, encontrar límites y realizar muchas otras operaciones simbólicas</p>
                    </div>
                </div>
            </div>
            <!-- Compartir y colaborar -->
            <div class="col">
                <div class="card">
                    <img src="../../Public/Img/Assets/Matematica/Geo6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="https://www.geogebra.org/search">
                            <h5 class="card-title fs-4">Compartir y colaborar</h5>
                        </a><hr>
                        <p class="card-text">Permite compartir construcciones y recursos matemáticos en línea. Los usuarios pueden publicar y acceder a construcciones en la comunidad Geogebra, lo que fomenta la colaboración y el intercambio de ideas.</p>
                    </div>
                </div>
            </div>
        </div>



    <!-- Funciones principales -->
        <div class="card mt-5">
            <h1 class="text-center text-bg-info">Funciones principales</h1>
            <!-- GEOMETRIA -->
            <div class="row g-0 p-3" id="Funciones">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Geometria.webp" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2 text-info">GEOMETRIA</h5>
                        <hr>
                        <p class="card-text fs-3">Permite construir y manipular objetos geométricos, como puntos, segmentos, líneas, circunferencias, polígonos y conos. Los usuarios pueden realizar operaciones geométricas, como intersecciones, perpendiculares, paralelas y simetrías.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- ÁLGEBRA -->
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Algebra.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2 text-info">ÁLGEBRA
                        </h5>
                        <hr>
                        <p class="card-text fs-3">ofrece herramientas para trabajar con variables, ecuaciones y expresiones algebraicas. Los usuarios pueden realizar operaciones algebraicas básicas, resolver ecuaciones, factorizar polinomios, simplificar expresiones y encontrar raíces.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- CÁLCULO -->
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Calculo.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2 text-info">CÁLCULO</h5>
                        <hr>
                        <p class="card-text fs-3">Geogebra tiene capacidades de cálculo diferencial e integral. Los usuarios pueden calcular derivadas de funciones, encontrar máximos y mínimos, trazar gráficos de funciones y calcular áreas bajo curvas.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- GRÁFICO -->
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Grafico.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2 text-info">GRÁFICO</h5>
                        <hr>
                        <p class="card-text fs-3">Geogebra permite representar gráficamente funciones y datos numéricos. Los usuarios pueden trazar gráficos de funciones, crear tablas de valores, realizar ajustes de curvas y explorar diferentes representaciones gráficas.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- ESTADÍSTICAS -->
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Estadistica.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2 text-info">ESTADÍSTICAS</h5>
                        <hr>
                        <p class="card-text fs-3">Geogebra incluye herramientas estadísticas para analizar y representar conjuntos de datos. Los usuarios pueden calcular medidas estadísticas, como la media, la mediana, la desviación estándar y el coeficiente de correlación. También pueden realizar diagramas de dispersión y ajustar modelos estadísticos.</p>
                    </div>
                </div>
            </div>
        </div>
            <hr>
    <!-- Ventajas y Desventajas -->
        <div class="card mt-5 pt-5 bg-light" id="Ventajas">
            <h1 class="text-center bg-light"><strong class="text-info">Ventajas</strong> y <strong class="text-danger">Desventajas</strong>:</h1>
            <div class="card mb-3">
                <div class="row g-0">
                    <!-- Ventajas -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-center text-info">Ventajas</h5>
                                <hr>
                                <p class="card-text fs-3">
                                    <ul class="list-group list-group-numbered">
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Versatilidad</strong>: Geogebra combina elementos de geometría, álgebra, cálculo, estadística y gráficos en una sola plataforma, lo que lo convierte en una herramienta versátil para el estudio y la enseñanza de las matemáticas. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Interactividad</strong>: Geogebra permite la creación de construcciones matemáticas interactivas y manipulación dinámica de objetos. Esto facilita la comprensión de conceptos matemáticos y fomenta el aprendizaje activo y experimental. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Gratuito y de codigo abierto</strong>: Geogebra es un software gratuito y de código abierto, lo que significa que está disponible para su descarga y uso sin costo alguno. Además, la comunidad Geogebra contribuye al desarrollo continuo de la herramienta y crea recursos educativos compartidos. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Amplia comunidad y recursos educativos</strong>: Geogebra cuenta con una comunidad activa de usuarios y educadores que comparten construcciones, materiales didácticos y recursos en línea. Esto permite acceder a una amplia variedad de ejemplos, actividades y materiales educativos que enriquecen la experiencia de aprendizaje. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Integración de múltiples representaciones</strong>: Geogebra permite representar gráficamente funciones, trabajar con expresiones algebraicas y realizar cálculos simbólicos. Esto facilita la comprensión de las relaciones matemáticas al mostrar múltiples representaciones simultáneamente. 
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    <!-- Desventajas -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-center text-danger">Desventajas</h5>
                                <hr>
                                <p class="card-text fs-3">
                                    <ul class="list-group list-group-numbered">
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Curva de aprendizaje</strong>: Geogebra tiene una amplia gama de funciones y herramientas, lo que puede requerir un tiempo de aprendizaje inicial para aprovechar al máximo su potencial. Para usuarios sin experiencia previa, puede llevar tiempo familiarizarse con todas las funcionalidades y características. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Limitaciones en funciones avanzadas</strong>: Aunque Geogebra es una herramienta poderosa, puede tener ciertas limitaciones en comparación con software matemáticos más especializados. Algunas operaciones y cálculos avanzados pueden no ser compatibles o requerir soluciones alternativas. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Dependencia de la plataforma</strong>: Geogebra está disponible como una aplicación de escritorio, una aplicación web y una aplicación móvil. Sin embargo, puede haber ciertas diferencias en términos de funcionalidad y compatibilidad entre las diferentes versiones, lo que puede afectar la experiencia del usuario. 
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Requerimientos de hardware y software</strong>: Para aprovechar al máximo Geogebra, es recomendable contar con un hardware y software adecuados. En algunos casos, especialmente al trabajar con construcciones complejas o gráficos computacionalmente intensivos, puede requerirse un equipo más potente para un rendimiento óptimo. 
                                        </li>
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