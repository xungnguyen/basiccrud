<?php

include('../db.php');

$id = $_GET['id'];

$sql = "DELETE FROM `content` WHERE `id`='".$id."'";
$query = mysqli_query($con, $sql);

if( $query ){
  echo "delete success";
} else {
  echo "delete fail";
}


 ?>
