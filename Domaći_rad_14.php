<?php

/*Zad.1. Odrediti koliko elemenata u nizu celih brojeva ima maksimalnu vrednost.
(koliko elem. Ima vrednost jednaku maximalnoj)*/

$niz1=array(-2, 4, -6, 8, 34, 56, 18, 6, 56 );
$max=$niz1[0];
for($i=1;$i<count($niz1);$i++)
{
    if($niz1[$i]>$max)
    {
        $max1=$niz1[$i];
    }
}
echo "Maksimalna vrednost niza je: $max1 <br>";
foreach($niz1 as $elem1)
{
    $br1=1;
    if($max1==$elem1)
    {
        $br1++;
    }
}
echo "Ovaj niz ima $br1 maksimalnih elemenata <br>";
echo "<br>";

/*Zad.2. Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.
(druga for petlja aps. vrednost  min razlike sr.broja i elem.niza)*/

$niz2=array(-25, -8, 98, -45, 63, 5, -32);
$suma2=0;
$len2=count($niz2);
foreach($niz2 as $elem2)
{
    $suma2+=$elem2;
}
$sredvr=$suma2/$len2;
echo "Srednja vrednost ovog niza je: $sredvr <br>";
$naj=$niz2[0];
$br2=0;
$min=abs($niz2[0]-$sredvr);
for($i=0;$i<$len2-1;$i++)
{   
    $m=abs($niz2[$i]-$sredvr);
    if($m<$min)
    {   $min=$m;
        $naj=$niz2[$i];
        $br2=$i;
    }
}
echo "Prvi clan niza najblizi njegovoj srednjoj vrednosti je: $naj, indeksa $br2 <br>";
?>