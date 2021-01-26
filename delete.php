<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
  require_once('components/functions.php');
$iddelete=$_GET["id"];
if(isset($iddelete)){
    $delete=deleteUser($iddelete);
    header('Location:./index.php');
}




?>