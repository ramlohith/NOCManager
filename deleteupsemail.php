<?php 
$var= $_GET['varname'];
      			

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);        
$sql = "DELETE FROM Upsemail WHERE Upsemail.ID = $var " ;
mysqli_select_db('Upsemail_db');
mysqli_query($con, $sql);
mysqli_close($con);

header('Location: .php');

?>
 <?php
include ('session.php');
?>
