<?php
require_once(__DIR__."/../mdb/mdbUser.php");

session_start();

$id = $_SESSION['ID_USER'];
$namePhoto = $_FILES['img']['name'];
$ext = substr($namePhoto, -4);
$newFile = $id.$ext;
$folder = '../../view/img/ppUser/';

$result = updatePhoto($newFile, $id);

move_uploaded_file($_FILES['img']['tmp_name'], $folder.$newFile);

$_SESSION['PHOTO_USER']=$newFile;

echo true;

?>