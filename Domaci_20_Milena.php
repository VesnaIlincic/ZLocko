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
echo "Uspesna konekcija!";
mysqli_set_charset($conn, "utf8");

$sql="SELECT DISTINCT zanr FROM filmovi ORDER BY zanr;";
$result=mysqli_query($conn, $sql);
while($red=mysqli_fetch_assoc($result))
{
    $zanr=$red["zanr"];
    echo "<p>Filmovi $zanr-a:</p>";
    $sql1="SELECT * FROM filmovi WHERE zanr=$zanr ORDER BY naslov;";
    $result1=mysqli_query($conn, $sql1);
    echo "<table>";
    echo "<tr>";
    echo "<th>Naslov</th>";
    echo "<th>Reziser</th>";
    echo "<th>Godina izdavanja</th>";
    echo "<th>Zanr</th>";
    echo "<th>Ocena</th>";
    echo "</tr>";
    $red=mysqli_fetch_assoc($result1);
    while($red!=FALSE)
    {
        echo "<tr>";
        echo "<td>".$red["ime"]."</td>";
        echo "<td>".$red["reziser"]."</td>";
        echo "<td>".$red["god_izdavanja"]."</td>";
        echo "<td>".$red["zanr"]."</td>";
        echo "<td>".$red["ocena"]."</td>";
        echo "</tr>";
        $red=mysqli_fetch_assoc($result1);
    }
    echo "</table>";
}
?>
<html>
    <head>
        <style>
            table{width:400px;border:1px solid}
            th{border:1px solid;background-color:#339966}
            td{border:1px solid}
            
        </style>
    <body>
    </body>
    </head>
</html>