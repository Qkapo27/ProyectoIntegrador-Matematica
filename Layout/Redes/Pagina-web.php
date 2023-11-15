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
    <link rel="stylesheet" href="<?php echo $URL?>Public/css/bootstrap.css">
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
                    <h2 class="text-center fw-bold text-dark p-2">Pagina web</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Pagina_web1.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2">Concepto</h5>
                            <hr>
                            <p class="card-text fs-3">Las páginas web son herramientas de comunicación y difusión de información a través de Internet. Permiten compartir conocimientos, promover iniciativas y concientizar sobre el desarrollo sostenible. Las páginas web pueden ser utilizadas por organizaciones, empresas y personas para comunicar mensajes relacionados con la sostenibilidad y fomentar la participación y colaboración en proyectos sostenibles.</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Lenguaje -->
            <div class="card mb-3" id="Lenguajes">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-end">Lenguaje de</h5>
                            <hr>
                            <p class="card-text fs-3">
                                <ul>
                                    <li class="card-text"><strong>HTML (Hypertext Markup Language)</strong>: HTML es el lenguaje fundamental para crear la estructura y el contenido de una página web. Se utiliza para definir los elementos como encabezados, párrafos, imágenes, enlaces y otros componentes visuales.</li>
                                    <li class="card-text"><strong>CSS (Cascading Style Sheets)</strong>: CSS se utiliza para dar estilo y diseño a las páginas web. Permite controlar la presentación visual de los elementos HTML, como colores, fuentes, márgenes y diseños de página.</li>
                                    <li class="card-text"><strong>JavaScript</strong>: JavaScript es un lenguaje de programación del lado del cliente que se utiliza para agregar interactividad y funcionalidad a las páginas web. Permite la creación de animaciones, validación de formularios, manipulación del DOM (Document Object Model) y la comunicación con servidores.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5 pt-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/lenguajes.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title fs-2">Programacion</h5>
                            <hr>
                            <p class="card-text fs-3">
                                <ul>
                                    <li class="card-text"><strong>PHP</strong>: PHP es un lenguaje de programación del lado del servidor que se utiliza para crear aplicaciones web dinámicas. Puede interactuar con bases de datos y generar contenido personalizado en función de las solicitudes de los usuarios.</li>
                                    <li class="card-text"><strong>Node.js</strong>: Node.js es una plataforma de tiempo de ejecución de JavaScript en el lado del servidor que permite a los desarrolladores crear aplicaciones web altamente escalables y en tiempo real.</li>
                                    <li class="card-text"><strong>Python</strong>: Python es otro lenguaje de programación del lado del servidor que se utiliza en el desarrollo web. Frameworks como Django y Flask permiten crear aplicaciones web de manera eficiente.</li>
                                    <li class="card-text"><strong>SQL (Structured Query Language)</strong>: SQL se utiliza para interactuar con bases de datos y gestionar datos en aplicaciones web.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Desarrollo sostenible -->
        <div class="card mb-3">
            <div class="row g-0" id="Desarrollo">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Desarrollo.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Desarrollo sostenible</h5>
                        <hr>
                        <p class="card-text fs-3">El desarrollo sostenible es un enfoque que busca satisfacer las necesidades presentes sin comprometer la capacidad de las generaciones futuras para satisfacer sus propias necesidades. Las páginas web pueden ser utilizadas para educar y sensibilizar sobre los principios del desarrollo sostenible, proporcionando información sobre prácticas sostenibles, proyectos e iniciativas que promuevan la conservación del medio ambiente, el bienestar social y el crecimiento económico equitativo.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Internet -->
            <div class="row g-0" id="Internet">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Internet.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Internet</h5>
                        <hr>
                        <p class="card-text fs-3">Internet es la infraestructura global de comunicación y conexión de redes que permite el intercambio de información y la comunicación a nivel mundial. Internet facilita el acceso a páginas web y proporciona una plataforma para la difusión de contenido relacionado con el desarrollo sostenible. A través de Internet, las páginas web pueden llegar a un público amplio, permitiendo una comunicación efectiva y alcanzando a personas de diferentes regiones geográficas con mensajes relacionados con la sostenibilidad.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Comunicación -->
            <div class="row g-0" id="Comunicación">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Comunicación.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Comunicación</h5>
                        <hr>
                        <p class="card-text fs-3">La comunicación es un proceso fundamental en el desarrollo sostenible, ya que implica transmitir información, compartir ideas y fomentar la colaboración. Las páginas web son una herramienta de comunicación eficaz para difundir mensajes sobre sostenibilidad, promover la participación ciudadana, crear conciencia y movilizar acciones en favor del desarrollo sostenible. A través de las páginas web, se pueden compartir noticias, investigaciones, historias inspiradoras y recursos relacionados con la sostenibilidad, facilitando la comunicación entre diferentes actores y promoviendo el diálogo y la colaboración en esta temática.</p>
                    </div>
                </div>
            </div>
        </div>
            
    <!-- Para que sirve -->
    <div class="card mb-3" id="Sirve">
        <h1 class="text-center">Sirve para:</h1>
        <!-- 1 Información y educación -->
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2 text-center">Información y educación</h5>
                        <hr>
                        <p class="card-text fs-3">Las páginas web pueden brindar información detallada y educar a las personas sobre los principios y prácticas del desarrollo sostenible. Esto puede beneficiar a individuos interesados en aprender más sobre el tema y adquirir conocimientos para tomar decisiones más sostenibles en su vida diaria.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Información y educación.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
            </div>
            <hr>
            <!-- 2 Sensibilización y conciencia -->
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Conciencia.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Sensibilización y conciencia</h5>
                        <hr>
                        <p class="card-text fs-3">Las páginas web pueden ser una herramienta poderosa para crear conciencia sobre los desafíos y las soluciones relacionadas con el desarrollo sostenible. Pueden ayudar a despertar el interés y la preocupación en la sociedad en general, fomentando una mayor sensibilización sobre temas ambientales, sociales y económicos.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- 3 Participación y colaboración -->
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Participación y colaboración</h5>
                        <hr>
                        <p class="card-text fs-3">Las páginas web pueden facilitar la participación ciudadana en proyectos y acciones relacionados con el desarrollo sostenible. Pueden ofrecer oportunidades para que las personas se involucren en iniciativas comunitarias, organizaciones sin fines de lucro o proyectos de investigación, permitiendo una mayor colaboración y contribución en la promoción de la sostenibilidad.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Participación y colaboración.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
            </div>
            <hr>
            <!-- 4 Recursos y herramientas prácticas -->
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Recursos y herramientas prácticas.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Recursos y herramientas prácticas</h5>
                        <hr>
                        <p class="card-text fs-3">Las páginas web pueden proporcionar recursos, guías y herramientas prácticas para que las personas adopten estilos de vida más sostenibles. Esto incluye consejos sobre eficiencia energética, manejo de residuos, opciones de transporte sostenible, entre otros, beneficiando a quienes buscan implementar acciones concretas en su vida cotidiana.</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- 5 Comunicación y redes de apoyo -->
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fs-2">Comunicación y redes de apoyo</h5>
                        <hr>
                        <p class="card-text fs-3">Las páginas web pueden servir como plataformas de comunicación para conectar a personas interesadas en el desarrollo sostenible, permitiendo el intercambio de ideas, experiencias y mejores prácticas. Pueden facilitar la creación de redes de apoyo y colaboración entre individuos, organizaciones y comunidades comprometidas con la sostenibilidad.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $URL?>Public/Img/Assets/RD/Comunicación y redes de apoyo.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>