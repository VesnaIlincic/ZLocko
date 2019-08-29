<?php
session_start();
require_once 'dm_konekcija.php';

if(!isset($_SESSION['id']))
{
    header('Location: dm_login.php');
}
$id=$_SESSION['id'];

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