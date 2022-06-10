<?php
require_once ("DataBase.php");
require_once(__DIR__."/../entity/Product.php");

class ProductDAO{

    public function registerProduct(Product $product){
        $dataBase = new DataBase();

        $stmt1 = "INSERT INTO product VALUES (NULL, :nameProduct, :priceProduct, :descriptionProduct, :categoryProduct, :photoProduct)";
        $result = $dataBase->runUpdate($stmt1, array(
            ':nameProduct'=>$product->getNameProduct(),
            ':priceProduct'=>$product->getPriceProduct(),
            ':descriptionProduct'=>$product->getDescriptionProduct(),
            ':categoryProduct'=>$product->getCategoryProduct(),
            ':photoProduct'=>$product->getPhotoProduct()
            )
        );

        return $result;
    }

    public function deleteProduct($idProduct){
        $dataBase = new DataBase();

        $stmt1 = "DELETE FROM product WHERE idProduct = :idProduct";

        $result = $dataBase->runUpdate($stmt1, array(':idProduct' => $idProduct));

        return $result;
    }

    public function modifyProduct($product){
        $dataBase = new DataBase();

        $stmt1 = "UPDATE product SET nameProduct = :nameProduct, priceProduct = :priceProduct, descriptionProduct = :descriptionProduct, categoryProduct = :categoryProduct, photoProduct = :photoProduct WHERE idProduct = :idProduct"; 

        $result = $dataBase->runUpdate($stmt1, array(
            ':nameProduct' => $product->getNameProduct(),
            ':priceProduct' => $product->getPriceProduct(),
            ':descriptionProduct' => $product->getDescriptionProduct(),
            ':categoryProduct' => $product->getCategoryProduct(),
            ':photoProduct' => $product->getPhotoProduct(),
            ':idProduct' => $product->getIdProduct()
        )); 

        return $result;
    }

    // public function updatePhotoProduct($namePhoto, $id){

    //     $dataBase = new DataBase();
    //     $stmt1 = "UPDATE user SET photo = :photo WHERE id = :idUser";
    //     $result = $dataBase->runUpdate($stmt1, array(
    //         ':photo' => $namePhoto,
    //         ':idUser' => $id
    //     ));

    // }

    public function seeProducts(){
        $dataBase = new DataBase();
        
        $dataTable = $dataBase->runQuery("SELECT * FROM product", NULL);
        $product=null;
        $products=array();

        foreach($dataTable as $i => $value){
            $product = new Product(
                    $dataTable[$i]["idProduct"],
                    $dataTable[$i]["nameProduct"],
                    $dataTable[$i]["priceProduct"],
                    $dataTable[$i]["descriptionProduct"],
                    $dataTable[$i]["categoryProduct"],
                    $dataTable[$i]["photoProduct"]
                    );
            array_push($products,$product);
        }
        
        return $products;
    }

    public function seeProduct($idProduct){
        $dataBase = new DataBase();

        $dataTable = $dataBase->runQuery("SELECT * FROM product WHERE idProduct = :idProduct", array(':idProduct'=>$idProduct));

        $product=null;
        if(count($dataTable)==1){
            $product = new Product(
                    $dataTable[0]["idProduct"],
                    $dataTable[0]["nameProduct"],
                    $dataTable[0]["priceProduct"],
                    $dataTable[0]["descriptionProduct"],
                    $dataTable[0]["categoryProduct"],
                    $dataTable[0]["photoProduct"]
                    );
        }


        return $product;
    }

}

 ?>
