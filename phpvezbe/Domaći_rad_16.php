<?php

/*Zad. Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.
a.	Ispisati sve predmete i ocene studenta.
b.	Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.
c.	Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne.*/

$nizPrOc=array("Elektronika I"=>8, "Elektroteh.mater."=>8, "Matematika I"=>6, "Matematika II"=>7, "Fizika"=>9, "Teorija kola"=>9);
$len=count($nizPrOc);
echo "<p><b><u>Predmeti i ocene studenta</u></b></p>";
foreach($nizPrOc as $pred=>$ocene)
{
    echo "$pred: $ocene <br>";
}
echo "<br><br>";
$maxOc=0;
foreach($nizPrOc as $pred=>$ocene)
{
    if($maxOc<=$ocene)
    {
        $maxOc=$ocene;
    }
}
echo "Max ocena na ispitima je:$maxOc<br>iz predmeta:<br>";
foreach($nizPrOc as $pred=>$ocene)
{
    if($maxOc==$ocene)
    {
        echo "$pred <br>";
    }   
}
echo "<br><br>";
$sumaOc=0;
foreach($nizPrOc as $pred=>$ocene)
{
    $sumaOc+=$ocene;
}
$prosOc=$sumaOc/$len;
echo "Prosecna ocena studenta je: $prosOc, a predmeti na kojima je dobio ocenu vecu od prosecne su: <br>";
foreach($nizPrOc as $pred=>$ocene)
{
    if($prosOc<$ocene)
    {
        echo "$pred <br>";
    }
}










?>