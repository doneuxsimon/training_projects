<?php
  include_once('functions.php');
?>

<table>
  <?php
    $results = queryUsers('ADMIN');

    foreach($results as $row){
    ?>
    <tr>
    <?php
      foreach($row as $col){
        echo "<td>$col</td>";
      }
    ?>
      <td><a href="details.php?id= <?php echo $row["id"]; ?>">details</a></td>
      <td><a href="">edit</a></td>
    </tr>
    <?php
    }
  ?>
</table>
