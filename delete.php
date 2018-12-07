<?php
$connect = mysqli_connect('66.147.242.186', 'urcscon3_london', 'coffee1N/!', 'urcscon3_london')
if(isset($_POST["id"]))
{
 $query = "DELETE FROM results WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
