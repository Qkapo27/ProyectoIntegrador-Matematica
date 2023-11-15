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
                    <h2 class="text-center fw-bold text-dark p-2">Netiqueta</h2>
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
                                La "netiqueta" es el conjunto de reglas de etiqueta y comportamiento que rigen la comunicación en línea, especialmente en entornos como correos electrónicos, foros, redes sociales y otros medios de comunicación en Internet. El término "netiqueta" proviene de la combinación de "net" (de Internet) y "etiqueta" (normas de comportamiento social).
                            </p>
                        </div>
                    </div>
                    <!-- Img -->
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Netiqueta/Netiqueta-concepto.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
    <!-- Para que sirve -->
        <div class="card mb-3" id="Sirve">
            <h1 class="text-center text-success">Sirve para</h1>
            <div>
                <p class="fs-4">
                    La netiqueta sirve para promover una interacción positiva y constructiva en línea, evitando conflictos, malentendidos y comportamientos irrespetuosos. Al seguir las reglas de la netiqueta, se facilita la comunicación, se fortalecen las relaciones en línea y se promueve un entorno virtual seguro y respetuoso para todos los usuarios.
                </p>
                <img src="<?php echo $URL?>Public/Img/Assets/Ins/Netiqueta/Sirve-para.jpg" class="img-fluid rounded-start mt-2 mb-2 pb-2 pt-2" alt="...">
            </div>
        </div>
        <!-- Reglas de las Netiquetas -->
        <div class="container">
            <h1 class="text-center mt-5">Reglas de las Netiquetas</h1>
            <div class="card mb-3" id="Reglas">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Netiqueta/Reglas.jpg" class="img-fluid rounded-start mt-4 mb-2 pb-2 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info">Algunas de las reglas comunes de la netiqueta incluyen</h5>
                            <hr>
                            <p class="card-text fs-4">
                                <ul>
                                    <!-- Sé respetuoso -->
                                    <li class="fs-4 ms-5">
                                        <strong class="text-info">Sé respetuoso</strong>: Trata a los demás con cortesía y amabilidad en todas tus interacciones en línea. Evita el uso de lenguaje ofensivo, insultos o comentarios despectivos.
                                    </li>
                                    <!-- Ser amable -->
                                    <li class="fs-4 ms-5">
                                        <strong class="text-info">Ser amable</strong>: Implica tratar a los demás con cortesía, respeto y consideración en todas las interacciones en línea. Algunos aspectos clave de esta regla incluyen: Evitar el uso de lenguaje ofensivo o agresivo hacia otros usuarios. Responder a los mensajes de manera respetuosa y constructiva.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <ul>
                        <!-- Conoce y respeta las reglas de cada plataforma -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Conoce y respeta las reglas de cada plataforma</strong>: Cada plataforma en línea puede tener sus propias reglas y directrices de comportamiento. Familiarízate con ellas y adáptate al entorno en el que te encuentres.
                        </li>
                        <!-- Sé breve y conciso -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Sé breve y conciso</strong>: En la comunicación en línea, es importante ser claro y directo. Evita mensajes excesivamente largos y utiliza un lenguaje claro y fácil de entender.
                        </li>
                        <!-- .gov -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">.gov</strong>: Reservado para <strong>sitios web gubernamentales de entidades gubernamentales de nivel nacional, estatal o local</strong>. Indica la autoridad y legitimidad de un sitio web gubernamental.
                        </li>
                        <!-- Compartir el conocimiento -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Compartir el conocimiento</strong>: Implica compartir información útil y relevante con otros usuarios de manera constructiva y generosa. Algunos puntos clave de esta regla incluyen: Compartir recursos y enlaces que puedan ser de interés o utilidad para otros usuarios.
                        </li>
                        <!-- Evita los malentendidos -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Evita los malentendidos</strong>: La comunicación en línea carece de las señales no verbales presentes en las conversaciones cara a cara. Sé claro en tus mensajes y evita ambigüedades que puedan dar lugar a malentendidos.
                        </li>
                        <!-- Respeta la privacidad de los demás -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Respeta la privacidad de los demás</strong>: No compartas información personal de otros sin su consentimiento. Mantén la confidencialidad y la privacidad de la información compartida en conversaciones privadas.
                        </li>
                        <!-- Utiliza un tono apropiado -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Utiliza un tono apropiado</strong>: Asegúrate de que el tono de tus mensajes sea claro y conciso. Evita el uso excesivo de mayúsculas, ya que esto puede interpretarse como si estuvieras gritando.
                        </li>
                        <!-- Sé paciente y tolerante -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Sé paciente y tolerante</strong>: En las discusiones en línea, es probable que encuentres opiniones y perspectivas diferentes. Mantén la calma, sé abierto al diálogo y respeta la diversidad de opiniones.
                        </li>
                        <!-- Sé cauteloso con el sarcasmo y el humor -->
                        <li class="fs-4 ms-5">
                            <strong class="text-info">Sé cauteloso con el sarcasmo y el humor</strong>: En los mensajes escritos, el sarcasmo y el humor pueden ser malinterpretados fácilmente. Asegúrate de que tu intención sea clara y evita comentarios que puedan resultar ofensivos o confusos.
                        </li>
                        <img src="<?php echo $URL?>Public/Img/Assets/Ins/Netiqueta/Reglas1.jpg" class="img-fluid rounded-start mt-4 pt-5 px-5 mx-5" alt="...">
                    </ul>
                </div>
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="../../Public/js/Tecnologia-Inalambrica.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>