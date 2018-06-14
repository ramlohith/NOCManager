<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'chavali9813');
    define('DB_DATABASE', 'mysql');
   
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                
                $query = "SELECT Phoneno FROM Messages";
                $result = mysqli_query($db, $query);
                $output = "Phone Numbers:\n";                
                //$ph = mysql_query("SELECT Phoneno FROM Messages");
                //$r = mysql_fetch_array($ph);  
                //echo $r['ph'];           
                while($row= mysqli_fetch_array($result)){
                $output = $output . $row['Phoneno'] . "\r\n";
               }
                $myfile = fopen("newfile.txt", "w");
                $txt = "Rambo\n";
                fwrite($myfile, $txt);
               
                fwrite($myfile, $output);
                fclose($myfile);
                mysqli_close($db);
?>
