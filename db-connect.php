<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sample_login";
$conn = new MySQLi($host, $username, $password, $dbname);
if(!$conn){
    die("Database Connection Failed.");
}
?>