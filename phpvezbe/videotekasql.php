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
$sql="INSERT INTO filmovi VALUES(8, 'Vratiće se rode', 'Dragan Bjelogrlić', 2004, 'drama', 5)";
if(mysqli_query($conn, $sql)!=false)
{
    echo "Uspesno dodavanje reda u tabelu filmovi";
}
else
{
    echo "Desila se greska: ";
    echo mysqli_error($conn);
}




?>