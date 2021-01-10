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
        
            <div class="sidemain">
            <br>
            
        <ul>
       <center><a href="exam.php"><li>Exam</li></a>&emsp;&emsp;
                    <a href="career.php"><li>Career Guide</li></a>&emsp;&emsp;
                    <a href="intern.php"><li>Internship</li></a>&emsp;&emsp;
                    <a href="jobs.php"><li>Jobs</li></a>&emsp;&emsp;
                    <a href="apti.php"><li>Aptitudes</li></a>&emsp;&emsp;
                    <a href="courses.php"><li>Courses</li></a>&emsp;&emsp;
                    <a href="placement.php"><li>Placement</li></a>

                </ul>
                <br>
            
        </div><br>
        <div class="entrance">
        <br>
            <h1></h1><br>
           
            <br>
            <br>
        </div>
</center>
        <div class="course">
            
                   <center> 
                   <br>
                   <br>
                   <h1>Students</h1>
                   <br>
                   
                    <br>
                   <br>

                 </div>
                 <center>
                 <div class="tb">
                
<?php

$connect=mysqli_connect("localhost","root","naushad","ocgp");

$q="select * from regi";
$result=mysqli_query($connect,$q);

echo "<table border='1' class='tab'>
<tr>
<col width='30'>
<col width='30'>
<col width='80'>
<col width='30'>
<col width='30'>
<col width='100'>
<col width='30'>
<col width='30'>
<col width='30'>
<col width='30'>
<col width='30'>
<col width='30'>
    <th><center>
        Sr.
    </th>
    <th><center>
    First name
    </th>
    <th><center>
    Middle name
    </th>
    <th><center>
    Last name
    </th>
    <th><center>
    Address
    </th>
    <th><center>
    Email id
    </th>
    <th><center>
    SSC marks
    </th>
    <th><center>
    HSC marks
    </th>
    <th><center>
    JEE marks
    </th>
    <th><center>
    CET marks
    </th>
    <th><center>
    Diploma marks
    </th>
    </th>
    <th><center>
    View Profile
    </th>
    
    
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
        $row[6]
        </td>
        <td id='name'>
        $row[7]
        </td>
        <td id='name'>
        $row[8]
        </td>
        <td id='name'>
        $row[9]
        </td>
        <td id='name'>
        $row[10]
        </td>
        <td id='name'>
        $row[11]
        </td>
        <td id='name'>
        $row[12]
        </td>
        <td>
        <a href=><button id='vbtn'>View</button></a>
        </td>
        
    </tr>";
$i++;

}
echo "</table>";


?>
        </div>
       <div>
       
       </div>  
       
           
    </div>
   </body>
</html>
