<?php
include('../db.php');

$id = $_GET["id"];

$sql = "SELECT * FROM `content` WHERE `id` = '".$id."'";
//$query = mysqli_query($con, $sql);
$title = mysqli_fetch_assoc( mysqli_query($con, $sql) )['title'];
$text = mysqli_fetch_assoc( mysqli_query($con, $sql) )['text'];


 ?>

<h1>edit content <?php echo $id; ?></h1>

<form method="post" action="">
  <p>
    title
    <input type="text" name="title"  value="<?php echo $title; ?>"/>
  </p>
  <p>
    content
  <input type="text" name="content" value="<?php echo $text; ?>" />
  </p>
  <input type="submit" />
</form>
