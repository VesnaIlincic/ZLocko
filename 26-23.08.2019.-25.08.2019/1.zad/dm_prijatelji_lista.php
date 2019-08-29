<?php
$servername="localhost";
$username="admin";
$password="admin123";
$database="mreza";


$conn=new mysqli($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Neuspela konekcija! Razlog: ".$conn->connect_error);
}
echo "Sve je uspesno!";

$conn->set_charset('utf8');

$id=6;

if(!empty($_GET["id"]))
{
    $pid=$conn->real_escape_string($_GET["id"]);
    $sql="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
    $result=$conn->query($sql);
    if($result->num_rows==0)
    {
    $sql1="INSERT INTO prijatelji(korisnik_id, prijatelj_id) VALUE ($id, $pid);";
    $conn->query($sql1);
    }
}




?>
<html>
    <head>
    </head>
    <body>
        <?php
        $sql="SELECT k.id AS id, k.username AS username, p.ime AS ime, p.prezime AS prezime, p.pol AS pol
        FROM korisnici AS k
        INNER JOIN profili AS p
        ON k.id=p.korisnik_id 
        WHERE k.id!=$id
        ORDER BY p.ime, p.prezime";
        $result=$conn->query($sql);
        
        if(!$result)
        {
            echo "<p>Greska!Razlog: ";
            echo $conn->error;
            echo "</p>";
        }
        else
        {   
            
            if($result->num_rows==0)
            {
                echo "<p>Nemate ni jednog korisnika u mrezi!:(</p>";
            }
            else
            {   
                
                echo "<p>Korisnici:</p>";
                echo "<ul>";
                while($row=$result->fetch_assoc())
                {
                    echo "<li>";
                    echo $row["ime"]." ".$row["prezime"];
                    if($row["pol"]=="ž")
                    {
                        echo "<span style='color:red'>";
                        echo "(".$row["username"].")";
                        echo "</span>";
                    }
                    else
                    {
                        echo "<span style='color:blue'>";
                        echo "(".$row["username"].")";
                        echo "</span>";
                    }
                    $pid=$row["id"];
                    $sql1="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
                    $result1=$conn->query($sql1);
                    $jatebe=$result1->num_rows;
                    $sql2="SELECT * FROM prijatelji WHERE korisnik_id=$pid AND prijatelj_id=$id;";
                    $result2=$conn->query($sql2);
                    $timene=$result2->num_rows;
                    if($jatebe+$timene>1)
                    {
                        echo " Uzajamni prijatelji.&nbsp";
                        echo "<a href='dm_brisil.php?brisi=$pid'>";
                        echo "Brisi pracenje</a>";
                    }
                    elseif($jatebe)
                    {
                        echo " Pratim korisnika.&nbsp";
                        echo "<a href='dm_brisil.php?brisi=$pid'>";
                        echo "Brisi pracenje</a>";
                    }
                    elseif($timene)
                    {
                        echo " Korisnik mene prati.&nbsp ";
                    }
                    else
                    {
                        echo "Nema veze.&nbsp";
                        echo "<a href='dm_dodajl.php?dodaj=$pid'>";
                        echo "Prati korisnika</a>";
                    }
                    echo "</li>";
                }
                echo "</ul>";
            }
        }
        ?>
    </body>
</html>