<?php 

require_once 'dm_header.php';

$imeProvera="<span style='color:red'>*</span>";
$prezimeProvera="<span style='color:red'>*</span>";

$sql="SELECT * FROM profili WHERE korisnik_id=$id;";
$result=$conn->query($sql);
if($result->num_rows==0)
{
    $imeValue="";
    $prezimeValue="";
    $pol="d";
}
else
{
    $red=$result->fetch_assoc();
    $imeValue=$red["ime"];
    $prezimeValue=$red["prezime"];
    $pol=$red["pol"];
}

if(!empty($_POST))
{   
    $ime=$conn->real_escape_string($_POST["ime"]);
    $prezime=$conn->real_escape_string($_POST["prezime"]);
    $pol=$conn->real_escape_string($_POST["pol"]);
    if(empty($ime))
    {
        $imeProvera="Morate uneti ime!";
    }
    if(empty($prezime))
    {
        $prezimeProvera="Morate uneti prezime!";
    }
    else
    {
        if($result->num_rows==0)
        {
            $sql="INSERT INTO profili(korisnik_id, ime, prezime, pol) VALUES ($id, '$ime', '$prezime','$pol')";
        }
        else
        {
            $sql="UPDATE profili SET ime='$ime', prezime='$prezime', pol='$pol' WHERE korisnik_id=$id;";
        } 
        $conn->query($sql);
        //header("Refresh: 0; editt.php");
    }
}

?>
                    <form action="editt.php" method="POST" style="padding-right:350px;padding-bottom:100px">
                        <label><b>Ime:</b></label><br>
                        <input type="text" name="ime" class="linija">
                        <span><?php echo $imeProvera;?></span>
                        <br><br>
                        <label><b>Prezime:</b></label>
                        <input type="text" name="prezime" class="linija"><br>
                        <span><?php echo $prezimeProvera;?></span><br><br>
                        <?php 
                        if($pol=="z")
                        {
                            echo "<p style='border:2px solid black;width:60px;background-color:#d6d6c2'><b>Pol:</b></p><br>
                            <b>Zenski</b><input type='radio' name='pol' value='z' checked><br><br>
                            <b>Muski</b><input type='radio' name='pol' value='m'><br><br>
                            <b>Drugo</b><input type='radio' name='pol' value='d'><br><br>";
                            //echo "checked";
                        }
                        elseif($pol=="m")
                        {
                            echo "<p style='border:2px solid black;width:60px;background-color:#d6d6c2'><b>Pol:</b></p><br>
                            <b>Zenski</b><input type='radio' name='pol' value='z'><br><br>
                            <b>Muski</b><input type='radio' name='pol' value='m' checked><br><br>
                            <b>Drugo</b><input type='radio' name='pol' value='d'><br><br>";
                            //echo "checked";
                        }
                        else
                        {
                            echo "<p style='border:2px solid black;width:60px;background-color:#d6d6c2'><b>Pol:</b></p><br>
                            <b>Zenski</b><input type='radio' name='pol' value='z'><br><br>
                            <b>Muski</b><input type='radio' name='pol' value='m'><br><br>
                            <b>Drugo</b><input type='radio' name='pol' value='d' checked><br><br>";
                            //echo "checked";
                        }
                            
                        ?>
                        
                        
                        
                        
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
