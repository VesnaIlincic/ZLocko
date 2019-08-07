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
$sql="INSERT INTO filmovi VALUES(9, 'Balkanski špijun', 'Božidar Nikolić i Dušan Kovačević', 1984, 'tragikomedija', 10),
                                (10, 'Profesionalac', 'Dušan Kovačević', 2003, 'drama', 10);";
$result=mysqli_multi_query($conn, $sql);
if($result!=false)
{
    echo "Uspesno dodavanje reda u tabelu filmovi";
}
else
{
    echo "Desila se greska: ";
    echo mysqli_error($conn);
}







?>