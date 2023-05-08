<?php

$mysqli = mysqli_connect ('localhost', 'root', '', 'table');
if($mysqli === false) {
 die("ERROR: could not connect."
     .mysqli_connecct_error());
 }
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $phoneno = $_REQUEST['phoneno'];
 $address = $_REQUEST['address'];
 $sql = "INSERT INTO forms VALUES('$name','$email','$phoneno','$address')";
 if (mysqli_query($mysqli, $sql)){
    echo"<h3>data store in a database successfully."
        ."pleasee browse your local host php my admin"
        ."to view the updata data</h3>";
} 
else {  
}
$mysqli->close();
?>