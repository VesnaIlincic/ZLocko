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
$id=6;
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