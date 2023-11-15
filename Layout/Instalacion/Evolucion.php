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
                    <h2 class="text-center fw-bold text-dark p-2">Evolucion de la computadora</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
        <div class="container-fluid">
            <h1 class="text-center pt-5 mt-5 pb-3 mb-3 text-bg-info text-light">Linea del tiempo</h1>
            <div id="timeline"></div>    
        </div>
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="../../Public/js/Evolucion-pc.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>