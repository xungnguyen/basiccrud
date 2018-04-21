<?php
include('../db.php');

 ?>

<h1>all content</h1>

<table border="1">
  <tr>
    <th>title</th>
    <th>content</th>
    <th>action</th>
  </tr>


<?php
  $sql= "SELECT * FROM `content`"; //sql statement
  $query = mysqli_query($con, $sql); //sql query
  //$result = mysqli_fetch_assoc($query); //sql result

  while( $row = mysqli_fetch_assoc($query)){
?>
  <tr>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['text']; ?></td>
    <td>
      <a href="edit_content.php?id=<?php echo $row['id']; ?>">Edit</a>
      <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> 
    </td>
  </tr>
<?php } ?>
</table>
