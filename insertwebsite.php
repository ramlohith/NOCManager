<?php 
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'chavali9813');
    define('DB_DATABASE', 'NOC');
   
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
              
    $Name = $_POST['Name'];
    mysqli_query($db,"INSERT INTO website(Name)	VALUES('$Name')");
    mysqli_close($db);

header('Location: index.php#section2');


?>
