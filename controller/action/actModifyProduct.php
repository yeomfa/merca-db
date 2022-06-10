<?php

require_once(__DIR__."/../mdb/mdbProduct.php");

$idProduct = $_POST['idProduct'];
$nameProduct = $_POST['newname'];
$priceProduct = $_POST['newprice'];
$descriptionProduct = $_POST['newdescription'];
$categoryProduct = $_POST['newcategory'];

$product = new Product($idProduct, $nameProduct, $priceProduct, $descriptionProduct,  $categoryProduct, $idProduct.'.jpg');
modifyProduct($product);

echo true;

?>