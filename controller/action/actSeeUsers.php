<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUser.php');

    $users = seeUsers();
    echo json_encode($users);
?>