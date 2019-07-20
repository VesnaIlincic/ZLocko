<?php

/*Zad.1. Odrediti srednju vrednost elemenata celobrojnog niza.*/

$s=0;
$clbr=array(-2, 4, 7, -8, 23);
$len=count($clbr);
for($i=0;$i<$len;$i++)
    {
        $s+=$clbr[$i];
    }
$srvr=$s/$len;
echo "Srednja vrednost ovog niza je: $srvr <br><br>";

/*Zad.2. Odrediti maksimalnu vrednost u celobrojnom nizu.*/

$clbr1=array(3, -5, 24, -12, 33);
$len1=count($clbr1);
$max=$clbr1[0];
for($i=1;$i<$len1;$i++)
{
    if($max<=$clbr1[$i])
    {
        $max=$clbr1[$i];
    }
}
echo "Maksimalna vrednost datog celobrojnog niza je: $max <br><br>";

/*Zad.3. Odrediti minimalnu vrednost u celobrojnom nizu.*/

$clbr2=array(7, 34, -85, 9, -3, -67);
$len2=count($clbr2);
$min=$clbr2[0];
for($i=1;$i<$len2;$i++)
{
    if($min>=$clbr2[$i])
    {
        $min=$clbr2[$i];
    }
}
echo "Minimalna vrednost datog celobrojnog niza je: $min <br><br>";






?>