<html>
    <head>
        <style>
        </style>
    </head>
    <body>
        <form>
            <label>Ime:</label>
            <input type="text"/>
            <label>Prezime:</label>
            <input type="text"/>
            <label>Visina:</label>
            <input type="number"/>
            <label>Težina:</label>
            <input type="number"/>
            <label>Godina rodjenja:</label>
            <input type="date"/>
            <input type="submit" value="Pretraga"/>
        </form>
    </body>
</html>



<?php
$servername="localhost";
$username="admin";
$password="admin123";
$database="ambulanta";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{   
    die("Neuspela konekcija. Razlog: ".mysqli_connect_eror());
}
echo "Uspesna konekcija! :)";
mysqli_set_charset($conn, "utf8");

$sql="SELECT * FROM pacijenti";
$result=mysqli_query($conn, $sql);

if($result!=false)
{
    if(mysqli_num_rows($result)==0)
    {
        echo "<p>Ne postoje pacijenti u bazi.</p>";
    }
    else
    {
        echo "<table cellpadding=1 cellspacing=1>";
        echo "<tr>";
        echo "<th>Ime</th>";
        echo "<th>Prezime</th>";
        echo "<th>Visina</th>";
        echo "<th>Tezina</th>";
        echo "<th> Godina rodjenja</th>";
        echo "</tr>";
    
        while($red=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>";
            echo $red["ime"];
            echo "</td>";
            echo "<td>";
            echo $red["prezime"];
            echo "</td>";
            echo "<td>";
            echo $red["visina"];
            echo "</td>";
            echo "<td>";
            echo $red["tezina"];
            echo "</td>";
            echo "<td>";
            echo $red["god_rodjenja"];
            echo "</td>";
            echo "</tr>";
        }
    echo "</tr>";
    echo "</table>";
    }
}
else 
{
    echo "Upit nije uspesno izvrsen!";
}


?>
<html>
    <head>
        <style>
            table{width:1000px;border:1px solid}
            th{border:1px solid;background-color:#cc33ff}
            td{border:1px solid}
            
        </style>
    <body>
    </body>
    </head>
</html>