<?php

require_once(__DIR__."/../mdb/mdbUser.php");

$idUser = $_POST['idUser'];
$name = $_POST['newname'];
$phone = $_POST['newphone'];
$email = $_POST['newemail'];
$dir = $_POST['newdir'];
$password = $_POST['newpass'];

$user = new User($idUser, $name, $phone, $email,  $dir, 0, $password, 0);
modifyUser($user);

$_SESSION['NAME_USER'] = $name;
$_SESSION['EMAIL_USER'] = $email;
$_SESSION['PHONE_USER'] = $phone;
$_SESSION['DIR_USER'] = $dir;

echo true;

?>