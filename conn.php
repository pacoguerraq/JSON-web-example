<?php

$dbServername = "sql313.epizy.com";
$dbUsername = "";
$dbPassword = "";
$dbName = "";

// connect to database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>