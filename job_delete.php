



<?php


$con = mysqli_connect("localhost","root","","ocgp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id=$_REQUEST['id'];
$query = "DELETE FROM jobs WHERE id=$id"; 
$result = mysqli_query($con,$query);
header("Location: admin_job.php"); 
?>