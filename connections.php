<?php
$_mysqli = mysqli_connect('localhost', 'root', '', 'sai');
if($_mysqli === false){
    die("ERROR:could not connect."
    .mysqli_connect_error());
}
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$gender = $_REQUEST['gender'];
$country = $_REQUEST['country'];
$from=date('y-m-d',strtotime($_POST['from']));
$to=date('y-m-d',strtrotime($_POST['to']));
$sql = "INSERT INTO sai1 VALUES ('$firstname',$lastname','$gender',$country','$date','$from','$to')";
if(mysqli_query($mysqli, $sql)){
    echo "<h3>Data store in a database sucessfully."
         ."to view the updata data</h3>";
}
   
else{
     
}
$_mysqli->close();
?>