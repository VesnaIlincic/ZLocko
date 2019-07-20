<?php
    $nizAuta=array("BMW","Opel","Toyota");
    $prvaKlupa=array("Nikola","Milica","Jelena","Vanja","Jelena");
    echo $prvaKlupa[0];
    echo "<br>";
    echo $prvaKlupa[4]."<br>";
    /*$prom=array(....);
    $prom - indeksirani niz 
    Indeksi se dodeljuju automatski i indeksiranje pocinje od 0.
    Element i ima indeks i-1, a poslednji elem. ima indeks n-1. 
    $prom[0], $prom[1],...,$prom[n-1].*/
    $drugaKlupa[100]="Bogdan";
    $drugaKlupa[105]="Nemanja";
    $drugaKlupa[5]="Rade";
    $drugaKlupa[200]="Sanja";
    echo $drugaKlupa[5]."<br><br>";
    $t=array(array(1,2,3),array(1,2));
    

    $prvaKlupa=array("Nikola","Milica","Jelena");
    $len=count($prvaKlupa);
    for($i=0;$i<$len;$i++)
    {
        echo $prvaKlupa[$i];
        echo "<br><br>";
    }

    /*Zad.1. Ispisati sve elemente niza od 5 stringova*/

    $jela=array("Kupus","Pasulj","Lazanje","Pizza","Punjene paprike");
    $len=count($jela);
    for($i=0;$i<$len;$i++)
    {
        echo $jela[$i];
        echo "<br>";
    }
    echo "<be><br>";

    /*Zad.2. Odrediti zbir elemenata celobrojnog niza.*/

    $clbr=array(1,2,3,5,6,7,8);
    $len=count($clbr);
    $suma=0;
    for($i=0;$i<$len;$i++)
    {
        $suma+=$clbr[$i];
    }
    echo $suma."<br><br>";

    /*Zad.3. Odrediti srednju vrednost elemenata celobrojnog niza*/

    $s=0;
    $clbr1=array(-2, 4, 7, -8, 23);
    $len=count($clbr1);
    for($i=0;$i<$len;$i++)
    {
        $s+=$clbr1[$i];
    }
    $srvr=$s/$len;
    echo $srvr."<br><br>";

/*Zad.4. Odrediti max vrednost u celobrojnom nizu.*/

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
    
/*Zad.5. Odrediti min vrednost u celobrojnom nizu.*/

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

/*Zad.6. Odrediti indeks najvećeg elementa celobrojnog niza.*/



/*Zad.7 Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.*/



/*Zad.8. Izračunati zbir pozitivnih elemenata celobrojnog niza.*/



/*Zad.9. Odrediti broj parnih elemenata u celobrojnom nizu.*/



/*Zad.10. Izračunati sumu elemenata u nizu sa parnim indeksom.*/














?>
