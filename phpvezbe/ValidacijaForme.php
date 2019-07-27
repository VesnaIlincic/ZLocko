
<?php

$ime1=$prezime1=$eposta=$adresasajta=$komentari=$pol=$pravila="";
$imeO=$prezimeO=$epostaO=$adresasajtaO=$komentariO="*";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["ime1"]==TRUE))
    {
        $imeO="Ime ne sme biti prazan string";
    }
    elseif(preg_match("/^[a-z]*$/i",$_POST["ime1"])==FALSE)
    {
        $imeO="Ime moze sadrzati samo slova!";
    }
    else
    {
        $ime1=$_POST["ime1"];
    }
    if(empty($_POST["prezime1"]==TRUE))
    {
        $prezimeO="Prezime ne sme biti prazan string";
    }
    elseif(preg_match("/^[a-z]*$/i",$_POST["prezime1"])==FALSE)
    {
        $prezimeO="Prezime moze sadrzati samo slova!";
    }
    else
    {
        $prezime1=$_POST["prezime1"];
    }
    if(empty($_POST["eposta"]==TRUE))
    {
        $epostaO="E-mail ne sme biti prazan string";
    }
    elseif(filter_var($_POST["eposta"], FILTER_VALIDATE_EMAIL)==FALSE)
    {
        $epostaO="E-mail nije dobro unet";
    }
    else
    {
        $eposta=$_POST["eposta"];
    }
    if(empty($_POST["adresasajta"]==TRUE))
    {
        $adresasajtaO="Adresa sajta ne sme biti prazan string";
    }
    elseif(filter_var($_POST["adresasajta"], FILTER_VALIDATE_URL)==FALSE)
    {
        $adresasajtaO="Neispravno uneta adresa sajta";
    }
    else
    {
        $adresasajta=$_POST["adresasajta"];
    }
    if(empty($_POST["komentari"]==TRUE))
    {
        $komentariO="Obavezno je napisati nesto";
    }
    elseif(strlen($_POST["komentari"])<=15)
    {
        $komentariO="Potrebno je uneti vise od 15 karaktera!";
    }
    else
    {
        $komentari=$_POST["komentari"];
    }
    $pol=$_POST["pol"];      
    if(isset($_POST["pravila"])=="Da")
    {
        $pravila="Pravila prihvacena";
    }
    else
    {
        $pravila="Pravila nisu prihvacena";
    }
}
?>

<html>
    <head>
        <style>
            .error{color:red};
        </style>
    </head>
    <body>
        <h2>PHP validacija forme</h2>
        <form action="ValidacijaForme.php" method="post">
            <label>Ime: </label>
            <input type="text" name="ime1"><span class="error"><?php echo $imeO; ?></span><br><br>
            <label>Prezime: </label>
            <input type="text" name="prezime1"><span class="error"><?php echo $prezimeO; ?></span><br><br>
            <label>E-mail: </label>
            <input type="text" name="eposta"><span class="error"><?php echo $epostaO; ?></span><br><br>
            <label>Website: </label>
            <input type="text" name="adresasajta"><span class="error"><?php echo $adresasajtaO; ?></span><br><br>
            <label>Komentar: </label>
            <textarea name="komentari" rows="10" cols="20"></textarea><span class="error"><?php echo $komentariO; ?></span><br>
            <label>Pol: </label>
            <input type="radio" value="Zenski" name="pol">Zenski
            <input type="radio" value="Muski"  name="pol">Muski
            <input type="radio" value="Ostalo" name="pol" checked>Ostalo<br><br>
            Prihvatate pravila koriscenja:
            <input type="checkbox" name="pravila" value="Da"><br><br>
            <input type="submit" name="potvrdi" value="Potvrdi"><br><br>



    </body>
</html>
<?php
echo "<h2>Vasi podaci: </h2>";
echo "Korisnik: $ime1 $prezime1 <br>";
echo "Korisnicki e-mail: $eposta <br>";
echo "Website korisnika: $adresasajta <br>";
echo "Komentar korisnika: $komentari <br>";
echo "Pol korisnika: $pol <br>";
echo "Prihvacena pravila koriscenja: $pravila <br>";




?>

