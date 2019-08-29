<?php
require_once 'dm_header.php';

if(!empty($_POST["id"]))
{
    $pid=$conn->real_escape_string($_POST["id"]);
    $sql="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
    $result=$conn->query($sql);
    if($result->num_rows==0)
    {
    $sql1="INSERT INTO prijatelji(korisnik_id, prijatelj_id) VALUE ($id, $pid);";
    $conn->query($sql1);
    }
}

?>

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
                echo "<ul style='margin-right:250px;margin-bottom:300px'>";
                while($row=$result->fetch_assoc())
                {
                    echo "<li>";
                    echo $row["ime"]." ".$row["prezime"]."&nbsp;";
                    if($row["pol"]=="ž")
                    {
                        echo "<span style='color:red'>";
                        echo "(".$row["username"].")&nbsp;";
                        echo "</span>";
                    }
                    else
                    {
                        echo "<span style='color:blue'>";
                        echo "(".$row["username"].")&nbsp;";
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
                        echo "<a href='dm_brisil.php?brisi=$pid' style='color:#e6005c'>";
                        echo "Brisi pracenje</a>";
                    }
                    elseif($jatebe)
                    {
                        echo " Pratim korisnika.&nbsp";
                        echo "<a href='dm_brisil.php?brisi=$pid' style='color:#e6005c' >";
                        echo "Brisi pracenje</a>";
                    }
                    elseif($timene)
                    {
                        echo " Korisnik mene prati.&nbsp ";
                        echo "<a href='dm_dodajl.php?dodaj=$pid' style='color:#669900' >";
                        echo "Prati korisnika</a>";
                    }
                    else
                    {
                        echo "Nema veze.&nbsp";
                        echo "<a href='dm_dodajl.php?dodaj=$pid' style='color:#669900' >";
                        echo "Prati korisnika</a>";
                    }
                    echo "</li><br>";
                }
                echo "</ul>";
            }
        }
        ?>
    </body>
</html>