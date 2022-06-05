<?php

require_once(__DIR__."/../../model/dao/UserDAO.php");

function loginUser($email, $password){

    $dao = new UserDAO();
    $user = $dao->loginUser($email, $password);

    return $user;

}

function registerUser(User $user){

    $dao = new UserDAO();

    $user = $dao->registerUser($user);

    return $user;

}

function deleteUser($idUser){
    $dao = new UserDAO();
    $dao->deleteUser($idUser);
}

function modifyUser($user){
    $dao = new UserDAO();
    $dao->modifyUser($user);
}

function updatePhoto($namePhoto, $id){

    $dao = new UserDAO();
    $user = $dao->updatePhoto($namePhoto, $id);
    return $user;
}

function seeUsers(){
    $dao = new UserDAO();
    $users = $dao->seeUsers();
    return $users;
}

function seeUser($idUser){
    $dao= new UserDAO();
    $user = $dao->seeUser($idUser);
    return $user;
}
?>
