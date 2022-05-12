<?php

session_start();

require_once (__DIR__."/../mdb/mdbUser.php");
require_once (__DIR__."/../../model/entity/User.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(isset($_POST["admin"])){
    $user = new User(NULL, $name, $email, "", $password, $admin, "", "");
    registerUser($user);
    header("Location: ../../view/admin.php");
}else {
    $user = new User(NULL, $name, $email, "", $password, 0, "", "img/ppUser/noprofile.jpg");
    $signup = registerUser($user);
    if ($signup){
        header("Location: ../../view/login.php?msg=¡Registro exitoso, ahora eres parte de la familia!");
    }else {
        header("Location: ../../view/register.php?msg=Error al registrar");
    }

}

?>
