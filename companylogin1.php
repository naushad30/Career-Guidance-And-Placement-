<?php

$u1=$_POST["txtuser"];
$p1=$_POST["txtpass"];


$c=mysqli_connect("localhost","root","","ocgp");

$q="select * from regi where username='$u1' and pass='$p1'";

$result=mysqli_query($c,$q);

$count=mysqli_num_rows($result);

if($count>0){

    setcookie("login","1");
    header("location:companydetail.php");

    }
else{

    header("location:companylogin.php ?err=1");
}


?>

