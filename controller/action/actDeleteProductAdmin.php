<?php

session_start();

require_once(__DIR__."/../mdb/mdbProduct.php");
$idProduct = $_GET['idProduct'];

deleteProduct($idProduct);

?>