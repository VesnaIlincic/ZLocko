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
echo "Uspesna konekcija!";
mysqli_set_charset($conn, "utf8");

$sql4="ALTER TABLE pacijenti ADD COLUMN bmi FLOAT NOT NULL AFTER visina;";
$max="SELECT MAX(id) FROM pacijenti;";
for($j=1;$j<=$max;$j++)
{
    $tezina=$red["tezina"];
    $visina=$red["visina"]/100;
    $visina*=$visina;
    $bmi=$tezina/$visina;
    $sql5="UPDATE pacijenti SET bmi='$bmi';";
}
$sql6="SELECT * FROM pacijenti ORDER BY ime;";
$result6=mysqli_query($conn, $sql6);
if($result6!=false)
{
    if(mysqli_num_rows($result6)==0)
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
        echo "<th>BMI</th>";
        echo "<th>Godina rodjenja</th>";
        echo "</tr>";
        while($red=mysqli_fetch_assoc($result6))
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
            echo $red["BMI"];
            echo "</td>";
            echo "<td>";
            echo $red["god_rodjenja"];
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
$sql=array();$n=array();
$sql[0]="SELECT * FROM pacijenti WHERE BMI<=20 ORDER BY ime;";$n[0]="<p><b>BMI nizak:</b></p>";
$sql[1]="SELECT * FROM pacijenti WHERE BMI>20 AND BMI<=26.5 ORDER BY ime;";$n[1]="<p><b>BMI idealan:</b></p>";
$sql[2]="SELECT * FROM pacijenti WHERE BMI>26.5 AND BMI<=31 ORDER BY ime;";$n[2]="<p><b>BMI visok:</b></p>";
$sql[3]="SELECT * FROM pacijenti WHERE BMI>31 ORDER BY ime;";$n[3]="<p><b>BMI izuzetno visok:</b></p>";
$i=0;
while($i<=3)
{
    $result=mysqli_query($conn, $sql[$i]);
    if($result!=false)
    {
        if(mysqli_num_rows($result)==0)
        {
            echo "<p>Ne postoje pacijenti u bazi.</p>";
        }
        else
        {   
            echo $n[$i];
            echo "<table cellpadding=1 cellspacing=1>";
            echo "<tr>";
            echo "<th>Ime</th>";
            echo "<th>Prezime</th>";
            echo "<th>Visina</th>";
            echo "<th>Tezina</th>";
            echo "<th>BMI</th>";
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
                echo $red["BMI"];
                echo "</td>";
                echo "<td>";
                echo $red["god_rodjenja"];
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
    $i++;
}

    

?>
<html>
    <head>
        <style>
            table{width:400px;border:1px solid}
            th{border:1px solid;background-color:#cc33ff}
            td{border:1px solid}
            
        </style>
    <body>
    </body>
    </head>
</html>



