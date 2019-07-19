<?php
/*Zad.1. Napisati program koji za unetu temperaturu vode u Celzijusovim stepenima, ispisuje:
a.	Voda ključa, ukoliko je temperatura vode veća ili jednaka 100 Celzijusovih stepeni
b.	Voda se ledi, ukoliko je temperatura vode manja ili jednaka 0 Celzijusovih stepeni
c.	U ostalim slučajevima ispisati - voda je u tečnom stanju*/

$tempVode=23;
if($tempVode>=100)
    {echo "Voda ključa.";}
    elseif($tempVode<=0)
        {echo "Voda se ledi.";}
else
    {echo "Voda je u tečnom stanju.";}
    echo "<br>";

/*Zad.2. 2.	Prema jednoj podeli, u psihologiji postoji četiri tipa ličnosti - sangvinik, melanholik, flegmatik i kolerik.
Za uneti tip ličnosti na ekranu prikazati odgovarajući avatar (sličicu).*/

$tipLich="kolerik";
if($tipLich=="sangvinik")
    {echo "Ovaj tip ličnosti je $tipLich.";}
    elseif($tipLich=="melanholik")
        {echo "Ovaj tip ličnosti je $tipLich.";}
        elseif($tipLich=="flegmatik")
            {echo "Ovaj tip ličnosti je $tipLich.";}
else
    {echo "Ovaj tip ličnosti je $tipLich.";}
    echo "<br>";

/*Zad.3. 3.	Pretvoriti uneto vrednost kalorija (kcal) u kilo džule (kJ), ako se izračunavanje vrši po formuli: 1 kcal = 4.1868 kJ
Ukoliko je dobijena vrednost manja od 2000 kJ ispisati “povećajte dnevni unos”, ukoliko je dobijena vrednost veća od 4000 kJ
 ispisati “smanjite dnevni unos”, u ostalim slučajevima ispisati “dnevni unos je u redu” .*/

 $kcal=789;
 $kJ=4.1868*$kcal;
 if($kJ<2000)
    {echo "Povećajte dnevni unos!";}
        elseif($kJ>4000)
            {echo "Smanjite dnevni unos!";}
else
    {echo "Dnevni unos je u redu!";}
    echo "<br>";












?>