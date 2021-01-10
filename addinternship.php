
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
                <br>
            
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
       <form method="post" action="addinternship.php">

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
            <td>Starting Date :<td>
            <td><input type="text" name="start" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Duration:<td>
            <td><input type="text" name="duration" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Stipend:<td>
            <td><input type="text" name="stip" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Posted on:<td>
            <td><input type="text" name="posted" value="" id="ipe"></td>
        </tr>
        <tr>
            <td>Apply by:<td>
            <td><input type="text" name="apply" value="" id="ipe"></td>
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
$start1=$_POST['start'];
$duration1=$_POST['duration'];
$stip1=$_POST['stip'];
$posted1=$_POST['posted'];
$apply1=$_POST['apply'];
$location1=$_POST['location'];


$connect=mysqli_connect("localhost","root","naushad","ocgp");

$q="insert into intern(cmp_name,intern_post,start_dt,duration,stipend,posted_on,apply_by,location)values('$cmp1','$post1','$start1','$duration1','$stip1','$posted1','$apply1','$location1')";

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