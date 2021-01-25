<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
  require_once('components/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Document</title>
</head>
<body>
  
<table>
<?php
$function=queryUsers('ADMIN',22);
$results = $function['query'];
$arg = $function['account'];
?>
    
  <?php while($user = $results->fetch()){ ?>
    <tr>
      <td> <?php echo $user['id'];?> </td>
      <td> <?php echo $user['first_name'] ;?> </td>
      <td> <?php echo $user['last_name'] ;?> </td>
      <td> <?php echo $user['account_type'] ;?> </td>
      <td> <?php echo $user['country'] ;?> </td>
      <?php if ($arg == 'ADMIN'){ ?>
        <td><a href="">Details</a></td>
        <td> <a href="">Edit</a></td>
      <?php } ?>
    </tr>
  <?php } ?>


</table>
</body>
</html>
