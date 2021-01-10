<?php
$f2=$_POST['f1'];
$m2=$_POST['m1'];
$l2=$_POST['l1'];
$user2=$_POST['user1'];
$pass2=$_POST['pass1'];
$add2=$_POST['add1'];
$email2=$_POST['email1'];
$ssc2=$_POST['ssc1'];
$hsc2=$_POST['hsc1'];
$jee2=$_POST['jee1'];
$cet2=$_POST['cet1'];
$diploma2=$_POST['diploma1'];
$sem11=$_POST['sem1'];
$sem22=$_POST['sem2'];
$sem33=$_POST['sem3'];
$sem44=$_POST['sem4'];
$sem55=$_POST['sem5'];
$sem66=$_POST['sem6'];
$sem77=$_POST['sem7'];
$sem88=$_POST['sem8'];



$connect=mysqli_connect("localhost","root","","ocgp");

$q="insert into regi (fname,mname,lname,username,pass,addr,email,ssc,hsc,jee,cet,diploma,sem_1,sem_2,sem_3,sem_4,sem_5,sem_6,sem_7,sem_8) values ('$f2','$m2','$l2','$user2','$pass2','$add2','$email2','$ssc2','$hsc2','$jee2','$cet2','$diploma2','$sem11','$sem22','$sem33','$sem44','$sem55','$sem66','$sem77','$sem88')";

$re=mysqli_query($connect,$q);

if($re)
{

echo "<script> alert('Data Inserted Successfully')</script>";
}
else
{

    echo "Connection Failed";
}


?>



<!DOCTYPE html>
<html>
   <head>
<title>
OCGP 
</title>

<link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
   
   <div class="bgimage">
            
        <div class="menu">
            <div class="leftnav">    
                <h4>OCGP</h4> 
            </div>
            
            <div class="rightnav">
                <ul>
                  <a href="index.php"><li>Home</li></a>

                </ul>
            </div>
        </div>
        
      <center> <br>
      <h1>Student Registration</h1>
      <br>
      <div>
      <form method="post" action="addstudent.php">

      <table border="0">
        <tr>
            <td>First name:<td>
            <td><input type="text" name="f1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Middle name:<td>
            <td><input type="text" name="m1" value=""  id="ipe"></td>
        </tr>
        <tr>
            <td>Last name:<td>
            <td><input type="text" name="l1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Username:<td>
            <td><input type="text" name="user1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Password:<td>
            <td><input type="password" name="pass1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Address:<td>
            <td><input type="text" name="add1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Email ID :<td>
            <td><input type="text" name="email1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>SSC marks:<td>
            <td><input type="text" name="ssc1" value="" id="ipe"></td>
        </tr>

        <tr>
            <td>HSC marks:<td>
            <td><input type="text" name="hsc1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>JEE marks:<td>
            <td><input type="text" name="jee1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>CET marks:<td>
            <td><input type="text" name="cet1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Diploma marks:<td>
            <td><input type="text" name="diploma1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 1 :<td>
            <td><input type="text" name="sem1" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 2 :<td>
            <td><input type="text" name="sem2" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 3 :<td>
            <td><input type="text" name="sem3" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 4 :<td>
            <td><input type="text" name="sem4" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 5 :<td>
            <td><input type="text" name="sem5" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 6 :<td>
            <td><input type="text" name="sem6" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 7 :<td>
            <td><input type="text" name="sem7" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Semester 8 :<td>
            <td><input type="text" name="sem8" value="" id="ipe"></td>
        </tr>
        
       
        

  </table>
  <input type="submit" value="Submit" id="btn" />

    </form>    
      
      </div>
   </body>
</html>
