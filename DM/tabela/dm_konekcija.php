<?php

$servername="localhost";
$username="admin";
$password="admin123";
$database="mreza";
global $conn;
$conn=new mysqli($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Neuspelo povezivanje na bazu!Razlog: ".$conn->connect_error);
}
$conn->set_charset('utf8');



?>