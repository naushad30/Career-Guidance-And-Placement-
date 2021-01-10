<!DOCTYPE html>
<html>
   <head>
<title>
Online 
</title>

<link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
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
       
   <div class="login">
                      <center>
                        <br><br>
                      <h1>Login</h1>
                          <table border="1px" class="logtab">
                          <form action="login1.php" method="POST">
                          
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
                          <a href="signup.php"><button type="" value="" id="btn" width="10px">Sign Up</button></a>

                          <br><br>
   </body>
</html>
