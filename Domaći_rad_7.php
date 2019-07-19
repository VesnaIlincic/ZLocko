<?php
/*Zad.1. Izvršiti konverziju zapremine iz galona u litre i obratno, ako važi da je galon = litar * 3.785.*/
$gal=34.6;
$lit=$gal*3.785;
echo "U $gal galona ima $lit litara. ";
echo "<br>";

$lit=2367;
$gal=$lit/3.785;
echo "U $lit litara ima $gal galona.";
echo "<br>";

/*Zad.2. Izvršiti konverziju temperature iz Farenhajta u Kelvine i obratno, ako važi:
Celzijus = (Farenhajt - 32) * 5/9;
Kelvin = Celzijus + 273.15.*/
$faren=234;
$celz=($faren-32)*5/9;
$kel=$celz+273.15;
echo "$faren stepena Farenhajta je $kel stepena Kelvina.";
echo "<br>";

$kel=139;
$celz=$kel-273.15;
$faren=$celz*9/5+32;
echo "$kel stepena Kelvina je $faren stepena Farenhajta.";
echo "<br>";

?>
