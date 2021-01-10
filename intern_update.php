<html>
   
   <head>
      <title>Update a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['update'])) {
            $conn=mysqli_connect("localhost","root","","ocgp");
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
          

            $cmpid=$_POST['id'];
$cmp1=$_POST['cmp_name'];
$post1=$_POST['post'];
$start1=$_POST['start'];
$duration1=$_POST['duration'];
$stip1=$_POST['stip'];
$posted1=$_POST['posted'];
$apply1=$_POST['apply'];
$location1=$_POST['location'];

            
            $sql = "UPDATE intern ". "SET cmp_name = $cmp1 ". 
               "WHERE id = $cmpid" ;
        
            $retval = mysqli_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error());
            }
            echo "Updated data successfully\n";
            
            mysqli_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100"> ID</td>
                        <td><input name = "cmpid" type = "text" 
                           id = "cmpid"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">cmp name</td>
                        <td><input name = "cmp_name" type = "text" 
                           id = "cmp_name"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
