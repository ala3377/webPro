<?php
$server_name = "sql12.freesqldatabase.com";
$username = "sql12736345";
$password = "5BgHUd8z4m";
$database = "sql12736345";

// Create connection
$conn = mysqli_connect($server_name, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>