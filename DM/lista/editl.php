<?php 

require_once 'dm_header.php';

if(!empty($_POST))
{   
    $id=8;
    $ime=$conn->real_escape_string($_POST["ime"]);
    echo $id;
    $prezime=$conn->real_escape_string($_POST["prezime"]);
    $pol=$conn->real_escape_string($_POST["pol"]);
    if(empty($ime))
    {
        echo "Morate uneti ime!";
    }
   elseif(empty($prezime))
    {
        echo "Morate uneti prezime!";
    }
    else
    {
        $sql="INSERT INTO profili(korisnik_id, ime, prezime, pol) VALUES ($id, '$ime', '$prezime','$pol')";
        $conn->query($sql);
    }    
}

?>
                    <form action="editl.php" method="POST" style="padding-right:350px;padding-bottom:100px">
                        <label><b>Ime:</b></label><br>
                        <input type="text" name="ime" class="linija"><br><br>
                        <label><b>Prezime:</b></label><br>
                        <input type="text" name="prezime" class="linija"><br><br>
                        <b><p style="border:2px solid black;width:60px;background-color:#d6d6c2">Pol:</b></p>
                        <b>Zenski</b><input type="radio" name="pol" value="z"><br><br>
                        <b>Muski</b><input type="radio" name="pol" value="m"><br><br>
                        <b>Drugo</b><input type="radio" name="pol" value="d" checked><br><br>
                        <input type="submit" value="Potvrdi" style="width:100px;font-size:20px;font-weight:bold;background-color:#b7b795;margin-right:150px">
                    </form>
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
