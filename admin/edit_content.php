<?php
include('../db.php');

$id = $_GET["id"];

$sql = "SELECT * FROM `content` WHERE `id` = '".$id."'";
//$query = mysqli_query($con, $sql);
$title = mysqli_fetch_assoc( mysqli_query($con, $sql) )['title'];
$text = mysqli_fetch_assoc( mysqli_query($con, $sql) )['text'];

if( isset( $_POST['title']) && isset($_POST['text']) ){
  //print_r($_POST);
  $title = $_POST['title'];
  $text = $_POST['text'];

  $sql = "UPDATE `content` SET `title`='".$title."',`text`='".$text."' WHERE `id` = '".$id."'";
  $query = mysqli_query($con, $sql);

  if( $query ){
    echo "<h2>insert success</h2>";
  } else {
    echo "<h2>insert error</h2>";
  }
}


 ?>

<h1>edit content <?php echo $id; ?></h1>

<form method="post" action="">
  <p>
    title
    <input type="text" name="title"  value="<?php echo $title; ?>"/>
  </p>
  <p>
    content
  <input type="text" name="text" value="<?php echo $text; ?>" />
  </p>
  <input type="submit" />
</form>
