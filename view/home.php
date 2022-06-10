<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merca: ¡Tiendas y más!</title>
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="icon" href="img/general/BannerLogin.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        <!--MENU HAMBURGUESA-->
    <nav class="bar-menu close">
        <header>
            <div class="bar-logo-text">
                <a href="profile.php">
                    <span class="bar-logo">
                        <img src="<?php if (isset($_SESSION['ID_USER']))
						    echo 'img/ppUser/'.$_SESSION['PHOTO_USER']; 
						?>" alt="Logo Merca">
                    </span>
                    <div class="text bar-text">
                        <span class="name">
                            <?php if (isset($_SESSION['ID_USER'])) 
							    echo $_SESSION['NAME_USER']; 
						    ?>
                        </span>
                        <span class="rol">Vendedor/Comprador</span>
                    </div>
                </a>
            </div>

            <img class="bar-toggle" src="img/icons/iconHam.svg" alt="Icono cerrar menu bar">
        </header>

        <div class="bar-options">
            <div class="options">
                <li class="bar-search">
                    <i class='bx bx-search op-icon'></i>
                    <input type="search" placeholder="Buscar">
                </li>
                <ul class="options-links">
                    <li class="op-link">
                        <a href="#">
                            <i class='bx bx-home-alt-2 op-icon'></i>
                            <span class="text op-text">Inicio</span>
                        </a>
                    </li>
                    <li class="op-link">
                        <a href="#">
                            <i class='bx bx-store op-icon'></i>
                            <span class="text op-text">Tienda</span>
                        </a>
                    </li>
                    <li class="op-link">
                        <a href="#">
                            <i class='bx bx-shopping-bag op-icon'></i>
                            <span class="text op-text">Categorías</span>
                        </a>
                    </li>
                    <li class="op-link">
                        <a href="#">
                            <i class='bx bx-heart op-icon'></i>
                            <span class="text op-text">Favoritos</span>
                        </a>
                    </li>
                    <li class="op-link">
                        <a href="#">
                            <i class='bx bx-wallet op-icon'></i>
                            <span class="text op-text">Billetera</span>
                        </a>
                    </li>
                    <li class="op-link">
                        <a href="juego.html">
                            <i class='bx bx-joystick op-icon'></i>
                            <span class="text op-text">Juego</span>
                        </a>
                    </li>
                    <li class="op-link">
                        <a href="#">
                            <i class='bx bx-wrench op-icon'></i>
                            <span class="text op-text">Configuraciones</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-bar-bottom">
                <li class="op-link">
                    <a href="../controller/action/actLogout.php">
                        <i class='bx bx-log-out op-icon'></i>
                        <span class="text op-text">Cerrar sesión</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

        <!--HEADER-->
    <header class="header">
        <div class="container-header">
            <div class="contenido-header">
                <div class="head-izq">
                    <div class="logo-opciones">
                        <a href="home.php"><img src="img/logos/LogoMercaAroundFinal.png" alt="Logo merca" class="logoHead"></a>
                        <a href="home.php"><img src="img/logos/LogoText.png" alt="Texto merca" class="textLogoHead"></a>
                    </div>
                    <div class="contenedor-barra">
                        <input type="search" class="barra-buscar" placeholder="Buscar productos">
                        <section class="boton-buscar"><a href="#"><img src="img/icons/iconLupa.png" alt="Boton buscar" class="icon-search"></a></section>
                    </div>
                </div>
                <div class="navegacion">
                    <div class="head-opciones">
                        <ul>
                            <li><a class="bold-text" href="#">Tiendas</a></li>
                            <li><a class="bold-text" href="#">Ofertas</a></li>
                            <li><a class="bold-text" href="#">Vender</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="navegacion">
                    <ul>
                        <li><a href="#"><img src="img/icons/iconCar.png" class="car" alt="Carrito"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="posicion-ad">
            <div class="anuncio">¡Aquí se mostraran algunos anuncios y ofertas!</div>
        </div>
    </header>
    <!--CUERPO-->
    <section class="cuerpo">
        <div class="contenedor-cuerpo">
            <div class="cuerpo-subtitle">Destacados del día</div>
            <div class="contenedor-cuerpo-grid">
                <div id="container1" class="cuerpo-grid">
                    
                </div>
            </div>

            <div class="cuerpo-subtitle">Ofertas</div>
            <div class="contenedor-cuerpo-grid">
                <div id="container2" class="cuerpo-grid">
                    
                </div>
            </div>

            <div class="cuerpo-subtitle">Recomendados para ti</div>
            <div class="contenedor-cuerpo-grid">
                <div id="container3" class="cuerpo-grid">
                    
                </div>
            </div>

            <div class="cuerpo-subtitle">Secciones</div>
            <div class="contenedor-grid-secciones">
                <div class="grid-secciones">
                    <a href="#">
                        <div class="contenedor-seccion">
                            <div class="img-seccion">
                                <img src="img/photosProducts/7.jpg" alt="Imagen seccion" class="imagen-seccion">
                            </div>
                            <div class="contenedor-info-seccion">
                                <div class="titulo-seccion">
                                    DESPENSA
                                </div>
                                <div class="descripcion-seccion">
                                    Ver productos
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="contenedor-seccion">
                            <div class="img-seccion">
                                <img src="img/photosProducts/5.jpg" alt="Imagen seccion" class="imagen-seccion">
                            </div>
                            <div class="contenedor-info-seccion">
                                <div class="titulo-seccion">
                                    BEBIDAS
                                </div>
                                <div class="descripcion-seccion">
                                    Ver productos
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="contenedor-seccion">
                            <div class="img-seccion">
                                <img src="img/photosProducts/6.jpg" alt="Imagen seccion" class="imagen-seccion">
                            </div>
                            <div class="contenedor-info-seccion">
                                <div class="titulo-seccion">
                                    CUIDADO PERSONAL
                                </div>
                                <div class="descripcion-seccion">
                                    Ver productos
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="contenedor-seccion">
                            <div class="img-seccion">
                                <img src="img/photosProducts/11.jpg" alt="Imagen seccion" class="imagen-seccion">
                            </div>
                            <div class="contenedor-info-seccion">
                                <div class="titulo-seccion">
                                    LIMPIEZA
                                </div>
                                <div class="descripcion-seccion">
                                    Ver productos
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </section>

    <!--FOOTER-->
    <footer class="footer">
        <div class="footer-contenedor">
            <div class="footer-contenido">
                <div class="footer-left">
                    <div class="footer-top">
                        <div class="footer-subtitle">Políticas:</div>
                        <a href="#"><div class="footer-text">Políticas de privacidad</div></a>
                        <a href="#"><div class="footer-text">Terminos y condiciones</div></a>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-subtitle">Ayuda:</div>
                        <a href="#"><div class="footer-text">FAQ</div></a>
                        <a href="#"><div class="footer-text">Soporte</div></a>
                    </div>
                </div>
                <div class="footer-center">
                    <div class="footer-center-up">
                        <div class="footer-logo-contenedor">
                            <img src="img/logos/LogoMercaAroundFinal.png" class="footer-logo" alt="Logo Merca">
                        </div>
                    </div>
                    <div class="footer-center-down">
                        <div class="footer-redes-contenedor">
                            <a href="#"><i class='bx bxl-facebook-square icon-footer'></i></a>
                            <a href="#"><i class='bx bxl-twitter icon-footer'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt icon-footer' ></i></a>
                            <a href="#"><i class='bx bxl-youtube icon-footer'></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-top">
                        <div class="footer-subtitle">Contacto:</div>
                        <a href="#"><div class="footer-text">mercacontact@gmail.com</div></a>
                        <a href=""><div class="footer-text">+57 320 444 3214</div></a>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-subtitle">Acerca de nosotros:</div>
                        <a href="hojas.html"><div class="footer-text">¿Quienes somos?</div></a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-contenedor">
                <div class="footer-copyright">Copyright © 2022 MERCA.</div>
            </div>
        </div>
    </footer>

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/appmain.js"></script>
</body>
</html>
