<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'chavali9813');
    define('DB_DATABASE', 'NOC');
   
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                #declare variables
                $Name = $_POST['Name'];
                $MAC = $_POST['MAC'];
                $loc = $_POST['loc'];
                mysqli_query($db,"INSERT INTO Poweron(Name, MAC ,Location)
				VALUES('$Name','$MAC','$loc')");
                          
                 

                mysqli_close($db);

header('Location: poweron.php');
?>
