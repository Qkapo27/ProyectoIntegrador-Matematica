        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container">
                    <a class="navbar-brand" href="<?php echo $URL?>">
                        <img src="<?php echo $URL?>Public/Img/Logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li><a class="dropdown-item" href="<?php echo $URL?>">Inicio</a></li>
                            <!-- Matematica -->
                            <li class="nav-item dropdown mb-3 mt-3">
                                <a class="nav-link dropdown-toggle btn btn-outline-info fs-5 fw-bold" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    Matematica
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- GeoGebra -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                GeoGebra
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Geogebra.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Geogebra.php#Características">Características básicas</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Geogebra.php#Funciones">Funciones principales</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Geogebra.php#Ventajas">Ventajas y Desventajas</a></li>
                                            </ul>
                                        </li>
                                    <!-- Derivadas -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Derivadas
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item " href="<?php echo $URL?>Layout/Matematica/Derivadas.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Derivadas.php#usos">Algunos usos</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Derivadas.php#física">Uso en la física</a></li>
                                                <hr>
                                                <p class="text-center">Temas Nuevos</p>
                                                <hr>
                                                <li><a class="dropdown-item " href="<?php echo $URL?>Layout/Matematica/Derivadas.php#Compuestas">Compuestas</a></li>
                                            </ul>
                                        </li>
                                        <!-- Maximos y minimos -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Maximos y minimos
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item " href="<?php echo $URL?>Layout/Matematica/MyM.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/MyM.php#Concavidad">Concavidad</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/MyM.php#Punto">Punto de Inflexión</a></li>
                                                <hr>
                                                <li><a class="dropdown-item " href="<?php echo $URL?>Layout/Matematica/Derivadas.php#Compuestas">Compuestas</a></li>
                                            </ul>
                                        </li>
                                    <!-- Integrales -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Integrales
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Integrales.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Integrales.php#usos">Algunos usos</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Integrales.php#indefinida">Integral indefinida</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Matematica/Integrales.php#definida">Integral definida</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </li>    
                            <!-- Redes de Datos -->
                            <li class="nav-item dropdown mb-3">
                                <a class="nav-link dropdown-toggle btn btn-outline-info fs-5 fw-bold" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    Redes de datos
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Página web -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Página web
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Pagina-web.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Pagina-web.php#Lenguajes">Lenguajes</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Pagina-web.php#Desarrollo">Desarrollo sostenible</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Pagina-web.php#Internet">Internet</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Pagina-web.php#Comunicación">Comunicación</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Pagina-web.php#Sirve">Para que sirve</a></li>
                                            </ul>
                                        </li>
                                    <!-- proteger -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Proteger identidad en internet
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Proteger-Identidad.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Proteger-Identidad.php#Elementos">Elementos</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Proteger-Identidad.php#Consejos">Consejos </a></li>
                                            </ul>
                                        </li>
                                    <!-- Tecnologia Inalambrica -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Tecnologia Inalambrica
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Tecnologia-Inalambrica.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Tecnologia-Inalambrica.php#Tecnologia">Tecnologias</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Redes/Tecnologia-Inalambrica.php#5G">Tecnologia 5G</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </li>       
                            <!-- Instalacion y Mantenimiento -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle btn btn-outline-info fs-5 fw-bold" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    Instalacion y Mantenimiento <br> de Hardware y Software
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- Dominio nivel superior -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Dominio de nivel superior
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/Dominio.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/Dominio.php#Fiabilidad">Fiabilidad</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/Dominio.php#Dominios">Dominios de nivel Superior</a></li>
                                            </ul>
                                        </li>
                                    <!-- Netiqueta -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Netiqueta
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/Netiqueta.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/Netiqueta.php#Sirve">Para que sirve</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/Netiqueta.php#Reglas">Reglas </a></li>
                                            </ul>
                                        </li>
                                    <!-- Línea del tiempo -->
                                        <li ><a class="nav-link text-dark px-1" href="<?php echo $URL?>Layout/Instalacion/Evolucion.php">Linea del tiempo</a></li>
                                    <!-- SO en Tiempo Real-->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Sistema Operativo en Tiempo Real
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO-TReal.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO-TReal.php#Características">Características</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO-TReal.php#Aplicaciones">Aplicaciones</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO-TReal.php#Campos">Campos de Aplicación</a></li>
                                            </ul>
                                        </li>
                                    <!-- SO Embebido-->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Sistema Operativo Embebido
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO/S.O-Embebido.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO/S.O-Embebido.php#Características">Características</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO/S.O-Embebido.php#Ejemplos">Ejemplos</a></li>
                                            </ul>
                                        </li>
                                    <!-- SO Distribuido-->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-dark px-1" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                                Sistema Operativo Distribuido
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO/S.O-Distribuido.php#Concepto">Concepto</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO/S.O-Distribuido.php#Características">Características</a></li>
                                                <li><a class="dropdown-item" href="<?php echo $URL?>Layout/Instalacion/SO/S.O-Distribuido.php#Ejemplos">Ejemplos</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </li>                         
                        </ul>
                        <!-- <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </form> -->
                    </div>
                </div>
            </div>
        </nav>      