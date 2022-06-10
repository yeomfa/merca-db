<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbProduct.php');
    
    $idProduct = $_GET['idProduct'];

    $product = seeProduct($idProduct);
    
    echo json_encode($product);
?>