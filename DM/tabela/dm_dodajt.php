<?php  
session_start();
require_once 'dm_konekcija.php';
if(!isset($_SESSION['id']))
{
    header('Location: dm_login.php');
}
$id=$_SESSION['id'];

if(!empty($_GET["dodaj"]))
{
    $pid=$conn->real_escape_string($_GET["dodaj"]);
    //$id je onaj koji salje zahtev, $pid je onaj koji prima zahtev
    //provera da li pracenje postoji

    $sql="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
    $result=$conn->query($sql);
    if($result->num_rows==0)
    {   
        //dodaje se pracenje tek kada ne postoji
        $sql1="INSERT INTO prijatelji(korisnik_id, prijatelj_id) VALUE($id, $pid);";
        $result1=$conn->query($sql1);
    }
    header("Location: dm_prijatelji_tabela.php");//vracanje na stranicu dm_prijatelji1.php 


}






?>