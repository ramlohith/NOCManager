<?php 
$var= $_GET['varname'];
$myfile = fopen("wake.txt", "w");
fwrite($myfile, $var);
fclose($myfile);

$command = escapeshellcmd('/var/www/html/DeseAdmin/wakeonlan.sh');
$output = shell_exec($command);
echo $output;

?>
