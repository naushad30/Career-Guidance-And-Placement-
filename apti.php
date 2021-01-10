<?php 
include "includes/common.php";
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
                   <h1>Aptitudes</h1>
                   <br>
                   	<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 1, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

                    <br>
                   <br>
			
                 </div>
       <div>
<div>
<form action="submit.php" method="POST">
	<h4 style="margin-left:550px">Aptitude Questions</h4>
  <?php  
  $con=mysqli_connect("localhost","root","naushad","localhost");
	$q1 = "SELECT * FROM Questions";
	$Qans=mysqli_query($con, $q1) or die(mysqli_error($con));	
	$row = mysqli_fetch_assoc($Qans);
	$no=mysqli_num_rows($Qans);
	$i=1;
	while($i<$no){ 
	$row = mysqli_fetch_assoc($Qans);
	echo $i.".".$row['Questions']."<br>";
	echo "A<input type=\"Radio\" name=\"Ans\" value=\"A\">".$row['options1']."<br>";
	echo "B<input type=\"Radio\" name=\"Ans\" value=\"B\">".$row['options2']."<br>";
	echo "C<input type=\"Radio\" name=\"Ans\" value=\"C\">".$row['options3']."<br>";
	echo "D<input type=\"Radio\" name=\"Ans\" value=\"D\">".$row['options4']."<br>";
	$i=$i+1;	
	}
?>
</div>
<input type="submit" value="Submit exam" >       
</form>       
       
       </div>  
       
           
    </div>
   </body>
</html>
