<?php
require_once(__DIR__."/../mdb/mdbUser.php");

session_start();

$id = $_SESSION['ID_USER'];
$namePhoto = $_FILES['img']['name'];
$folder = '../../view/img/ppUser/';

$result = updatePhoto($namePhoto, $id);

move_uploaded_file($_FILES['img']['tmp_name'], $folder.$namePhoto);
$_SESSION['PHOTO_USER'] = $namePhoto;

echo true;

?>