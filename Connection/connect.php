<?php
function connect() { 
$host = "localhost";
$username = "root";
$password = "";
$database = "bookings";

$con = new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    die();
} else  {
    return $con;
}
}
//This function allows you to connect to the database.

//How to use:

//*** insert this syntax in your chosen php file ***.

//include_once("../Connection/connect.php");
//$con = connect();
?>