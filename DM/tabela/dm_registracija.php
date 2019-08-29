<?php
session_start();
require_once 'dm_konekcija.php';
$nalaz="";
if(!empty($_POST))
{   
    $username=$conn->real_escape_string($_POST['username']);
    $pass=$conn->real_escape_string($_POST['pass']);
    if(empty($username))
    {
        $nalaz="Niste popunili sve podatke!!";
    }
    elseif(empty($pass))
    {
        $nalaz="Niste popunili sve podatke!!";
    }
    else
    {
        $sql="SELECT * FROM korisnici WHERE username='$username'";
        $result=$conn->query($sql);
        if($result->num_rows==1)
        {
            $nalaz="<p>To korisničko ime već postoji, probajte ponovo!</p>";
        }
        else
        {   
            $pass=md5($pass);
            $sql1="INSERT INTO korisnici(id, username, pass) VALUES ('$id', '$username', '$pass')";
            $result1=$conn->query($sql1);
            if($result1)
            {   
                $_SESSION["id"]=$red["id"];
                header('Location: dm_login.php');
            }
            else
            {
                $nalaz="<h1>Greška!</h1>";
            }
        }
            //header("Refresh: 0; dm_registracija.php");    
    }    
}

?>

<html>
    <head>
        <style>
            * {box-sizing:border-box;}
            .row:after, .row:before {content:"";display:table;clear:both;}
            form {float:left;width:100%;}
            body {font-family:Verdana;}
            .col-12{width:100%}
            #vrh{background-color:#660066;color:white;height:100px;margin-top:0px;margin-left:0px;margin-right:0px;padding-top:20px;padding-left:10px;font-size:30px}
            #dno{background-color:#660066;color:white;width:100%;height:40px;bottom:0;right:0;margin-bottom:0;padding-top:10px;float:left;list-style-type:none}
            li{display:inline;list-style-type:none}
            .header{font-family:Comic Sans MS;font-size:50px}
            #horisti{opacity:0.3}
            #pravni{font-size:15px;float:right}
            a{text-decoration:none;color:white;width:342px;height:80px;border:none;font-size:20px}
            a:hover{transform:scale(0.95);transition:0.5s;background-color:#cc6699}
            .kontejner{position:relative;}
            .tekst{position: absolute;bottom:250px;right:600px}   
        </style>
    </head>
    <body>
    <div class="row">
			<div class="col-12">
				<ul id="vrh">
					<li class="header">&#127926;<a href="dm_index.php" class="header">Horisti</a></li>   
				</ul>
			</div>
		</div>
	    <div class="row">
			<div class="col-12">
				<div class="kontejner">
					<img src="hor2a.jpg" id="horisti">
					<div class="tekst">
                        <center><h1>Registracija</h1>
                        <span><?php echo $nalaz;?></span></center>
                        <form method="POST" action="dm_registracija.php" name="registracija">
                            <div style="float:left;margin-left:80px;margin-top:60px">
                                <label><b>Korisničko ime:</b></label><br>
                                <input type="text" name="username"><span style="color:red">*</span><br><br>
                                <label><b>Šifra:</b></label><br>
                                <input type="text" name="pass"><span style="color:red">*</span><br><br>
                                <input type="submit" value="Potvrdi" style="width:100px;font-size:20px;font-weight:bold;background-color:#b7b795;margin-right:150px;padding-left:10px">
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