<?php   
    $email = $_POST['email'];
    $header ="Enviado desde la pagina Merca";
    $mensajeCompleto = 'Pulse el siguiente enlace para recuperar su contraseña';

    mail($email,'Recuperar contraseña', $mensajeCompleto, $header);
    header("Location: ../../view/login.php");
?>