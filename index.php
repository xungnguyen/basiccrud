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

  //print_r($result);

  //foreach(){
?>
  <tr>
    <td>testing</td>
    <td>testing</td>
  </tr>
<?php// } ?>
</table>
<br/><br/><br/><br/><br/><br/><br/>

<?php
          //0    //1   //2    //3     //4    //5
$arr = ['moi', 'hai', 'ba', 'four', 'five', 'ennum'];
echo json_encode($arr);
//echo $arr[2];

//echo sizeof($arr);

echo "for loop";
echo "<br/>";
for( $i=0;$i<sizeof($arr);$i++ ){
  echo $arr[$i];
  echo "<br/>";
}

echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
//echo "foreach loop";
$arr = (object) $arr;
echo json_encode($arr);
foreach( $arr as $X ){
  echo "<h2>".$X."</h2>";
}


 ?>
