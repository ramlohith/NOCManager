<?php 
    $ip = $_POST['ip'];
    $serv_name = $_POST['serv_name'];
    $loc = $_POST['loc'];

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'chavali9813');
    define('DB_DATABASE', 'NOC');
   
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
     
    mysqli_query($db,"INSERT INTO tree(ip,sname,fname) VALUES('$ip','$serv_name','$loc')");
    mysqli_close($db);

header('Location: serverstatus1.php');


?>
