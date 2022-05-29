<?php

session_start();

require_once (__DIR__."/../mdb/mdbUser.php");
require_once (__DIR__."/../../model/entity/User.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$user = new User(NULL, $name, $email, "Agregue un teléfono", $password, 0, "Agregue una dirección", "iconUser.svg");
$signup = registerUser($user);
if ($signup){
    header("Location: ../../view/login.php");
}else {
    header("Location: ../../view/register.php");
}

?>
