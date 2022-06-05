<?php

session_start();

require_once (__DIR__."/../mdb/mdbUser.php");
require_once (__DIR__."/../../model/entity/User.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$dir = $_POST['dir'];
$email = $_POST['email'];
$password = $_POST['password'];


$user = new User(NULL, $name, $email, $phone, $password, 0, $dir, "iconUser.svg");
$signup = registerUser($user);
if ($signup != null){
    echo $signup;
}

?>