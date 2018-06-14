<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   
   <body>
      <?php

         if(isset($_POST['delete'])) {
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'mysql');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
            if(! $con ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM Messages WHERE Messages.ID = $emp_id" ;
            mysqli_select_db('Messages_db');
            $retval = mysqli_query( $con, $sql );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysqli_close($con);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
