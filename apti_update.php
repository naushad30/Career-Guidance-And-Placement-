<?php
echo $_GET['cmp'];
echo $_GET['post'];
echo $_GET['start'];
echo $_GET['duration'];
echo $_GET['stip'];
echo $_GET['posted'];
echo $_GET['apply'];
echo $_GET['location'];

$error_reporting(0);
$connect=mysqli_connect("localhost","root","naushad","ocgp");
$q="select * from intern";
$result=mysqli_query($connect,$q);
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
                    <h4>Online Career Guidance And Placement</h4> 
                </div>
                
                <div class="rightnav">
                    <ul>
                    
                        <a href="index.php"><li>Home</li></a>
    
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
                   <h1>Post Internship</h1>
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
            <td><input type="text" name="cmp" value="<?php $_GET['cmp']; ?>" id="ipe"></td>
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
