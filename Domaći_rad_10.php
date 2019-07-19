<?php

/*1. Zadatak
Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30.
a)	Koristeći while petlju
b)	Kotisteći for petlju*/

/*a)koristeci while petlju*/
$n=1;
$i=1;
$p=1;
$s=0;
while($n<=20)
{
    $p*=$n;
    $n++;
}
echo "Proizvod brojeva od 1 do 20 je: $p <br>";
while($i<=30)
{
    $s+=$i;
    $i++;
}
echo "Zbir brojeva od 1 do 30 je: $s <br>";
echo "Proizvod-zbir= $p-$s <br><br>";

/*b) Koristeci for petlju*/
$s=0;
$p=1;
for($n=1;$n<=20;$n++)
{
    $p*=$n;
}
echo "Proizvod brojeva od 1 do 20 je: $p <br>";
for($i=1;$i<=30;$i++)
{
    $s+=$i;
}
echo "Zbir brojeva od 1 do 30 je: $s <br>";
echo "Proizvod-zbir= $p-$s <br><br>";

/*2. Zadatak
Odrediti sumu kubova brojeva od n do m.
a)	Koristeći while petlju
b)	Koristeći for petlju*/

/*a) Koristeci while petlju*/
$n=1;
$n1=$n;
$m=4;
$s=0;
while($n<=$m)
{
    $s+=pow($n,3);
    $n++;
}
echo "Suma kubova brojeva od $n1 do $m je: $s <br>";

/*b) Koristeci for petlju*/
$m=4;
$s=0;
$n=1;
for($i=$n;$i<=$m;$i++)
{
    $s+=pow($i,3);
}
echo "Suma kubova brojeva od $n do $m je: $s <br><br>";

?>