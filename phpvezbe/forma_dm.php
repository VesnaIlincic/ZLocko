<?php 
$servername="localhost";
$username="admin";
$password="admin123";
$database="mreza";
$conn=new mysqli($servername, $username, $password, $database);
if($conn->connect_error)
{
    die("Neuspelo povezivanje na bazu!Razlog: ".$conn->connect_error);
}
$conn->set_charset('utf8');
$id=6;
if(!empty($_POST))
{   
    $ime=$conn->real_escape_string($_POST["ime"]);
    if($ime=="" OR empty($ime))
    {
        echo "Morate uneti ime!";
    }
    $prezime=$conn->real_escape_string($_POST["prezime"]);
    if($prezime=="" OR empty($prezime))
    {
        echo "Morate uneti prezime!";
    }
    echo $ime." ".$prezime." ";
    $pol=$conn->real_escape_string($_POST["pol"]);
    echo $pol;
    $sql="INSERT INTO profili(korisnik_id, ime, prezime, pol) VALUES ($id, '$ime', '$prezime','$pol')";
    $conn->query($sql);         
}
?>



<html>
    <head>
        <style>
            form{border:2px solid grey;width:300px;height:300px;background-color:yellow;text-align:center}
            input{margin-left:20px}
            .dugme{margin-left:50px}
            #potvr{width:100px;height:20px}
        </style>
    </head>
    <body>
    
        <form action="forma.php" method="POST">
            Ime:<br>
            <input type="text" name="ime"><br><br>
            Prezime:<br>
            <input type="text" name="prezime"><br><br>
            Pol:<br>
            Zenski<input type="radio" name="pol" value="z" class="dugme"><br>
            Muski<input type="radio" name="pol" value="m"class="dugme"><br>
            Drugo<input type="radio" name="pol" value="d" class="dugme" checked><br><br>
            <input type="submit" value="Potvrdi" id="potvr">
        </form>

    </body>
</html>
