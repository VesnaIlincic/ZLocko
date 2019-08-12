<?php
$servername="localhost";
$username="admin";
$password="admin123";
$database="videoteka";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{   
    die("Neuspela konekcija. Razlog: ".mysqli_connect_eror());
}
echo "Uspesna konekcija! :)";

mysqli_set_charset($conn, "utf8");

$zanr=array("SELECT DISTINCT zanr FROM filmovi;");
foreach($zanr as $elem)
{
    echo "<ul>";
    echo "<li>$elem</li>";
    echo "</ul>";
}



?>