

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
                    <h4>Online Career Guidance And Placement</h4> 
                </div>
                
                <div class="rightnav">
                    <ul>
                    
                        <a href="login.php"><li>Login</li></a>
    
                    </ul>
                </div>
            </div>
            
            <div class="sidemain">
                <br>
            
        <ul>
       <center><a href="career.php"><li>Career Guide</li></a>&emsp;&emsp;
                    <a href="intern.php"><li>Internship</li></a>&emsp;&emsp;
                    <a href="jobs.php"><li>Jobs</li></a>&emsp;&emsp;
                    <a href="apti.php"><li>Aptitudes</li></a>&emsp;&emsp;
                    <a href="placement.php"><li>Placement</li></a>&emsp;&emsp;
                    <a href="company.php"><li>Company</li></a>

                </ul>
              
        </div><br>
        
</center>
        <div class="course">
            
                   <center> 
                   <br>
                   <br>
                   <h1>Post Job</h1>
                   <br>
                   
                    <br>
                   <br>

                 </div>
                 <br> <br> <br>
       <div>
       <center>
       <form method="post" action="addjob.php">

      <table border="0">
        <tr>
            <td>Comapany Name :<td>
            <td><input type="text" name="cmp" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Post :<td>
            <td><input type="text" name="post" value=""  id="ipe"></td>
        </tr>
        <tr>
            <td>Experience<td>
            <td><input type="text" name="exp" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Salary:<td>
            <td><input type="text" name="salary" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Role:<td>
            <td><input type="text" name="role" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Location:<td>
            <td><input type="text" name="location" value="" id="ipe"></td>
        </tr>
        
  </table>
  <input type="submit" value="Submit" id="btn" />

    </form>
       </div>  
       <br> <br> <br>
           
    </div>
   </body>
</html>


<?php
$cmp1=$_POST['cmp'];
$post1=$_POST['post'];
$exp1=$_POST['exp'];
$salary1=$_POST['salary'];
$role1=$_POST['role'];
$location1=$_POST['location'];



$connect=mysqli_connect("localhost","root","naushad","ocgp");

$q="insert into jobs(cmp_name,cmp_post,cmp_exp,cmp_salary,cmp_role,cmp_location)values('$cmp1','$post1','$exp1','$salary1','$role1','$location1')";

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