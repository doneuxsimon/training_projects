<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
require_once('components/functions.php'); 
 $results=queryUserById($_GET['id']);
 $user=$results->fetch();
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/normalize.css">
  <link rel="stylesheet" href="assets/style.css">
  <title>DETAILS</title>
</head>

<body style="background-image:url(./assets/COLOURlovers.com-Aposiopesis.png);">
  <table>
    <tr>
      <td><p>ID</p></td>
      <td><p>FIRST NAME</p></td>
      <td><p>LAST NAME</p></td>
      <td><p>EMAIL</p></td>
      <td><p>ACCOUNT TYPE</p></td>
      <td><p>COUNTRY</p></td>
      <td><p>RETURN</p></td>
    </tr>
    <tr>
      <td> <?php echo $user['id'];?> </td>
      <td> <?php echo $user['first_name'] ;?> </td>
      <td> <?php echo $user['last_name'] ;?> </td>
      <td> <?php echo $user['email'] ;?> </td>
      <td> <?php echo $user['account_type'] ;?> </td>
      <td> <?php echo $user['country'] ;?> </td>
      <td> <a href="index.php">Return</a> </td>
    </tr>

  </table>
</body>

</html>