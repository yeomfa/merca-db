<?php

class Product{
    public $idProduct;
    public $nameProduct;
    public $priceProduct;
    public $descriptionProduct;
    public $categoryProduct;
    public $photoProduct;

    public function __construct($idProduct, $nameProduct, $priceProduct, $descriptionProduct, $categoryProduct, $photoProduct){

        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->descriptionProduct = $descriptionProduct;
        $this->categoryProduct = $categoryProduct;
        $this->photoProduct = $photoProduct;

    }

    //GETTERS
    public function getIdProduct(){
        return $this->idProduct;
    }

    public function getNameProduct(){
        return $this->nameProduct;
    }

    public function getPriceProduct(){
        return $this->priceProduct;
    }

    public function getDescriptionProduct(){
        return $this->descriptionProduct;
    }

    public function getCategoryProduct(){
        return $this->categoryProduct;
    }

    public function getPhotoProduct(){
        return $this->photoProduct;
    }

    //SETERS

    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;

        return $this;
    }

    public function setNameProduct($nameProduct){
        $this->nameProduct = $nameProduct;

        return $this;
    }

    public function setPriceProduct($priceProduct){
        $this->priceProduct = $priceProduct;

        return $this;
    }

    public function setDescriptionProduct($descriptionProduct){
        $this->descriptionProduct = $descriptionProduct;

        return $this;
    }

    public function setCategoryProduct($categoryProduct){
        $this->categoryProduct = $categoryProduct;

        return $this;
    }

    public function setPhotoProduct($photoProduct){
        $this->photoProduct = $photoProduct;

        return $this;
    }
}

?>
