<?php

require_once 'dm_header.php';
/*include - ukljucuje fajl(nastavlja ako fajl ne postoji)
require - ukljucuje fajl, ali javlja gresku ako ne postoji(prekida ako fajl ne postoji)
include_once - ukljucuje fajl + ako je vec ukljucen, ne ukljucuje ga
require_once - ukljucuje fajl + ako je vec ukljucen, ne ukljucuje ga, samo jednom
*/

if(!empty($_POST["id"]))
{   

    $pid=$conn->real_escape_string($_POST["id"]);
    $sql="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
    $result=$conn->query($sql);
    if($result->num_rows==0)
    {
        $sql1="INSERT INTO prijatelji(korisnik_id, prijatelj_id) VALUE($id, $pid);";
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
            echo "<p>Greska razlog:".$conn->error."</p>";
        }
        else
        {
            if($result->num_rows==0)
            {
                echo "Nema korisnika u mrezi!";
            }
            else
            {
                echo "<table cellpadding=1 cellspacing=1>";
                echo "<tr>";
                echo "<th>Ime</th>";
                echo "<th>Prezime</th>";
                echo "<th>Pol</th>";
                echo "<th>Korisnicko ime</th>";
                echo "<th>Svojstva</th>";
                echo "<th>Akcija</th>";
                echo "</tr>";
                while($row=$result->fetch_assoc())
                {
                    $pid = $row['id'];
                    echo "<tr>";
                    echo "<td><a href='dm_profil.php?id=$pid' style='color:black'>".$row["ime"]."</a></td>";
                    echo "<td><a href='dm_profil.php?id=$pid' style='color:black'>".$row["prezime"]."</a></td>";
                    echo "<td>".$row["pol"]."</td>";
                    echo "<td>".$row["username"]; 
                    echo "<td>";
                    $pid=$row["id"];
                    $sql1="SELECT * FROM prijatelji WHERE korisnik_id=$id AND prijatelj_id=$pid;";
                    $result1=$conn->query($sql1);
                    $jatebe=$result1->num_rows;
                    $sql2="SELECT * FROM prijatelji WHERE korisnik_id=$pid AND prijatelj_id=$id;";
                    $result2=$conn->query($sql2);
                    $timene=$result2->num_rows;
                    if($jatebe+$timene>1)
                    {
                        echo " Uzajamni prijatelji. ";
                    }
                    elseif($jatebe)
                    {
                        echo " Pratim korisnika. ";
                    }
                    elseif($timene)
                    {
                        echo " Korisnik mene prati. ";
                    }
                    else
                    {
                        echo "Nema veze.";
                    }
                    echo "</td>";
                    echo "<td>";
                    if($jatebe+$timene>1)
                    {
                        echo "<a href='dm_brisit.php?brisi=$pid' style='color:#e6005c'>";
                        echo "Brisi pracenje";
                        echo "</a>";
                    }
                    elseif($jatebe==1)
                    {
                        echo "<a href='dm_brisit.php?brisi=$pid'style='color:#e6005c'>";
                        echo "Brisi pracenje";
                        echo "</a>";
                    }
                    else
                    {
                        echo "<a href='dm_dodajt.php?dodaj=$pid' style='color:#669900'>";
                        echo "Prati korisnika</a>";
                    }
                    echo "</td>";
                    echo "</tr>";  
                }
                echo "</table>";
            }
        }
        ?>
        </div>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-12">
				<ul id="dno">
					<li>O mreži</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Pomoć</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<li>Uslovi i Privatnost</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Oglašavanje</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<li id="pravni">Društvena mreža Horisti - udruženje horskih pevača&copy;2019</li>
				</ul>
			</div>
		</div>
    </body>
</html>