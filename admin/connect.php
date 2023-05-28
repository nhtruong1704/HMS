<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hmss';
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    die("Connection fail: ".mysqli_connect_error());
}
?>
