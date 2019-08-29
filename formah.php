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
$conn->set_charset('utf8');
if(!empty($_POST))
{   
    $id=7;

    $ime=$conn->real_escape_string($_POST["ime"]);
    if($ime!=="" OR !empty($ime))
    {
        echo "Morate uneti ime!";
    }

    $prezime=$conn->real_escape_string($_POST["prezime"]);
    if($prezime!=="" OR !empty($prezime))
    {
        echo "Morate uneti prezime!";
    }
    
    $pol=$conn->real_escape_string($_POST["pol"]);
    echo "Zdravo ".$ime." ".$prezime." ".$pol;
    $sql="INSERT INTO profili(korisnik_id, ime, prezime, pol) VALUES ($id, '$ime', '$prezime','$pol')";
    $conn->query($sql);   
}
?>