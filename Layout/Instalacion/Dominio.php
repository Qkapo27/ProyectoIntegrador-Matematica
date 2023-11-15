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
                    <h2 class="text-center fw-bold text-dark p-2">Dominio Nivel Superior</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/Dominio-concepto.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info">Concepto</h5>
                            <hr>
                            <p class="card-text fs-4">
                                Un dominio de nivel superior (TLD, por sus siglas en inglés, Top-Level Domain) es la parte más alta de un nombre de dominio en el sistema de nombres de dominio (DNS, Domain Name System). Los TLD son la última parte de una dirección web o URL después del último punto, como en "ejemplo.com". Los TLD desempeñan un papel importante en la organización y clasificación de los nombres de dominio en Internet.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
    <!-- dominio de nivel Superior -->
        <div class="card mb-3" id="Fiabilidad">
            <h1 class="text-center text-success">Fiabilidad de las fuentes</h1>
            <!-- Dominio de nivel superior (TLD) -->
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-center text-info">Dominio de nivel superior (TLD)</h5>
                            <hr>
                            <p class="card-text fs-3">
                                El TLD es la parte final de una dirección web, como ".com", ".org" o ".edu". Algunos TLD, como ".edu" (instituciones educativas) o ".gov" (gubernamentales), suelen indicar una mayor fiabilidad y credibilidad en comparación con TLD genéricos o poco conocidos.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/TLD.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- Subdominio -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/Subdominio.png" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Subdominio</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Observa el subdominio en la dirección web, que precede al nombre de dominio principal. Los subdominios pueden indicar la afiliación institucional o el tipo de contenido. Por ejemplo, "blog.ejemplo.com" puede ser un subdominio para un blog relacionado con el dominio principal "ejemplo.com".
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- URL segura (HTTPS) -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">URL segura (HTTPS)</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Verifica si la dirección web comienza con "https://" en lugar de "http://". El protocolo HTTPS indica que la comunicación con el sitio web está cifrada y es más seguro para transmitir información sensible.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/Https.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- Nombre de dominio -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/Nombre-dominio.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Nombre de dominio</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Examina el nombre de dominio en sí. Algunas fuentes confiables suelen tener nombres de dominio claros y relacionados con la organización o el tema. Sin embargo, ten en cuenta que los nombres de dominio también pueden ser falsificados o engañosos, por lo que no debes confiar únicamente en esta información.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Sitios web de noticias y fuentes reconocidas -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Sitios web de noticias y fuentes reconocidas</h5>
                            <hr>
                            <p class="card-text fs-3">
                                Al buscar noticias o información de fuentes específicas, verifica si el sitio web es una fuente de noticias reconocida y confiable. Los sitios web de organizaciones de noticias establecidas suelen tener una reputación más sólida en comparación con sitios web desconocidos o de dudosa procedencia.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/notici.jpeg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center mt-5">Dominios de nivel Superior</h1>
            <div class="card mb-3" id="Dominios">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Dominio/dominios.webp" class="img-fluid rounded-start mt-2 mb-2 pb-2 pt-2" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info"> (.com, .gov, .edu, etc)</h5>
                            <hr>
                            <p class="card-text fs-4">
                                Los dominios de nivel superior (TLD, por sus siglas en inglés, Top-Level Domains) son las categorías más altas del sistema de nombres de dominio (DNS) utilizadas en Internet para clasificar y organizar los nombres de dominio. Aquí tienes algunos ejemplos de TLD comunes y sus significados:
                            </p>
                        </div>
                    </div>
                    <ul>
                        <!-- .com -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.com</strong>: Originalmente destinado para <strong>sitios web comerciales</strong>, pero actualmente se utiliza ampliamente para cualquier tipo de sitio, tanto comerciales como personales.
                        </li>
                        <!-- .gov -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.gov</strong>: Reservado para <strong>sitios web gubernamentales de entidades gubernamentales de nivel nacional, estatal o local</strong>. Indica la autoridad y legitimidad de un sitio web gubernamental.
                        </li>
                        <!-- .edu -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.edu</strong>: Utilizado por <strong>instituciones educativas</strong>, como <strong>universidades, colegios</strong> y <strong>escuelas</strong>. Los sitios web con esta extensión suelen ser asociados con instituciones académicas.
                        </li>
                        <!-- .org -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.org</strong>: Inicialmente destinado para <strong>organizaciones sin fines de lucro</strong>, aunque también es utilizado por <strong>diversos tipos de organizaciones, comunidades en línea</strong> y <strong>proyectos colaborativos</strong>.
                        </li>
                        <!-- .net -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.net</strong>: Inicialmente creado para <strong>proveedores de servicios de red</strong> y <strong>empresas relacionadas con la infraestructura de Internet</strong>. Actualmente, se utiliza para diferentes tipos de sitios web.
                        </li>
                        <!-- .mil -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.mil</strong>: Reservado para <strong>sitios web del Departamento de Defensa de los Estados Unidos</strong> y las <strong>organizaciones militares asociadas</strong>.
                        </li>
                        <!-- .int -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.int</strong>: Reservado para <strong>organizaciones internacionales</strong> establecidas por tratados entre países.
                        </li>
                    </ul>
                </div>
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="../../Public/js/Tecnologia-Inalambrica.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>