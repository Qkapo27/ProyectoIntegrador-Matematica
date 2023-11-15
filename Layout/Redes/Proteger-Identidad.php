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
    <link rel="shortcut icon" href="../../Public/Img/Logo.png" class="">
    <link rel="stylesheet" href="../../Public/css/bootstrap.css">
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
                    <h2 class="text-center fw-bold text-dark p-2">Proteger identidad en internet</h2>
                </div>
            </div>
        </div>
    <!-- Fin Header -->
    <div class="container pt-5">
        <!-- Concepto -->
            <div class="card mb-3" id="Concepto">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Concepto.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-info">Concepto</h5>
                            <hr>
                            <p class="card-text fs-3">La protección de identidad se refiere a un conjunto de prácticas y medidas destinadas a salvaguardar la información personal de una persona o entidad, con el fin de prevenir el robo de identidad y el uso no autorizado de dicha información para actividades fraudulentas. Esta protección tiene como objetivo principal asegurar que los datos personales, como nombres, números de seguridad social, direcciones, información financiera y otros detalles sensibles, no caigan en manos de individuos maliciosos que puedan utilizarlos con fines delictivos. La protección de la identidad es esencial en la era digital, donde el robo de identidad y el fraude son amenazas comunes.</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Elementos -->
            <div class="card mb-3" id="Elementos">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-end text-bg-warning">Elementos de la</h5>
                            <hr>
                            <p class="card-text fs-3">
                                <ul>
                                    <li class="card-text">
                                        <strong class="text-info">Información personal</strong>: Esto puede incluir nombre, apellidos, fecha de nacimiento, dirección, número de teléfono, dirección de correo electrónico y otros datos personales que se utilizan para crear cuentas en línea y establecer la identidad en la web.
                                    </li>
                                    <li class="card-text">
                                        <strong class="text-info">Cuentas en línea</strong>: Las cuentas en redes sociales, servicios de correo electrónico, plataformas de juegos en línea y otros servicios en línea crean una parte importante de la identidad digital. Cada cuenta está asociada con información personal y puede revelar intereses, actividades y conexiones sociales.
                                    </li>
                                    <li class="card-text"><strong class="text-info">Perfiles en redes sociales</strong>: Los perfiles en redes sociales contienen información sobre intereses, actividades y conexiones con otras personas en línea. Incluyen fotos de perfil, descripciones personales y publicaciones que contribuyen a la construcción de la identidad digital.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5 pt-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/identidad-digital.webp" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-bg-warning">Identidad digital</h5>
                            <hr>
                            <p class="card-text fs-3">
                                <ul>
                                    <li class="card-text"><strong class="text-info">Comentarios y participación en línea</strong>: Los comentarios en blogs, foros, redes sociales y otros espacios en línea pueden contribuir a la identidad digital, ya que reflejan las opiniones y actividades de una persona en línea.
                                    </li>
                                    <li class="card-text"><strong class="text-info">Actividades financieras en línea</strong>: La realización de transacciones financieras en línea, como compras en sitios web o la gestión de cuentas bancarias en línea, también forma parte de la identidad digital.</li>
                                    <li class="card-text"><strong class="text-info">Información laboral y profesional</strong>: Las redes profesionales en línea, como LinkedIn, contienen información sobre la educación, la experiencia laboral y las habilidades de una persona, lo que contribuye a su identidad digital profesional.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Para que sirve -->
        <div class="card mb-3" id="Consejos">
            <h1 class="text-center text-success">Consejos para proteger tu identidad</h1>
            <!-- 1 Utiliza contraseñas fuertes y únicas para cada cuenta -->
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-center text-info">Utiliza contraseñas fuertes y únicas para cada cuenta</h5>
                            <hr>
                            <p class="card-text fs-3">Evita contraseñas obvias como "123456" o "contraseña". Utiliza combinaciones de letras mayúsculas y minúsculas, números y símbolos. Además, asegúrate de no reutilizar contraseñas en diferentes plataformas.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Contraseña-fuerte.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- 2 Habilita la autenticación de dos factores siempre que sea posible -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/2pasos.png" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Habilita la autenticación de dos factores siempre que sea posible</h5>
                            <hr>
                            <p class="card-text fs-3">Esta capa adicional de seguridad requiere un segundo paso para verificar tu identidad, generalmente mediante un código enviado a tu teléfono o correo electrónico. Esto dificulta el acceso no autorizado a tus cuentas, incluso si alguien conoce tu contraseña.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 3 Mantén actualizados tus dispositivos y aplicaciones -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Mantén actualizados tus dispositivos y aplicaciones</h5>
                            <hr>
                            <p class="card-text fs-3">Las actualizaciones de seguridad son fundamentales para proteger tus dispositivos y aplicaciones contra vulnerabilidades conocidas. Asegúrate de tener activadas las actualizaciones automáticas y descarga las últimas versiones disponibles.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Updating.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- 4 Sé cauteloso al hacer clic en enlaces desconocidos o sospechosos -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Enlaces-Sospechosos.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Sé cauteloso al hacer clic en enlaces desconocidos o sospechosos</h5>
                            <hr>
                            <p class="card-text fs-3">Los enlaces maliciosos pueden llevar a sitios web falsos o infectados con malware. Antes de hacer clic, verifica la autenticidad de la fuente y considera utilizar herramientas de seguridad en tu navegador para detectar sitios web maliciosos. </p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 5 Configura la privacidad de tus perfiles en redes sociales -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Configura la privacidad de tus perfiles en redes sociales</h5>
                            <hr>
                            <p class="card-text fs-3">Revisa y ajusta la configuración de privacidad en tus perfiles para controlar quién puede ver tu información personal. Limita la visibilidad de tus publicaciones y evita compartir datos sensibles como números de teléfono, direcciones o información financiera.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Privados.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- 6 Evita publicar información personal sensible -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/personal-info.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Evita publicar información personal sensible</h5>
                            <hr>
                            <p class="card-text fs-3">Ten cuidado al compartir información como tu número de teléfono, dirección o detalles bancarios en plataformas públicas. Cuanta menos información personal brindes, menor será el riesgo de que caiga en manos equivocadas.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 7 Sé selectivo en tus conexiones y acepta solicitudes de amistad solo de personas que conoces -->
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fs-2 text-center text-info">Sé selectivo en tus conexiones y acepta solicitudes de amistad solo de personas que conoces cuenta</h5>
                                <hr>
                                <p class="card-text fs-3">Verifica cuidadosamente los perfiles antes de aceptar solicitudes de amistad o conexiones en redes sociales. No compartas información personal con extraños y evita interactuar con perfiles sospechosos o desconocidos.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo $URL?>Public/Img/Assets/RD/selectivo.webp" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                        </div>
                    </div>
                    <hr>
                
                <!-- 8 Revisa y ajusta periódicamente la configuración de privacidad y las aplicaciones conectadas a tus cuentas -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/Privacidad.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Revisa y ajusta periódicamente la configuración de privacidad y las aplicaciones conectadas a tus cuentas</h5>
                            <hr>
                            <p class="card-text fs-3">Verifica regularmente la configuración de privacidad en tus cuentas y ajusta tus preferencias según tus necesidades. Revisa también las aplicaciones y servicios conectados a tus perfiles, y revoca los accesos de aquellos que ya no necesites.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- 9 Desconfía de los mensajes o correos electrónicos que soliciten información personal o financiera -->
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Desconfía de los mensajes o correos electrónicos que soliciten información personal o financiera</h5>
                            <hr>
                            <p class="card-text fs-3">Los estafadores pueden intentar obtener tu información confidencial a través de mensajes o correos electrónicos de phishing. Ten precaución y evita proporcionar datos personales o financieros a menos que estés seguro de la legitimidad del solicitante.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/phising.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                </div>
                <hr>
                <!-- 10 Considera el uso de una VPN (Red Privada Virtual -->
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo $URL?>Public/Img/Assets/RD/VPN.jpg" class="img-fluid rounded-start mt-5 pt-5" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fs-2 text-info">Considera el uso de una VPN (Red Privada Virtual)</h5>
                            <hr>
                            <p class="card-text fs-3">ReUna VPN encripta tu conexión a internet y oculta tu dirección IP, brindando mayor privacidad y seguridad. Utiliza una VPN confiable cuando te conectes a redes públicas o cuando desees proteger aún más tu privacidad en línea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center">Consejos para proteger tu identidad digital a salvó de hackers</h1>
            <ul>
                <li class="fs-4 "><strong class="text-info">Mantén tus dispositivos y software actualizados</strong>: Las actualizaciones de seguridad suelen corregir vulnerabilidades conocidas. Asegúrate de tener activadas las actualizaciones automáticas en tus dispositivos y aplicaciones, incluyendo el sistema operativo, antivirus y navegadores.
                </li>
                <li class="fs-4 "><strong class="text-info">Utiliza software antivirus y antimalware</strong>: Instala y mantén actualizado un programa antivirus confiable en tus dispositivos. Esto te ayudará a detectar y eliminar posibles amenazas de malware.
                </li>
                <li class="fs-4 "><strong class="text-info">Ten cuidado con los enlaces y archivos adjuntos</strong>: Evita hacer clic en enlaces desconocidos o sospechosos, especialmente aquellos recibidos a través de correos electrónicos o mensajes no solicitados. No descargues archivos adjuntos de fuentes no confiables, ya que pueden contener malware.
                </li>
                <li class="fs-4 "><strong class="text-info">Utiliza redes Wi-Fi seguras</strong>: Evita conectarte a redes Wi-Fi públicas o no seguras cuando realices transacciones sensibles o accedas a información confidencial. Utiliza una conexión segura, preferiblemente una red privada virtual (VPN), para encriptar tus datos y proteger tu conexión.
                </li>
                <li class="fs-4 "><strong class="text-info">Crea contraseñas fuertes y únicas</strong>: Utiliza contraseñas complejas y distintas para cada cuenta. Combina letras mayúsculas y minúsculas, números y caracteres especiales. Evita usar información personal obvia y considera el uso de un administrador de contraseñas para gestionar de forma segura tus credenciales.
                </li>
                <li class="fs-4 "><strong class="text-info">Activa la autenticación de dos factores</strong>: Habilita la autenticación de dos factores siempre que sea posible. Esto proporciona una capa adicional de seguridad al requerir un segundo paso de verificación, como un código enviado a tu teléfono, para acceder a tus cuentas.
                </li>
                <li class="fs-4 "><strong class="text-info">Sé consciente de la ingeniería social</strong>: Los hackers pueden intentar engañarte para obtener información confidencial. Ten cuidado con los mensajes o correos electrónicos que soliciten datos personales o financieros. Verifica la legitimidad de las solicitudes antes de proporcionar cualquier información.
                </li>
                <li class="fs-4 "><strong class="text-info">Configura adecuadamente la privacidad en redes sociales</strong>: Revisa y ajusta la configuración de privacidad en tus perfiles de redes sociales. Limita la visibilidad de tus publicaciones solo a personas de confianza y evita compartir información personal sensible en plataformas públicas.
                </li>
                <li class="fs-4 "><strong class="text-info">Aprende a identificar las señales de phishing</strong>: Mantente atento a los correos electrónicos, mensajes y sitios web sospechosos que intenten suplantar la identidad de organizaciones legítimas. Verifica cuidadosamente la URL y evita proporcionar información confidencial a menos que estés seguro de la autenticidad de la fuente.
                </li>
                <li class="fs-4 "><strong class="text-info">Educa y mantén una actitud de seguridad en línea</strong>: Mantente informado sobre las últimas amenazas y prácticas de seguridad en línea. Participa en programas de educación en seguridad cibernética y mantén una mentalidad de precaución y vigilancia al navegar por internet.</li>
            </ul>
        </div>
    <!-- Js -->
        <script src="<?php echo $URL?>Public/js/Jquery.js"></script>
        <script src="<?php echo $URL?>Public/js/bootstrap.bundle.js"></script>
</body>
</html>