<?php

$servername="localhost";
$username="admin";
$password="admin123";
$database="mreza";
$conn=new mysqli($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Neuspelo povezivanje na bazu!Razlog: ".$conn->connect_error);
}
echo "Uspeh!";
$conn->set_charset('utf8');
$id=6;
if(!empty($_GET['brisi']))
{
    $pid=$conn->real_escape_string($_GET['brisi']);
    $sql="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        $sql1="DELETE FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
        $result1=$conn->query($sql1);
    }
    header('Location: dm_prijatelji_lista.php');
}
?>