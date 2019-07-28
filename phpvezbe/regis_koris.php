<?php
$imeprez=$mob=$email1=$email2="";
$imeprezO=$mobO=$email1O=$email2O="*";
?>
<html>
    <head>
        <style>
            .error{color:red};
        </style>
    </head>
    <body>
        <form action="regis_koris.php" method="post">
            <table border=0>
                <tr>
                    <td>Ime i prezime</td>
                    <td><input type="text" name="imeprez"><span class="error"><?php echo $imeprezO; ?></span></td> 
                </tr>
                <tr>
                    <td>Mobilni telefon</td>
                    <td><input type="text" name="mob"><span class="error"><?php echo $mobO; ?></span></td>
                </tr>
                <tr>
                    <td>Unesite e-mail adresu</td>
                    <td><input type="text" name="email1"><span class="error"><?php echo $email1O; ?></span></td>
                </tr>
                <tr>
                    <td>Potvrdite svoju e-mail adresu</td>
                    <td><input type="text" name="email2"><span class="error"><?php echo $email2O; ?></span></td>
                </tr>
                <tr colspan=2>
                    <td><input type="submit" name="potvrda" value="Registruj me"></td>
                </tr>
            </table>
        </form>



    </body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["imeprez"])==TRUE)
    {
        echo "Niste uneli ime i prezime! <br>";
    }
    elseif(preg_match("/^[a-z]*$/i", $_POST["imeprez"])==FALSE)
    {
        echo "U ovo polje mogu biti uneta samo slova! <br>";
    }
    else
    {
        echo $imeprez=$_POST["imeprez"]."<br>";
    }
    if(empty($_POST["mob"])==TRUE)
    {
        echo "Niste uneli br. mob.! <br>";
    }
    elseif(preg_match("/^[a-z]*$/i", $_POST["mob"])==TRUE)
    {
        echo "Br. mob. mogu sacinjavati samo brojevi! <br>";
    }
    else
    {
        echo $mob=$_POST["mob"]."<br>";
    }
    if(empty($_POST["email1"])==TRUE)
    {
        echo "Niste uneli email adresu! <br>";
    }
    elseif(filter_var($_POST["email1"], FILTER_VALIDATE_EMAIL)==FALSE)
    {
        echo "Uneli ste nepravilno email adresu! <br>";
    }
    else
    {
        echo $email1=$_POST["email1"]."<br>";
    }
    if(empty($_POST["email2"])==TRUE)
    {
        echo "Niste uneli email adresu! <br>";
    }
    elseif(filter_var($_POST["email2"], FILTER_VALIDATE_EMAIL)==FALSE)
    {
        echo "Uneli ste nepravilno email adresu! <br>";
    }
    else
    {
        echo $email2=$_POST["email2"]."<br>";
    }
    if(strcmp($email1, $email2)!=0)
    {
        echo "Email adrese se ne poklapaju! <br>";
    }
    else
    {
        echo "Uspesna registracija!";
    }
}


?>