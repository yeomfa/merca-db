<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/stylelogin.css">
        <link rel="icon" href="img/general/BannerLogin.png">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <title>Merca: Acceder o registrarse</title>
    </head>
    <body>
        <div class="l-form">
            <div class="form">
                <div class="container-img">
                    <img src="img/general/BannerLogin.png" alt="Canasta Merca con productos" class="form_img">
                </div>

                <form action="../controller/action/actLogin.php" class="form_content" method="post">
                <h1 class="form_title">¡Hola de nuevo!</h1>

                <div class="form_div form_div-one ">
                        <div class="form_icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form_div-input">
                            <label for="email" class="form_label">Correo</label>
                            <input name="email" type="text" class="form_input">
                        </div>
                </div>

                    <div class="form_div ">
                        <div class="form_icon">
                            <i class='bx bx-lock' ></i>
                        </div>
                        <div class="form_div-input">
                            <label for="password" class="form_label">Contraseña</label>
                            <input name="password" type="password" class="form_input">
                        </div>
                    </div>
                    <a href="#" class="form_forgot">¿Olvidó su contraseña?</a>

                    <input type="submit" class="form_button" value="Acceder">
                    <div class="form_social">
                        <span class="form_social-text">Inicie sesión con:</span>

                        <a href="#" class="form_social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="form_social-icon"><i class='bx bxl-google'></i></a>
                        <a href="#" class="form_social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>
            <div class="create-account">
                <span>¿No tienes una cuenta? <a href="register.php">Creala aquí</a></span>
            </div>
        </div>
        <!--=== MAIN js === -->
        <script src="js/applogin.js"> </script>

    </body>
</html>
