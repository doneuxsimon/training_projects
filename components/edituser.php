<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
require_once('functions.php');
if(isset($_POST['firstName'])){
    $edit = updateUser($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['accountType'],$_POST['country'],$_POST['password'],$_GET['id']);
    
        header('Location: ../index.php');
    
}
?>