<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "newosms";

// Create Connection

$conn = new mysqli( $db_host, $db_user, $db_pass, $db_name );

// Chaking Error 
if($conn->connect_error){
    die("Connection Failed");
}