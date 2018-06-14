 <?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'chavali9813');
define('DB_DATABASE', 'NOC');
   
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sql = "CREATE TABLE website (ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                               Name VARCHAR(100) NOT NULL);";

if ($db->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $db->error;
}

?> 
