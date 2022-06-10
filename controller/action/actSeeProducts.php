<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbProduct.php');

    $products = seeProducts();
    echo json_encode($products);
?>