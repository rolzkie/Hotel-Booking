<?php
function connect() { 
$host = "localhost";
$username = "root";
$password = "";
$database = "aurora_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else  {
    return $conn;
}
}
//This function allows you to connect to the database guys.

//How to use this:

//*** insert this syntax in your chosen php file :)***.

//include_once("../Connection/connect.php");
//$con = connect();
?>