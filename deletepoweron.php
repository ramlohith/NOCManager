 <?php
$var1= $_GET['varname'];

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'NOC');
   
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
            			
            
$sql = "DELETE FROM Poweron WHERE Poweron.ID = $var1" ;
mysqli_select_db('Poweron_db');
mysqli_query($con, $sql);
mysqli_close($con);

header('Location: poweron.php');

?>

