<?php

session_start();

require_once(__DIR__."/../mdb/mdbUser.php");
$idUser = $_GET['idUser'];

deleteUser($idUser);

header("Location: ../../view/login.php");

?>