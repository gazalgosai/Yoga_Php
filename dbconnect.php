<?php

$localhost = "localhost";
$uname = "root";
$pwd = '';
$db = "tybca";

//create connection
$conn = new mysqli($localhost,$uname,$pwd,$db);

//check connection
// print_r($conn);

if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}


?>