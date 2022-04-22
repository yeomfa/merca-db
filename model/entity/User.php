<?php

class User{
    private $id;
    private $name;
    private $email;
    private $password;
    private $admin;

    public function __construct($id, $name, $email, $password, $admin){

        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
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

     public function getPassword(){
        return $this->password;
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

    public function setPassword($password){
        $this->password = $password;

        return $this;
    }

    public function setAdmin($admin){
        $this->admin = $admin;

        return $this;
    }
}

?>
