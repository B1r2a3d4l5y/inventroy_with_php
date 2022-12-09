<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbName = "inventroy";

# create connection to database 
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbName);
// check database 
if($conn->connect_error) {
    die("connection error".$conn->connect_error);

}
$conn->close();

