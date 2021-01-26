<?php
  include_once('db.php');


  function queryUsers($type,$id){
    $db = createCursor();

    if($type == 'ADMIN'){
      $query = $db->query("SELECT id,first_name,last_name,account_type,country FROM user");
      $accountType = 'ADMIN';
    }else if($type == 'MODERATOR'){
      $query = $db->query("SELECT id,first_name,last_name,account_type,country FROM user WHERE account_type = 'NORMAL' OR account_type='MODERATOR' ");
    $accountType = 'MODERATOR';
    }else if($type == 'NORMAL'){
      $query = $db->prepare("SELECT id,first_name,last_name,account_type,country FROM user WHERE id = ?");
      $query->execute([$id]);   
      $accountType = 'NORMAL';
    }
    $array=['query'=>$query,'account'=>$accountType];

    return $array;
  }

 function queryUserById($id){
     $db = createCursor();
     $query = $db->prepare("SELECT id,first_name,last_name,email,account_type,country,password FROM user WHERE id=?");
     $query->execute([$id]);
     return $query;
   }

  function updateUser($first_name,$last_name,$email,$account_type,$country,$password,$id){
    $db = createCursor();
    $query = $db->prepare("UPDATE user SET first_name=?,last_name=?,email=?,account_type=?,country=?,password=?  WHERE id=?");
    $query->execute([$first_name,$last_name,$email,$account_type,$country,$password,$id]);
  }

   function deleteUSer($id){
    $db = createCursor();
    $query = $db->prepare("DELETE FROM user WHERE id=?");
    $query->execute([$id]);
   }
 ?>