<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merca: Mi perfil</title>
    <link rel="icon" href="img/general/BannerLogin.png">
    <link rel="stylesheet" href="css/styleprofile.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <div class="contenedor-header">
            <div class="back">
                <a href="#" onclick="goBack()" title="Volver"><i class='bx bx-chevron-left icon-b'></i></a>
            </div>
            <div class="logo-text">
                <span class="logo"> <img src="img/logos/LogoMercaAroundFinal.png" alt="Logo Merca"></span>
                <span class="text"><img src="img/logos/LogoText.png" alt="texto del logo"></span>
            </div>
        </div>
    </header>
    <main class="container-main">
        <div class="content-main">
            <div class="head-main">
                <div class="cont-img">
                    <img id="img-user" src="" alt="Foto perfil" class="img-profile">
                    <div class="up-image" tabindex="0">
                        <i class='bx bx-image-add'></i>
                    </div>
                </div>
                <div class="cont-name-user">
                    <span id="name-user"class="name">

                    </span>
                    <span id="rol-user" class="rol">Vendedor/Comprador</span>
                </div>
            </div>

            <!--INFORMATION-->

            <div class="container-info">
                <div class="cont-date">
                    <i class='bx bx-envelope icon-info'></i>
                    <label>Correo:</label>
                    <span id="email-user">

                    </span>
                </div>

                <div class="cont-date">
                    <i class='bx bx-mobile-alt icon-info'></i>
                    <label>Teléfono:</label>
                    <span id="phone-user">
                        
                    </span>
                </div>

                <div class="cont-date">
                    <i class='bx bx-home icon-info'></i>
                    <label>Dirección:</label>
                    <span id="dir-user">
                        
                    </span>
                </div>

                <div class="cont-date">
                    <i class='bx bx-lock-alt icon-info'></i>
                    <label>Contraseña:</label>
                    <span id="password-user"></span>
                </div>

            </div>

            <div class="cont-buttons">
                <button id="btn-modify" class="btn-modify">
                    <div>
                        <span class="modify">Modificar</span>
                        <i class='bx bx-pencil btn-icon'></i>
                    </div>
                </button>
                <button class="btn-delete">
                    <div>
                        <span class="delete">Eliminar cuenta</span>
                        <i class='bx bx-trash btn-icon'></i>
                    </div>
                </button>
            </div>
        </div>

        <!--EDITS-->
        <div id="modal-act" class="container-edits">
                <div class="container-btnClose">
                    <i id="btnClose" class='bx bx-x btn-close'></i>
                </div>
                <form id="form-edit" action="" method="post" class="content-edits">
                    <div id="title-modal" class="title">Actualizar usuario:</div>
                    <div class="cont-field">
                        <i class='bx bx-user icon-info'></i>
                        <label class="subtitle" for="">Nombre:</label>
                        <input id="" name='newname' type="text" title="nombre" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-envelope icon-info'></i>
                        <label class="subtitle" for="">Correo:</label>
                        <input id="" name="newemail" type="text" title="correo" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-mobile-alt icon-info'></i>
                        <label class="subtitle" for="newphone">Teléfono:</label>
                        <input id="newphone" name="newphone" type="text" title="teléfono" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-home icon-info'></i>
                        <label class="subtitle" for="newdirection">Dirección:</label>
                        <input id="newdir" name="newdir" type="text" title="dirección" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-lock-alt icon-info'></i>
                        <label class="subtitle" for="newpassword">Contraseña:</label>
                        <input id="newpassword" name="newpass" type="text" title="contraseña" value="">
                    </div>
                    <input hidden type="number" name="idUser" for="idUser" value=''>
                    <button type="submit" class="btn-act" title="Actualizar">
                        <span id="btn-modal-edit">Aceptar</span>
                    </button>
                </form>
            </div>

    <!--ALERTS-->
    
    <!-- UP IMAGE -->

    <div class="container-alerts-select select close">
        <div class="container-btnClose">
            <i id="btnClose-select" class='bx bx-x btn-close-select'></i>
        </div>
        <div class="content-alerts">
            <div class="header-alerts-select">
                <i class='bx bxs-user-circle'></i>
                <span> Subir foto de perfil </span>
            </div>
            <div class="main-alerts-select">
                <form id="upImage" method="post" enctype="multipart/form-data"> 
                    <div id="cont-img-select" class="cont-img-select close">
                        <img id="pre-img" class="img-profile" src="img/ppUser/iconUser.svg" alt="">
                    </div>
                    <input class="select-file" type="file" name="img" id="img" accept="image/*" title="Subir imagen">  
                    <button id="send-image" type="button" class="btn-act-photo" title="Actualizar">
                        <span>Actualizar</span>
                        <i class='bx bx-check btn-icon'></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- SUCCES -->

    <div id="alert-success" class="container-alerts succes">
        <div class="content-alerts">
            <div class="header-alerts">
                <i class='bx bxs-check-circle'></i>
                <span> ÉXITO </span>
            </div>
            <div class="main-alerts">
                <span id="msg-alert">¡Los datos se han actualizado!</span>
            </div>
            <button id="btn-acept" type="button" class="btn-act btn-acept" title="Actualizar">
                <span>Aceptar</span>
                <i class='bx bx-check btn-icon'></i>
            </button>
        </div>
    </div>

    <!--ERROR-->

    <div class="container-alerts error close">
        <div class="content-alerts">
            <div class="header-alerts-error">
                <i class='bx bxs-x-circle'></i>
                <span> ERROR </span>
            </div>
            <div class="main-alerts">
                <span id="msg-alert-error">¡Ha ocurrido un error!</span>
            </div>
            <button type="button" class="btn-act" title="Actualizar">
                <span>Aceptar</span>
                <i class='bx bx-check btn-icon'></i>
            </button>
        </div>
    </div>

    <!-- WARNING -->

    <div class="container-alerts-warning warning close">
        <div class="content-alerts-warning">
            <div class="header-alerts-warning">
                <i class='bx bxs-error'></i>
                <span> ADVERTENCIA </span>
            </div>
            <div class="main-alerts-warning">
                <span id="msg-alert-warning">¿Eliminar su cuenta de manera permanente?</span>
            </div>
            <div class="btns-warning">
                <button type="button" class="btn-cancel" title="Cancelar">
                    <span>Cancelar</span>
                    <i class='bx bx-x btn-icon'></i>
                </button>
                <form action="../controller/action/actDeleteUser.php" method="get">
                    <input hidden type="number" id="id-user" name="idUser" for="idUser" value=<?php if (isset($_SESSION['ID_USER']))
                        echo $_SESSION['ID_USER']; ?>>
                    <button type="submit" class="btn-delete-2" title="Eliminar">
                        <span>Eliminar</span>
                        <i class='bx bx-trash btn-icon'></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/appprofile.js"></script>
    <script src="js/appfunctions.js"></script>

</body>

</html>