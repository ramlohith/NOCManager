<?php 
$var= $_GET['varname'];
      			

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);        
$sql = "DELETE FROM Upsmessages WHERE Upsmessages.ID = $var " ;
mysqli_select_db('Upsmessages_db');
mysqli_query($con, $sql);
mysqli_close($con);

header('Location: sampledatabase.php');

?>
 <?php
include ('session.php');
?>
