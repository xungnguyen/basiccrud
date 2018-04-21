<?php
include('../db.php');

//print_r($con);

if( isset( $_POST['title']) || isset($_POST['content']) ){
  //print_r($_POST);
  $title = $_POST['title'];
  $content = $_POST['content'];

  $sql = "INSERT INTO `content`(`title`, `text`) VALUES ('$title','$content')";
  $query = mysqli_query($con, $sql);

  if( $query ){
    echo "<h2>insert success</h2>";
  } else {
    echo "<h2>insert error</h2>";
  }
}


 ?>

<h1>admin</h1>

<form method="post">
  <p>
    title
    <input type="text" name="title"  />
  </p>
  <p>
    content
  <input type="text" name="content"  />
  </p>
  <input type="submit" />
</form>
