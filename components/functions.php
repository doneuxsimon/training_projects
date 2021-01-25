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

  // function queryUserById($id){
  //   $db = createCursor();

  //   $query = $db->prepare("SELECT * FROM `users` WHERE id=?");
  //   $query->execute([$id]);

  //   return $query->fetch();
  // }

  // function editUSer($id, /* ... */){
    
  // }

  // function deleteUSer($id){

  // }
?>