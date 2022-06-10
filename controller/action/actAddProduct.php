<?php

session_start();

require_once (__DIR__."/../mdb/mdbProduct.php");
require_once (__DIR__."/../../model/entity/Product.php");

$nameProduct = $_POST['name'];
$priceProduct = $_POST['price'];
$descriptionProduct = $_POST['description'];
$categoryProduct = $_POST['category'];


$product = new Product(NULL, $nameProduct, $priceProduct, $descriptionProduct,  $categoryProduct, 'No hay foto');
$signup = registerProduct($product);
if ($signup != null){
    echo $signup;
}

?>