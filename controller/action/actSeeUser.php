<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUser.php');
    
    $idUser = $_GET['idUser'];

    $user = seeUser($idUser);
    
    echo json_encode($user);
?>