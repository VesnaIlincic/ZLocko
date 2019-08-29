<?php
//otvaranje sesije na pocetku skripta
session_start();
//konekcija ka bazi
require_once 'dm_konekcija.php';

if($_SERVER['REQUEST_METHOD']=="POST")
{
    
    $user=$conn->real_escape_string($_POST["username"]);
    $pass=$conn->real_escape_string($_POST["pass"]);
    $sql="SELECT * FROM korisnici WHERE username='$user';";
    $result=$conn->query($sql);
    if(!$result)
    {
        echo "Upit nije dobar";
    }
    else
    {
        if($result->num_rows==0)
        {
            echo "Ovakav korisnik ne postoji u bazi";
        }
        else
        {
            $red=$result->fetch_assoc();//$red['id'], $red['username'], $red['pass']
            if(md5($pass)!=$red['pass'])
            {
                echo "Nije doslo do poklapanja sifara";
            }
            else
            {
                $_SESSION["id"]=$red["id"];
                header('Location: home.php');
            }
        }
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
            h1{font-family:Comic Sans MS}
            span{font-family:Comic Sans MS;font-size:30px}
            input{float:right}
            #potvr{float:left;width:100px}
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
                        <form method="POST" action="dm_login.php">
                            <label for="username"><b>Username:</b></label>
                            <input type="text" name="username" value="" style="width:300px;height:30px">
                            <br><br><br>
                            <label for="pass"><b>Password:</b></label>
                            <input type="password" name="pass" value="" style="width:300px;height:30px">
                            <br><br><br>
                            <input type="submit" value="Login" style="width:100px;font-size:20px;font-weight:bold;background-color:#b7b795;margin-right:100px">
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