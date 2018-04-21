<?php
include('db.php');

//print_r($con);
 ?>

<h1>Homepage</h1>

<table border="1">
  <tr>
    <th>title</th>
    <th>content</th>
  </tr>


<?php
  $sql="SELECT * FROM `content`"; //sql statement
  $query = mysqli_query($con, $sql); //sql query
  $result = mysqli_fetch_assoc($query); //sql result

  print_r($result);
?>
  <tr>
    <td>testing</td>
    <td>testing</td>
  </tr>


</table>
