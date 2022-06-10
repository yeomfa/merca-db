<?php

require_once(__DIR__."/../../model/dao/ProductDAO.php");

function registerProduct(Product $product){

    $dao = new ProductDAO();

    $product = $dao->registerProduct($product);

    return $product;

}

function deleteProduct($idProduct){
    $dao = new ProductDAO();
    $dao->deleteProduct($idProduct);
}

function modifyProduct($product){
    $dao = new ProductDAO();
    $dao->modifyProduct($product);
}

// function updatePhoto($namePhoto, $id){

//     $dao = new UserDAO();
//     $user = $dao->updatePhoto($namePhoto, $id);
//     return $user;
// }

function seeProducts(){
    $dao = new ProductDAO();
    $products = $dao->seeProducts();
    return $products;
}

function seeProduct($idProduct){
    $dao= new ProductDAO();
    $product = $dao->seeProduct($idProduct);
    return $product;
}
?>
