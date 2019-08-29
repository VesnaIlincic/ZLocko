<?php
require_once 'dm_header.php';

$sql="SELECT * FROM korisnici WHERE id=$id";
$result=$conn->query($sql);
$red=$result->fetch_assoc();
$username=$red['username'];
$pass=$red['pass'];
$passUnosStara="*";
$passUnosNova="*";
if(!empty($_POST))
{
    $staraSifra=$conn->real_escape_string($_POST['staraSifra']);
    $novaSifra=$conn->real_escape_string($_POST['novaSifra']);
    $potvrdaSifre=$conn->real_escape_string($_POST['potvrdaSifre']);
    $hesiranaNova=md5($novaSifra);
    if(md5($staraSifra)==$pass && $novaSifra==$potvrdaSifre)
    {
        //echo "1";
        //dobra stara sifra, mozemo izvrsiti promenu sifre
        $sql1="UPDATE korisnici SET pass='$hesiranaNova' WHERE id=$id";
        $conn->query($sql1);
    }
    else
    {
        //echo "2";
        if(md5($staraSifra)!=$pass)
        {
            //ispis da nije ispravan unos stare sifre
            $passUnosStara="Neispravno uneta stara sifra!";
        }
        if($novaSifra!=$potvrdaSifre)
        {
            //ispis da nova sifra i potvrde nisu iste
            $passUnosNova="Greska u potvrdi sifre!";
        }
        //echo $passUnosStara . " " . $passUnosNova;
    }
    
}



?>

        <form action="izmeniSifru.php" method="POST">
            <div style="float:left;margin-right:300px;margin-bottom:120px">
                <label><b>Korisničko ime:</b></label>
                <input type="text" name="korisnicko_ime" placeholder="<?php echo $username;?>" readonly><br><br>
                <label><b>Stara šifra:</b></label>
                <input type="text" name="staraSifra">&nbsp;<span style="color:red"><?php echo $passUnosStara;?></span><br><br>
                <label><b>Nova šifra:</b></label>
                <input type="text" name="novaSifra">&nbsp;<span style="color:red"><?php echo $passUnosNova;?></span><br><br>
                <label><b>Ponovite šifru:</b></label>
                <input type="text" name="potvrdaSifre">&nbsp;<span style="color:red"><?php echo $passUnosNova;?></span><br><br><br>
                <input type="submit" value="Potvrdi" style="width:100px;font-size:20px;font-weight:bold;background-color:#b7b795;margin-right:150px">
            </div>        
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