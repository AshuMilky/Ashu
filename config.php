<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "operations";
$connect = new mysqli($servername, $username, $password, $dbname);
if($connect->connect_error){
    die("connection Error:" .$connect->connect_error);
}
?> 