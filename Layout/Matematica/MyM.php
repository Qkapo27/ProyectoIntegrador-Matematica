<?php
    $URL="http://localhost/Matematica/Web/";
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
                    <h2 class="text-center fw-bold text-dark p-2">Maximos y Minimos</h2>
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
                            <p class="card-text fs-4">
                                Los máximos y mínimos son puntos críticos en una función donde esta alcanza sus valores más altos (máximos) o más bajos (mínimos). Estos puntos pueden ser locales (relativos) o globales (absolutos). <strong>Un máximo local es un punto donde la función es más alta en un pequeño vecindario, pero no necesariamente en todo el dominio. Un máximo global es el punto más alto en toda la función. </strong>De manera similar <strong>un mínimo local es un punto donde la función es más baja en un vecindario, pero no necesariamente en todo el dominio, y un mínimo global es el punto más bajo en toda la función.</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo $URL?>Public/Img/Assets/Matematica/MMyMM.png" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
            </div>
    <!-- Concavidad  -->
        <div class="card mt-5 pt-2 bg-light" id="Concavidad">
            <h2 class="text-center">Concavidad</h2>
            <p class="card-text fs-5 ps-5 px-5">
                <strong>Concepto:</strong> La concavidad es un concepto que se utiliza en matemáticas y análisis para describir la forma de una curva o una función en un gráfico. Se refiere a si la curva se dobla hacia arriba o hacia abajo en un punto particular. Hay dos tipos de concavidad principales:<strong> concavidad hacia arriba y concavidad hacia abajo.</strong>
            </p>    
        <hr>
            <div class="card mb-3">
                <div class="row g-0">
                    <!-- Concavidad hacia Arriba -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-center text-info">Concavidad hacia Arriba</h5>
                                <hr>
                                <p class="card-text fs-3">
                                    <ul class="list-group list-group-numbered">
                                        <li class="list-group-item">
                                            <strong class="text-success">Concepto</strong>: Una función o curva se dice que tiene concavidad hacia arriba en un intervalo si, al trazarla en ese intervalo, la curva se dobla hacia arriba, como si formara una "U" invertida. Esto significa que la segunda derivada de la función es positiva en ese intervalo.
                                        </li>
                                        <li class="list-group-item"> 
                                            <strong class="text-success fs-5">Una función f(x) tiene concavidad hacia arriba</strong> en un intervalo [a, b] si f''(x) > 0 para todo x en ese intervalo. Las funciones cóncavas hacia arriba tienden a tener mínimos locales en esos intervalos.
                                        </li>
                                    </ul>
                                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Concava-Arriba.jpg" class="img-fluid rounded-start ms-5 ps-5" alt="...">
                                </p>
                            </div>
                        </div>
                    <!-- Concavidad hacia abajo -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-center text-danger">Concavidad hacia abajo</h5>
                                <hr>
                                <p class="card-text fs-3">
                                    <ul class="list-group list-group-numbered">
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">Concepto</strong>: Una función o curva se dice que tiene concavidad hacia abajo en un intervalo si, al trazarla en ese intervalo, la curva se dobla hacia abajo, como si formara una "U" regular. Esto significa que la segunda derivada de la función es negativa en ese intervalo.
                                        </li>
                                        <li class="list-group-item">
                                            <strong class="text-success fs-5">una función f(x) tiene concavidad hacia abajo </strong> en un intervalo [a, b] si f''(x) < 0 para todo x en ese intervalo. Las funciones cóncavas hacia abajo tienden a tener máximos locales en esos intervalos.
                                        </li>
                                    </ul>
                                    <img src="<?php echo $URL?>Public/Img/Assets/Matematica/Concava-Abajo.jpg" class="img-fluid rounded-start ms-5 ps-5" alt="...">
                                </p>
                            </div>
                        </div>
                        <hr>
                            <h1 class="text-center text-warning">Punto de inflexión</h1>
                            <p class="card-text fs-4 ps-5 px-5 pb-5">
                                Un punto de inflexión es un punto en una función donde la concavidad cambia de cóncava hacia arriba a cóncava hacia abajo, o viceversa. En un punto de inflexión, la segunda derivada de la función es igual a cero. Los puntos de inflexión indican un cambio en la dirección de la curvatura de la función, y la función pasa de ser cóncava hacia arriba a cóncava hacia abajo o viceversa en ese punto.
                            </p>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo $URL?>Public/Img/Assets/Matematica/P-MyM.svg" class="rounded-start " style="width: 50%;">
                            </div>
                            
                </div>
            </div>
        </div>

        
        
        
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>