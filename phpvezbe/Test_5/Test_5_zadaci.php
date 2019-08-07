<?php

/*Uneti niz od n celih brojeva koji predstavljaju plate radnika jedne firme.*/

$plate=array(35, 234, 678, 987, 123);
$n=count($plate);

/*Napisati funkciju prosecna kojoj se prosleđuje niz plata radnika, 
a ona vraća prosečnu platu radnika ove firme.*/
$sumapl=0;
function prosecna($plate)
{
    for($i=0;$i<$n;$i++)
    {
        $sumapl+=$plate[$i];
    }
    return $prospl=$sumapl/$n;
}
echo "Prosecna plata radnika je: $prospl <br>";

/*Napisati funkciju ispisiNiz kojoj se prosleđuje niz plata radnika, 
prethodno izračunata prosečna plata i nazivi dve boje na engleskom jeziku.
Ova funkcija na ekranu ispisuje sve plate radnika, ali tako da prvom prosleđenom bojom budu obojene sve natprosečne plate radnika, 
a drugom prosleđenom bojom sve ostale plate.*/

function ispisiNiz($plate, $boja1, $boja2)
{   
    echo "Prosecna plata radnika je: $prospl <br>";
    for($i=0;$i<$n;$i++)
    {   
        if($prospl<$plate[$i])
        {
            echo "<p style='color:$boja1'>".$plate[$i]."</p><br>";
        }
        else 
        {
            echo "<p style='$boja2'>".$plate[$i]."</p><br>";
        }
}
ispisiNiz($plate, "red", "blue");
echo "<br><br>";

/*Napisati funkciju indeksMinMax kojoj se prosleđuje niz plata radnika 
i na ekranu ispisuje zbir indeksa minimalne i maksimalne plate.*/
$min=$plate[0];
$max=0;
$brmin=0;
$brmax=0;
$zbir=0;
function indeksiMinMax($plate)
{   
    for($i=0;$i<$n;$i++)
    {
       if($min>=$plate[$i]) 
       {
           $min=$plate[$i];
           $brmin=$i;
       }
       if($max<=$plate[$i])
       {
           $max=$plate[$i];
           $brmax=$i;
       }
    }
    $zbir=$brmin+$brmax;
    return $zbir;
}
indeksiMinMax($plate);
//echo "Zbir indexa max i min plate je: $zbir";

/*Napisati funkciju slika kojoj se prosleđuje niz i dve promenljive 
koje čuvaju adrese dve slike - slika nasmejanog čovečuljka i slika tužnog čovečuljka. 
Funkcija na ekranu treba da ispisuje prosleđenu sliku nasmejanog čovečuljka
 ukoliko više od polovine radnika ima natprosečnu platu, 
a u suprotnom prikazuje prosleđenu sliku tužnog čovečuljka.*/

$brrad=0;
function slika($plate, $sl1, $sl2)
{
    for($i=0;$i<$n;$i++)
    {
        if($prospl<$plate[$i])
        {
            $brrad++;
        }
        if($brrad>$n/2)
        {
            echo "<span><img src='sl1.jpg'></span><br>";
        }
        else
        {
            echo "<span><img src='sl2.jpg'></span><br>";
        }
    }
    return;
}
slika($plate, $sl1, $sl2);
/*javlja gresku u poslednjem redu, zatvaranja php*/
?>
