<?php 

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "dbcon";


$conn = mysqli_connect($server,$user,$pass,$dbname) or die("connection error :".mysqli_connect_error());

?>
<?php


$conn = mysqli_connect("localhost","root","","dbcon")
        or die("Couldn't connect to database");




?>