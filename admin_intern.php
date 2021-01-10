<!DOCTYPE html>
<html>
   <head>

   <script type="text/javascript">
function show_confirm()
{
    return confirm("Are You Sure ? ");
  
}
</script>
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
    
                   <h1>INTERNSHIP</h1>
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
        <br>
       <div>
           <center>
       
<?php

$connect=mysqli_connect("localhost","root","","ocgp");

$q="select * from intern";
$result=mysqli_query($connect,$q);

echo "<table border='1' class='tab'>
<tr>
<col width='30'>
<col width='350'>
<col width='90'>
<col width='70'>
<col width='60'>
<col width='50'>
    <th><center>
        Sr.
    </th>
    <th><center>
        Company Name
    </th>
    <th><center>
        Post
    </th>
    <th><center>
        Start
    </th>
    <th><center>
        Duration
    </th>
    <th><center>
        Stipend
    </th>
    <th><center>
        Posted on
    </th>
    <th><center>
        Apply By
    </th>
    <th><center>
        Location
    </th>
    <th colspan='2'><center>
        Operations
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
        <td id='name'>
        $row[8]
        </td>
        
        <td id='name'>
        <a href='intern_update.php'><button id='dwbtn'>Update</button></a>
        </td>";
        
       echo "<td id='name'>";
        echo "<a href='intern_delete.php?id=$row[id]' onclick='return show_confirm();'><button id='dwbtn1'>Delete</button></a>";
       echo "</td>";
        
        
    echo "</tr>";
$i++;

}
echo "</table>";

 ?>

<br><br>
    </div>
   </body>
</html>


