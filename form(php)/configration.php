<?php 

$server='localhost';
$username='root';
$password='';
$database='register_login';

$connect= mysqli_connect($server, $username, $password, $database );

if (!$connect){
	echo "<script>alert('connection failed')</script> ";
}




?>