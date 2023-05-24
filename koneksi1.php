<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydborder = "dborder2";
$conn = new mysqli($servername, $username, $password, $mydborder);
if($conn->connect_error){
die ("Connection failed: ".$conn->connect_error);
}
else{
//echo "Connect success";
}
?>