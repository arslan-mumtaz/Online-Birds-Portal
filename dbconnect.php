<?php

     //mysql_select_db('birds',mysql_connect('localhost','root',''))or die(mysql_error());

?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_NAME', 'login');
$link = mysqli_connect("localhost", "root", "" , "birds");
 
// Check connection
if($link === false){
	echo 'Failed to connect';
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Close connection
//mysqli_close($link);
?>