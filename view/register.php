<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleregister.css">
    <link rel="icon" href="img/general/BannerLogin.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Merca: Acceder o registrarse</title>
</head>

<body>
    <div class="l-form">
        <div class="form">
            <div class="container-img">
                <img src="img/general/BannerLogin.png" alt="Canasta Merca con productos" class="form_img">
            </div>

            <form action="../controller/action/actSignup.php" method="post" class="form_content">
                <h1 class="form_title">¡Únete a la familia!</h1>

                <div class="form-name">
                    <div class="form_div form_div-one ">
                        <div class="form_icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form_div-input">
                            <label for="name" class="form_label">Nombre de usuario</label>
                            <input name="name" type="text" id="name" class="form_input">
                        </div>
                    </div>

                </div>

                <div class="form_div form_div-one ">
                    <div class="form_icon">
                        <i class='bx bx-envelope'></i>
                    </div>

                    <div class="form_div-input">
                        <label for="email" class="form_label">Correo</label>
                        <input name="email" type="email" id="email" class="form_input">
                    </div>
                </div>

                <div class="form_div form_div-one">
                    <div class="form_icon">
                        <i class='bx bx-lock'></i>
                    </div>
                    <div class="form_div-input">
                        <label for="password" class="form_label">Contraseña</label>
                        <input name="password" type="password" id="password" class="form_input">
                    </div>
                </div>

                <input type="submit" id="register" class="form_button" value="Registrarse">
                <div class="form_social">
                    <span class="form_social-text">Registrese con:</span>

                    <a href="#" class="form_social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="form_social-icon"><i class='bx bxl-google'></i></a>
                    <a href="#" class="form_social-icon"><i class='bx bxl-instagram'></i></a>
                </div>
            </form>
        </div>
        <div class="create-account">
            <span>¿Ya tienes una cuenta? <a href="login.php">Accede aquí</a></span>
        </div>
    </div>
    <!--=== MAIN js === -->
    <script src="js/applogin.js"> </script>

</body>

</html>