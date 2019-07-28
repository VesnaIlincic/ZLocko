<?php
/*A.9. Izračunati proizvod svih elemenata niza koji se nalaze na parnim pozicijama (indeksima).*/

$niz1=array(-4, 5, -2, -7, 9, 12, -8);
$len1=count($niz1);
$p=1;
for($i=0;$i<$len1;$i+=2)
{
    $p*=$niz1[$i];
}
echo "Proizvod elem. sa parnim indexima je: $p <br><br>";

/*A.10.Kreiraju se nizovi A i B od po N celih brojeva, s tim što elementi niza B mogu biti samo brojevi 0 i 1. 
Potrebno je izračunati ispisati sve elemente niza A za koje je odgovarajući elemenat niza B jednak 1 i izračunati njihov zbir.*/

$a1=array(3, 5, -6, -7, 98, 23, 22);
$b1=array(0, 1, 1, 0, 1, 0, 1);
$n1=count($a1);
$suma1=0;
for($i=0;$i<$n1;$i++)
{
    if($b1[$i]==1)
    {
        $suma1+=$a1[$i];
    }
}
echo "Suma elem. niza A koji odgovaraju pozicijama elemenata vrednosti 1 niza B je: $suma1 <br><br>";

/*A.11. Za unete nizove A od N i B od M celih brojeva, treba ispisati M elemenata niza A onim redosledom kako je navedeno u nizu B.
Podrazumeva se da ni jedan elemenat niza B nije veći od N.
Npr. A=[23,52,38,44} i B=[3,1,1,2], ispisuje se 38, 23, 23, 52.*/

$a2=array(23, 52, 38, 44);
$b2=array(3, 1, 1, 2, 2);
$n2=count($a2);
$m2=count($b2);
$br=0;
$c2=array();
if($n2>$m2)
{
    for($i=0;$i<$m2;$i++)
    {   
        $br=$b2[$i];
        $c2[$i]=$a2[$br];
        echo "$c2[$i] <br><br>";
    }
}
else
{
    for($i=0;$i<$n2;$i++)
    {   
        $br=$b2[$i];
        $c2[$i]=$a2[$br];
        echo "$c2[$i] <br><br>";
    }
}

/*A.12. Za uneti niz od N numeričkih vrednosti, 
prebrojati koliko ima elemenata koji su duplo veći od prethodnog i za 10 manji od sledećeg elementa u nizu.*/

/*A.13. Proveriti da li je niz uređen po neopadajućem redosledu (svaki sledeći el. je veći ili jednak prethodnom).*/

/*A.14. U nizu brojeva A od N elemenata, pronaći najduži podniz pozitivnih brojeva.*/

/*A.15. U nizu brojeva A, pronaći najduži neopadajući podniz.
Zadatak je sličan pronalaženju najdužeg pozitivnog podniza, uz par manjih izmena*/

/*A.16. Proveriti da li među elementima niza nema duplikata.*/












?>