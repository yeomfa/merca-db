<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merca: Administrador</title>
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="icon" href="img/general/BannerLogin.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/appadmin.js"></script>
</head>

<body>
    <!-- HEADER -->
    <header class="header-admin">
        <div class="content-header">
            <div class="text-logo">
                <img class="logo" src="img/logos/LogoMercaAroundFinal.png" alt="">
                <img class="text" src="img/logos/LogoText.png" alt="">
            </div>
            <p>| Administrador</p>
        </div>
    </header>
    <!-- BODY -->
    <div class="container-body">
        <div class="menu-bar">
            <div class="header-menu">
                <i class='bx bxs-user-detail'></i>
                <p>
                    <?php if (isset($_SESSION['ID_USER'])) 
						echo $_SESSION['NAME_USER']; 
					?>
                </p>
            </div>
            <div class="main-menu-background">
                <!-- BAR MENU -->
                <div class="main-menu">
                    <ul>
                        <li>
                            <a id="tables">
                                <i class='bx bx-grid-alt color'></i>
                                <p class="color">Tablas</p>
                            </a>
                        </li>
                        <li>
                            <a id="history">
                                <i class='bx bx-list-ul color'></i>
                                <p class="color">Historial</p>
                            </a>
                        </li>
                        <li>
                            <a href="../controller/action/actLogout.php">
                                <i class='bx bx-log-out color'></i>
                                <p class="color">Cerrar sesión</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- MAIN -->
        <div class="main-content">

            <!-- SELECCIONAR TABLAS -->

            <div id="grid-tables" class="grid-tables">
                <div id="users" class="container-select">
                    <div class="icon-table">
                        <i class='bx bx-group'></i>
                    </div>
                    <div class="title-table-select">
                        <p>Usuarios</p>
                    </div>
                </div>
                <div id="products" class="container-select">
                    <div class="icon-table">
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                    <div class="title-table-select">
                        <p>Productos</p>
                    </div>
                </div> 
                <div id="stores" class="container-select">
                    <div class="icon-table">
                        <i class='bx bx-store'></i>
                    </div>
                    <div class="title-table-select">
                        <p>Tiendas</p>
                    </div>
                </div>
                <div id="dir" class="container-select">
                    <div class="icon-table">
                        <i class='bx bx-home'></i>
                    </div>
                    <div class="title-table-select">
                        <p>Direcciones</p>
                    </div>
                </div>
                <div id="orders" class="container-select">
                    <div class="icon-table">
                        <i class='bx bx-file'></i>
                    </div>
                    <div class="title-table-select">
                        <p>Ordenes</p>
                    </div>
                </div>
            </div>
            <!-- TABLAS -->
            <div id="container-table" class="container-table">
                <div id="load-table-users">
                    <div class="title-add">
                        <p class="title-table">Usuarios:</p>
                        <button id="btn-add" title="Agregar usuario">Agregar usuario<i
                                class='bx bx-user-plus'></i></button>
                    </div>
                    <table id="table-users" class="table-users">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Foto</th>
                                <th>Admin</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-users">
                            <!-- <tr>
                                <td>+result[i].name</td>
                                <td>+result[i].email</td>
                                <td>+result[i].phone</td>
                                <td>+result[i].dir</td>
                                <td>+result[i].photo</td>
                                <td>+result[i].admin</td>
                                <td class="btns">
                                    <button title="Editar" class="btnEdit"><i class="bx bx-pencil"></i></button>
                                    <button id="result[i].id" title="Eliminar" class="btnDelete"><i class="bx bx-trash"></i></button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <div id="load-table-products">
                    <div class="title-add">
                        <p class="title-table">Productos:</p>
                        <button id="btn-add-product" title="Agregar producto">Agregar producto<i class='bx bx-shopping-bag'></i></button>
                    </div>
                    <table id="table-products" class="table-products">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="tbody-products">
                            <!-- <tr>
                                <td>1</td>
                                <td>Jugo hit</td>
                                <td>2500</td>
                                <td>Un jugo de furta cont. 500ml</td>
                                <td>Alimento</td>
                                <td class="btns">
                                    <button title="Editar" class="btnEdit"><i class='bx bx-pencil'></i></button>
                                    <button title="Eliminar" class="btnDelete"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr> -->
                    </table>
                </div>
            </div>

            <div id="seehistory" class="history">
                <p>Historial de movimientos</p>
            </div>
        </div>
    </div>
    <div id="modals" class="modals">

        <!-- MODAL ADD USER -->
        
        <div class="modal-edit">
            <div class="container-edits close">
                <div class="container-btnClose">
                    <i id="btnClose" class='bx bx-x btn-close'></i>
                </div>
                <form id="form-add-user" action="" method="post" class="content-edits">
                    <div id="title-modal" class="title">Agregar usuario:</div>
                    <div class="cont-field">
                        <i class='bx bx-user icon-info'></i>
                        <label class="subtitle" for="">Nombre:</label>
                        <input id="" name='name' type="text" title="nombre" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-envelope icon-info'></i>
                        <label class="subtitle" for="">Correo:</label>
                        <input id="" name="email" type="text" title="correo" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-mobile-alt icon-info'></i>
                        <label class="subtitle" for="newphone">Teléfono:</label>
                        <input id="newphone" name="phone" type="text" title="teléfono" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-home icon-info'></i>
                        <label class="subtitle" for="newdirection">Dirección:</label>
                        <input id="newdir" name="dir" type="text" title="dirección" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-lock-alt icon-info'></i>
                        <label class="subtitle" for="newpassword">Contraseña:</label>
                        <input id="newpassword" name="password" type="text" title="contraseña" value="">
                    </div>
                    <button type="submit" class="btn-act" title="Actualizar">
                        <span id="btn-modal">Agregar</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- MODAL EDIT USER -->

        <div id="modal-edit-user" class="modal-edit-user">
            <div class="container-edits-user">
                <div class="container-btnClose">
                    <i id="btn-close-act" class='bx bx-x btn-close-user'></i>
                </div>
                <form id="form-act-user" action="" method="post" class="content-edits-user">
                    <div id="title-modal" class="title">Editar usuario:</div>
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
                    <input hidden type="number" name="idUser" for="idUser" value=<?php if (isset($_SESSION['ID_USER'])) echo
                    $_SESSION['ID_USER']; ?>>
                    <button type="submit" class="btn-act" title="Actualizar">
                        <span id="btn-modal-edit">Aceptar</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- MODAL ADD PRODUCT -->
        
        <div id="modal-add-product" class="modal-edit-user">
            <div class="container-edits-user">
                <div class="container-btnClose">
                    <i id="btn-close-add-product" class='bx bx-x btn-close-user'></i>
                </div>
                <form id="form-add-product" action="" method="post" class="content-edits-user">
                    <div id="" class="title">Agregar producto:</div>
                    <div class="cont-field">
                        <i class='bx bx-shopping-bag icon-info'></i>
                        <label class="subtitle" for="">Nombre:</label>
                        <input id="" name='name' type="text" title="nombre" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-purchase-tag-alt icon-info'></i>
                        <label class="subtitle" for="">Price:</label>
                        <input id="" name="price" type="text" title="correo" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-text icon-info'></i>
                        <label class="subtitle" for="newdescription">Descripción:</label>
                        <input id="" name="description" type="text" title="teléfono" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-category-alt icon-info' ></i>
                        <label class="subtitle" for="newdirection">Categoría:</label>
                        <input id="" name="category" type="text" title="dirección" value="">
                    </div>
                    <button type="submit" class="btn-act" title="Actualizar">
                        <span id="btn-modal-add-product">Aceptar</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- MODAL EDIT PRODUCT -->

        <div id="modal-edit-product" class="modal-edit-user">
            <div class="container-edits-user">
                <div class="container-btnClose">
                    <i id="btn-close-act-product" class='bx bx-x btn-close-user'></i>
                </div>
                <form id="form-act-product" action="" method="post" class="content-edits-user">
                    <div id="" class="title">Editar producto:</div>
                    <div class="cont-field">
                        <i class='bx bx-shopping-bag icon-info'></i>
                        <label class="subtitle" for="">Nombre:</label>
                        <input id="" name='newname' type="text" title="nombre" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-purchase-tag-alt icon-info'></i>
                        <label class="subtitle" for="">Price:</label>
                        <input id="" name="newprice" type="text" title="correo" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-text icon-info'></i>
                        <label class="subtitle" for="newdescription">Descripción:</label>
                        <input id="" name="newdescription" type="text" title="teléfono" value="">
                    </div>
                    <div class="cont-field">
                        <i class='bx bx-category-alt icon-info' ></i>
                        <label class="subtitle" for="newdirection">Categoría:</label>
                        <input id="newdir" name="newcategory" type="text" title="dirección" value="">
                    </div>
                    <input hidden type="number" name="idProduct" for="idProduct" value=<?php if (isset($_SESSION['ID_USER'])) echo
                    $_SESSION['ID_USER']; ?>>
                    <button type="submit" class="btn-act" title="Actualizar">
                        <span id="btn-modal-act-product">Aceptar</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- SUCCES -->
        <div id="alert-succes" class="content-alerts">
            <div class="header-alerts">
                <div>
                    <i class='bx bxs-check-circle'></i>
                    <span> ÉXITO </span>
                </div>
                <span>Se realizó la operación correctamente</span>
            </div>
            <button type="button" class="btn-act btn-acept" title="Actualizar">
                <span>Aceptar</span>
                <i class='bx bx-check btn-icon'></i>
            </button>
        </div>

        <!-- ERROR -->
        <div id="alert-error" class="content-alerts">
            <div class="header-alerts-error">
                <div>
                    <i class='bx bxs-x-circle'></i>
                    <span> ERROR </span>
                </div>
                <span>Ha ocurrido un error</span>
            </div>
            <button type="button" class="btn-act btn-acept" title="Actualizar">
                <span>Aceptar</span>
                <i class='bx bx-check btn-icon'></i>
            </button>
        </div>

        <!-- WARNING -->

        <div id="alert-warning" class="content-alerts-warning">
            <div class="header-alerts-warning">
                <div>
                    <i class='bx bxs-error'></i>
                    <span> ADVERTENCIA </span>
                </div>

                <div class="main-alerts-warning">
                    <span id="msg-alert-warning">¿Eliminar cuenta de manera permanente?</span>
                </div>
            </div>
            <div class="btns-warning">
                <button id="cancel" type="button" class="btn-cancel btn-acept" title="Cancelar">
                    <span>Cancelar</span>
                    <i class='bx bx-x btn-icon'></i>
                </button>
                <form action="" method="get">
                    <input hidden type="number" name="idUser" for="idUser" value="">
                    <button id="btn-delete" type="button" class="btn-delete-2 btn-acept" title="Eliminar">
                        <span>Eliminar</span>
                        <i class='bx bx-trash btn-icon'></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>