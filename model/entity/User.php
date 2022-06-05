<?php

class User{
    public $id;
    public $name;
    public $phone;
    public $email;
    public $dir;
    public $password;
    public $admin;
    public $photo;

    public function __construct($id, $name, $phone, $email, $dir, $photo, $password, $admin){

        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->dir = $dir;
        $this->photo = $photo;
        $this->password = $password;
        $this->admin = $admin;

    }

    //GETTERS
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDir(){
        return $this->dir;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getIdStore(){
        return $this->idStore;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function admin(){
        return $this->admin;
    }

    //SETERS

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function setName($name){
        $this->name = $name;

        return $this;
    }

    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    public function setDir($email){
        $this->dir = $dir;

        return $this;
    }

    public function setPhone($phone){
        $this->phone = $phone;

        return $this;
    }

    public function setIdStore($idStore){
        $this->idStore = $idStore;

        return $this;
    }

    public function setPassword($password){
        $this->password = $password;

        return $this;
    }

    public function setPhoto($photo){
        $this->photo = $photo;

        return $this;
    }

    public function setAdmin($admin){
        $this->admin = $admin;

        return $this;
    }
}

?>
