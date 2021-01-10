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
         
            
        
</center>
        <div class="course">
            
                   <center> 
                   
                   <br>
                   <h1>STUDENTS</h1>
                   <br>
                   </div>
            <div class="sidemain">
            <br>
            
        <ul>
       <center>
                    <a href="admin_intern.php"><li>Internship</li></a>&emsp;&emsp;
                    <a href="admin_job.php"><li>Jobs</li></a>&emsp;&emsp;
                    <a href="admin_apti.php"><li>Aptitudes</li></a>&emsp;&emsp;
                    <a href="admin_place.php"><li>Placement</li></a>&emsp;&emsp;
                    <a href="admin_students.php"><li>Students</li></a>

                </ul>
                <br>
                
        </div>
       <div >
       <br>
       <center>
    
<?php

$connect=mysqli_connect("localhost","root","","ocgp");

$q="select * from regi";
$result=mysqli_query($connect,$q);
       echo"<table border='1' class='tab'>
       <tr>
            <th>Sr.</th>
            <th>Fname</th>
            <th>Mname</th>
            <th>Lname</th>
            <th>Username</th>
            <th>Password</th>
            <th>Address</th>
            <th>Email id</th>
            <th>SSC</th>
            <th>HSC</th>
            <th>JEE</th>
            <th>CET</th>
            <th>Diploma</th>
            <th colspan='2'>Operations</th>
           
       </tr>";

       $i=1;
       while($row=mysqli_fetch_array($result))
       {
       echo "<tr>
               <td><center>
               $i
               </td>
               <td id='name'>
               $row[1]
               </td>
               <td id='name'><center>
               $row[2]
               </td>
               <td id='name'><center>
               $row[3]
               </td>
               <td id='name'>
               $row[4]
               </td>
               
               <td id='name'><center>
               $row[5]
               </td>
               <td id='name'><center>
               $row[6]
               </td>
               <td id='name'>
               $row[7]
               </td>
               <td id='name'><center>
               $row[8]
               </td>
               <td id='name'>
               $row[9]
               </td>
               <td id='name'><center>
               $row[10]
               </td>
               <td id='name'>
               $row[11]
               </td>
               <td id='name'>
               $row[12]
               </td>
               <td><center>
               <a href=''><button id='dwbtn'>Update</button></a>
               </td>
               <td><center>
               <a href=''><button id='dwbtn1'>Delete</button></a>
               </td>
           </tr>";
       $i++;
       
       }
       echo "</table>";
      ?>
      <br><br>
       </div>  
       
           
    </div>
   </body>
</html>
