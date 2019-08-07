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
$godina=array(1980, 1984, 1996, 1998, 2003, 2004, 2007, 2010, 2015, 2016);
foreach($godina as $elem)
{
$sql="SELECT * FROM filmovi WHERE god_izdavanja='$elem' ORDER BY reziser ASC;";
$result=mysqli_query($conn, $sql);
if($result!=FALSE)
{
    if(mysqli_num_rows($result)==0)
    {
        echo "<p>Ne postoje filmovi u bazi.</p>";
    }
    else
    {
        echo "<table cellpadding=1 cellspacing=1>";
        echo "<tr>";
        echo "<th>Naslov filma</th>";
        echo "<th>Režiser</th>";
        echo "<th>Godina izdavanja</th>";
        echo "<th>Žanr</th>";
        echo "<th>Ocena</th>";
        echo "</tr>";
    
        while($red=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>";
            echo $red["naslov"];
            echo "</td>";
            echo "<td>";
            echo $red["reziser"];
            echo "</td>";
            echo "<td>";
            echo $red["god_izdavanja"];
            echo "</td>";
            echo "<td>";
            echo $red["zanr"];
            echo "</td>";
            echo "<td>";
            echo $red["ocena"];
            echo "</td>";
            echo "</tr>";
        }
    echo "</tr>";
    echo "</table><br>";
    }
}
else 
{
    echo "Upit nije uspesno izvrsen!";
}
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
