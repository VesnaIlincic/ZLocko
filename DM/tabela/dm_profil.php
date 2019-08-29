<?php
require_once 'dm_header.php';

if(!empty($_GET["id"]))
{   
    $sql="SELECT * FROM profili WHERE korisnik_id=$id";
    $result=$conn->query($sql);
    if($result->num_rows==1)
    {   
        $id=$red["id"];
    }
    else
    {
        echo "<i><p style='font-size:24px'>Nema korisnika u bazi sa ovim ID-em.</p></i>"; 
    }

}

?>
<?php
        $sql="SELECT k.id AS id, k.username AS username, p.ime AS ime, p.prezime AS prezime, p.pol AS pol, p.bio AS bio
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
            echo "<div style='width:100px;margin-right:800px'><table cellpading=1 cellspacing=1>";
            echo "<tr>";
                if($row['pol']=="m")
                {   
                    echo "<td class='celije'>Ime</td><td style='color:blue'class='celije'>".$row["ime"]."</a></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije' >Prezime</td><td style='color:blue'class='celije'>".$row["prezime"]."</a></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije'>Korisnicko ime</td><td style='color:blue' class='celije'>".$row["username"]."</td>"; 
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije'>Pol</td><td style='color:blue' class='celije' >".$row["pol"]."</td>";
                }
                elseif($row['pol']=="z")
                {   
                    echo "<td class='celije'>Ime</td><td style='color:#cc0099' class='celije'>".$row["ime"]."</a></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije' >Prezime</td><td style='color:#cc0099' class='celije'>".$row["prezime"]."</a></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije'>Korisnicko ime</td><td style='color:#cc0099' class='celije'>".$row["username"]."</td>"; 
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije'>Pol</td><td style='color:#cc0099' style='color:#cc0099' class='celije'>".$row["pol"]."</td>";
                }
                else
                {   
                    echo "<td class='celije'>Ime</td><td style='color:grey' class='celije'>".$row["ime"]."</a></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije' >Prezime</td><td style='color:grey' class='celije'>".$row["prezime"]."</a></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije'>Korisnicko ime</td><td style='color:grey' class='celije'>".$row["username"]."</td>"; 
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td class='celije'>Pol</td><td style='color:grey'class='celije' >".$row["pol"]."</td>";
                }
                echo "</tr>";
                echo "<tr>";
                echo "<td>Bio</td><td>".$row["bio"]."</td>";
            }
            echo "<tr>";
            echo "</table></div>";
        
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