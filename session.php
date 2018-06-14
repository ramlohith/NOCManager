<?php

define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'chavali9813');
   define('DB_DATABASE', 'NOC');
   
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
   session_start(); 
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from UserName where userName = '$user_check' ");
   
   $row = mysqli_fetch_assoc($ses_sql, $db);
   
   $login_session = $row['userName'];
   
   if(!isset($_SESSION['login_user'])){
      mysqli_close($db);
      header("location:login.php");
   }
?>
