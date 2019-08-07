<?php
$brojB=$brojA=0;

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    if(preg_match("/^[1-9]*$/i",$_GET["brojA"])==FALSE)
    {
        $operacija="Mogu biti unete samo brojke!";
    }
    else
    {
        $brojA=$_GET["brojA"];
    }
    if(preg_match("/^[1-9]*$/i",$_GET["brojB"])==FALSE)
    {
        $operacija="Mogu biti unete samo brojke!";
    }
    else
    {
        $brojB=$_GET["brojB"];
    }
    $operacija=$brojA+$brojB;


}



?>
<html>
    <head>
        <style>
            body{font-style:Arial;font-size:22px;font-weight:bold;color:blue}
            fieldset{background-color:#cfcfcf;width:300px;padding-left:30px;padding-top:40px}
            label{color:blue}
            h3, p{color:red;font-size:50px}
            img{width:250px;opacity:0.5}
            $operacija, $brojA, $brojB{color:red}
            
        </style>
    </head>
    <body>
        <form action="Test_5.php" method="get">
            <fieldset>
            <h3>Izracunajte...</h3>
            <img src="matem_slika.jpg"><br><br>
            <label>Broj A=</label>
            <input type="text" name="brojA"/><br>
            <label>Broj B=</label>
            <input type="text" name="brojB"/><br><br>
            <input type="radio" name="operacija" value="Saberi"/>Saberi<br>
            <input type="radio" name="operacija" value="Oduzmi" checked/>Oduzmi<br>
            <input type="radio" name="operacija" value="Pomnozi"/>Pomnozi<br>
            <input type="radio" name="operacija" value="Podeli"/>Podeli<br><br>
            <input type="submit" name="izracunaj" value="Izracunaj"/><br><br>
            <p><?php echo $brojA. "+". $brojB."=" .$operacija."<br>";?></p>
            </fieldset>

        </form>



    </body>
</html>

