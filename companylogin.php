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
                   <h1>Company</h1>
                   <br>
            
                 </div>
       <div>
       
       <div class="login">
                      <center>
                        <br><br>
                      
                          <table border="1px" class="logtab">
                          <form action="companylogin1.php" method="POST">
                          
                           <tr>
                          
                           <th> <br>  
                          Username <input type="text" name="txtuser" placeholder="Username" id="ipe">
                          <br>
                          <br>
                        </td></tr>
                        <tr><th><br>
                          Password <input type="password" name="txtpass" placeholder="Password" id="ipe"> <br><br>
                          </td></tr>          
                          <br>
                          <br>
                          <center>
                          <tr><th><br>
                              <button type="submit" value="Login" id="btn">Login</button> 
                              </td></tr>     
                            </table>

                 

              <?php
             
             if(isset($_REQUEST["err"]))
              {
                  echo "<p id='fogpass'>Invalid Username Or Password </p>";
  
              }   
          ?>
  
                          </form>
</div> <center>
                          <a href="signup.php"><button type="" value="" id="btn" width="50px">Sign Up</button></a>

                          <br><br>
       
           
    </div>
   </body>
</html>
