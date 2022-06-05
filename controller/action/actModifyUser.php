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

echo true;

?>