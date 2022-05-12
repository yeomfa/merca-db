<?php

session_start();

require_once(__DIR__."/../mdb/mdbUser.php");

$email = $_POST['email'];
$password = $_POST['password'];
$user = loginUser($email, $password);

if($user != null){

    $_SESSION['ID_USER'] = $user->getId();
    $_SESSION['NAME_USER'] = $user->getName();
    $_SESSION['EMAIL_USER'] = $user->getEmail();
    $_SESSION['PHONE_USER'] = $user->getPhone();
    $_SESSION['DIR_USER'] = $user->getDir();
    $_SESSION['PHOTO_USER'] = $user->getPhoto();
    $_SESSION['PASS_USER'] = $user->getPassword();

    if($user->admin() == 1){
        header("Location: ../../view/admin.php");
    }else{
        header("Location: ../../view/home.php");
    }
}else {
    header("Location: ../../view/login.php");
}
