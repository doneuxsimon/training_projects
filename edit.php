<?php

ini_set('display_errors','on');
error_reporting(E_ALL);
require_once('components/functions.php'); 
 $results=queryUserById($_GET['id']);
 $user=$results->fetch();
 $iduser = $_GET['id'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/normalize.css">
    <link rel="stylesheet" href="./assets/style.css">
    
    
    <title>EDIT</title>
</head>

<body style="background-image:url(./assets/COLOURlovers.com-Aposiopesis.png);">


    <form style=""  action="components/edituser.php?id=<?php echo $iduser ?>" method="POST">

        <label for="firstName">Firstname</label>
        <input type="text" name="firstName" id="firstName" value="<?php echo $user['first_name'] ;?>">
        <label for="lastName">Lastname</label>
        <input type="text" name="lastName" id="lastName" value="<?php echo $user['last_name'] ;?>">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $user['email'] ;?>">
        <label for="accountType">Account type</label>
        <select name="accountType" id="accountType">
            <option value="ADMIN">Admin</option>
            <option value="MODERATOR">Moderator</option>
            <option value="NORMAL">Normal</option>
        </select>
        <label for="country">Country</label>
        <input type="text" name="country" id="country" value="<?php echo $user['country'] ;?>">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php echo $user['password'] ;?>">
        <button type="submit">update</button></td>
        <button><a href="index.php">Return</a></button>
    </form>


</body>

</html>