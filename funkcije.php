<?php

/*Zad.13. Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.*/
$n=5;
$m=150;
$br=0;
for($i=$n;$i<=$m;$i++)
{
    if($i%13==0)
    {
        $br+=1;
    }
}
echo "Od $n do $m ima $br deljivih sa 13.";
echo "<br><br>";

/*Zad.14. Ispisati aritmetičku sredinu brojeva od n do m.*/

$n=4;
$m=8;
$s=0;
$br=0;
for($i=$n;$i<=$m;$i++)
{
    $s+=$i;
    $br+=1;
}
$arsr=$s/$br;
echo "Aritm. sredina brojeva od $n do $m je: $arsr <br><br>";

/*Zad.15. Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno.*/
$n=-3;
$m=5;
$brpoz=0;
$brneg=0;
for($i=$n;$i<=$m;$i++)
{
    if($i>=0)
    {
        $brpoz+=1;
    }
    else $brneg+=1;
}
echo "Broj negativnih brojeva od $n do $m je: $brneg, a broj pozitivnih brojeva  od $n d $m je: $brpoz <br><br>";

/*Zad.16. Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.*/
$n=5;
$m=50;
$br=0;
for($i=$n;$i<=$m;$i++)
{
    if($i%3==0 or $i%5==0)
    {
        $br+=1;
    }
}
echo "Ukupno je $br deljivih sa 3 ili sa 5.<br><br>";

/*Zad.17. Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.*/
$n=8;
$m=34;
$br=0;
$s=0;
for($i=$n;$i<=$m;$i++)
{
    $posl=$i%10;
    if($posl==4)
    {
        $br+=1;
        $s+=$n;
    }
}
echo "Ukupno brojeva od $n do $m kojima je poslednja cifra 4 i parni su a suma je $s. <br><br>";

/*Zad.18. Ispisati brojeve od n do m, koji su deljivi sa a.*/
$n=4;
$m=35;
$a=5;
for($i=$n;$i<=$m;$i++)
{
    if($i%$a==0)
    {
        echo "$i <br>";
    }
}
echo "<br><br>";

/*Zad.19. Ispisati brojeve od n do m koji nisu deljivi sa a.*/
$n=4;
$m=35;
$a=5;
for($i=$n;$i<=$m;$i++)
{
    if($i%$a!=0)
    {
        echo "$i <br>";
    }
}
echo "<br><br>";

/*Zad.20. Odrediti sumu brojeva od n do m koji su nisu deljivi brojem a.*/
$n=4;
$m=8;
$a=7;
$s=0;
for($i=$n;$i<=$m;$i++)
{
    if($i%$a!=0)
    {
        $s+=$i;
    }
}
echo "Suma brojeva od $n do $m je: $s. <br><br>";

/*Zad.21. Odrediti proizvod brojeva od n do m koji su deljivi brojem a.*/
$n=5;
$m=13;
$a=5;
$p=1;
for($i=$n;$i<=$m;$i++)
    {
        if($i%$a==0)
        {
            $p*=$i;
        }
    }
echo "Proizvod brojeva od $n do $m koji su deljivi sa $a je: $p. <br><br>";

/*FUNKCIJE*/

function mojaFunkcija()
    {
        echo "Zdravo svete!";
    }
mojaFunkcija();
echo "<br><br>";

/*---------------------*/
function mojaFunkcija1($tekst)
    {
        echo $tekst;
    } 
$tekst="Zdravo svete!";
mojaFunkcija1($tekst);
echo "<br><br>";

/*-------------------------*/
function korisnik($ime, $god)
    {
        echo "$ime ima $god godina. <br>";
    }
korisnik("Branka", "66");
echo "<br><br>";

/*---------------*/
function minus($doh, $tros )
    {
        echo $ost=$doh-$tros;
    }
minus(600, 750);
echo "<br><br>";

/*----------------*/
function zdravo()
    {
        echo "Zdravo! <br>";
    }
function it($i)
    {
        echo "Broj $i";
    }
for($i=1;$i<=5;$i++)
    {
        it($i);
        zdravo();
    }
echo "<br><br>";

/*-----------------*/
function Ime($ime)
    {
        echo "$ime";
    }
function Prez($prez)
    {
        echo "$prez";
    }
for($i=1;$i<=5;$i++)
    {
        Ime("Vesna");
        Prez("Ilincic");
        echo "<br>";
    }
echo "<br><br>";

/* RETURN */

function zbir($a, $b)
    {
        $rez=$a+$b;
        return $rez;
    }
$rezultat=zbir(5, 17);
echo $rezultat;
echo "<br><br>";

/*-----------------*/
/*1.Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav. 
Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić.*/

function pozdrav($ime, $prezime)
    {
        echo "Zdravo $ime $prezime";
        return;
    }
pozdrav("Vesna", "Ilincic");
echo "<br><br>";

/*2.Napisati funkciju zbir koja računa zbir dva realna broja.
Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja?*/

function zbir1($a, $b) 
    {
        $rez1=$a+$b;
        return $rez1;
    }
echo $rezultat1=zbir1(3, 4);
echo "<br>";
function razl1($a, $b)
    {
        $rez2=$a-$b;
        return $rez2;
    }
echo $rezultat2=razl1(3, 4);
echo "<br>";
function proizv1($a, $b)
    {
        $rez3=$a*$b;
        return $rez3;
    }
echo $rezultat3=proizv1(3, 4);
echo "<br>";
function kol1($a, $b)
    {
        $rez4=$a/$b;
        return $rez4;
    }
echo $rezultat4=kol1(3, 4);
echo "<br><br>";

/*3.Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno 
ukoliko nije neparan.*/
function neparan($n)
{
    if($n%2!=0)
    {
        return "Tacno";
    }
    else
    {
        return "Netacno";
    }
}
echo neparan(5);
echo "<br><br>";

/*4.Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. 
Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja.*/

function maks2($n, $m)
{
    if($n>=$m)
    {
        return $n;
    }
    else 
    {
        return $m;
    }
}
echo maks2(5, 98);
echo "<br><br>";

function maks4($a, $b, $c, $d)
{   $max=$a;
    if($b>$max)
        {
            $max=$b;
            return $b;
        }
    elseif($c>$max)
    {   
        $max=$c;
        return $c;
    }
    elseif($d>$max)
    {
        $max=$d;
        return $d;
    }
}
echo maks4(4, 7, 3, 0);
echo "<br><br>";

function maksCetiri($a, $b,$c,$d)
{
    $maks1=maks2($a, $b);
    $maks2=maks2($c, $d);
    $maks=maks2($maks1, $maks2);
    /*Kraci nacin: $maks=maks2(maks2($a, $b), maks2($c, $d))*/
    return $maks;
}
$m=maksCetiri(1, -3, -5, 7);
echo $m;
echo "<br><br>";

/*5.Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike*/

function Slika($slika)
{
    return $slika;
}
echo Slika("<img src='1.jpg'>");
echo "<br><br>";

function slika1($adresa)
{
    echo "<img src=$adresa><br>";
}
slika1("1.jpg");
slika1("2.jpg");
slika1("3.jpg");

/*6.Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju.*/

function Boja($boja)
{
    switch($boja)
    {
        case "red":
            echo "<p style='color:red'>Obojeni paragraf</p>";
            break;
        case "yellow":
            echo "<p style='color:yellow'>Obojeni paragraf</p>";
            break;
        case "blue":
            echo "<p style='color:blue'>Obojeni paragraf</p>";
            break;
    }
    return;
}
echo Boja("red");
echo "<br><br>";

function bojiParagraf($boja1)
{
    echo "<p style='color:$boja1'>Neki text</p><br>";
}
bojiParagraf("red");
bojiParagraf("yellow");
bojiParagraf("green");

/*7.Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.*/

function Ceobr($br)
{
    $txt="<p style='font-size:$br'>Ispisuje se tekst</p>";
    return $txt;
}
echo Ceobr(20);
echo "<br><br>";

/*8.Napraviti funkciju koja pet puta ispisuje istu rečenicu, 
a veličina fonta rečenice treba da bude jednaka vrednosti iteratora. */

function Pet($n)
{
    for($i=10;$i<=$n;$i++)
    {
        $text="<p style='font-size:$i'>Pet recenica</p>";
        echo $text;
    }
}
echo Pet(20);
echo "<br><br>";

/*9.Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u nedjelji 
(npr. za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”).
Pitanje: Kako bismo realizovali ovaj zadatak da se tražio n-ti mesec u godini?*/

function sedmiDan($n)
{
    switch($n)
    {
        case 1:
            echo "Ponedeljak";
            break;
        case 2:
            echo "Utorak";
            break;
        case 3:
            echo "Sreda";
            break;
        case 4:
            echo "Cetvrtak";
            break;
        case 5:
            echo "Petak";
            break;
        case 6:
            echo "Subota";
            break;
        case 7:
            echo "Nedelja";
            break;
        case 8:
            echo "Ponedeljak";
            break;
    }
    return;
}
sedmiDan(5);
echo "<br><br>";

$rBrDana=8;
if($rBrDana%7==1)
{
    echo "Ponedeljak";
}
elseif($rBrDana%7==2)
{
    echo "Utorak";
}
elseif($rBrDana%7==3)
{
    echo "Sreda";
}
elseif($rBrDana%7==4)
{
    echo "Cetvrtak";
}
elseif($rBrDana%7==5)
{
    echo "Petak";
}
elseif($rBrDana%7==6)
{
    echo "Subota";
}
elseif($rBrDana%7==0)
{
    echo "Nedelja";
}
else 
{
    echo "Greska";
}
echo "<br><br>";

function sedmiDan1()
{
    if($rBrDana%7==1)
{
    echo "Ponedeljak";
}
elseif($rBrDana%7==2)
{
    echo "Utorak";
}
elseif($rBrDana%7==3)
{
    echo "Sreda";
}
elseif($rBrDana%7==4)
{
    echo "Cetvrtak";
}
elseif($rBrDana%7==5)
{
    echo "Petak";
}
elseif($rBrDana%7==6)
{
    echo "Subota";
}
elseif($rBrDana%7==0)
{
    echo "Nedelja";
}
else 
{
    echo "Greska";
}
}
sedmiDan(210);
echo "<br><br>";


$rBrMeseca=11;
switch($rBrMeseca)
{
    case ($rBrMeseca%12==1):
        echo "Januar";
        break;
    case ($rBrMeseca%12==2):
        echo "Februar";
        break;
    case ($rBrMeseca%12==3):
        echo "Mart";
        break;
    case ($rBrMeseca%12==4):
        echo "April";
        break;
    case ($rBrMeseca%12==5):
        echo "Maj";
        break;
    case ($rBrMeseca%12==6):
        echo "Jun";
        break;
    case ($rBrMeseca%12==7):
        echo "Jul";
        break;
    case ($rBrMeseca%12==8):
        echo "Avgust";
        break;
    case ($rBrMeseca%12==9):
        echo "Septembar";
        break;
    case ($rBrMeseca%12==10):
        echo "Oktobar";
        break;
    case ($rBrMeseca%12==11):
        echo "Novembar";
        break;
    case ($rBrMeseca%12==0):
        echo "Jul";
        break;
    default:
        echo "Greska!";
}
echo "<br><br>";

/*10.Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri u intervalu od n do m.
Prebrojati koliko ima ovakvih brojeva od n do m.*/

function deljivSaTri($n, $m)
{  
    $broj=0;
    for($i=$n;$i<=$m;$i++)
    {
        if($i%3==0)
        {
            $broj+=1;
            echo $i;
            echo "<br>";
        }
    }
    echo "Ukupno brojeva od $n do $m deljivih sa 3 je: $broj";
    return;
}
deljivSaTri(3, 18);
echo "<br><br>";

/*11.Napisati funkciju kojom se ispisuju brojevi u intervalu od n do m koji su deljivi 
sa tačno dva od brojeva 2, 3, 5 i 7.*/

function Deljivi($n, $m)
{   
    $i=$n;
    while($i<=$m)
    {
        if(($i%2==0 && $i%3==0) || ($i%2==0 && $i%5==0) || ($i%2==0 && $i%7==0) || ($i%3==0 && $i%5==0) ||($i%3==0 && $i%7==0)||($i%5==0 && $i%7==0))
        {
            echo $i;
            echo "<br>";
        }
        $i++;
    }
    return;
}
echo Deljivi(3, 19);
echo "<br><br>";

$n=5;
$m=15;
function deljivi1($n, $m)
{
for($i=$n;$i<=$m;$i++)
{
    $br=0;
    if($i%2==0)
    {
        $br++;
    }
    if($i%3==0)
    {
        $br++;
    }
    if($i%5==0)
    {
        $br++;
    }
    if($i%7==0)
    {
        $br++;
    }
    if($br==2)
    {
        echo $br;
    }
}
}
deljivi1(5, 15);
echo "<br><br";

?>

<html>
    <head>
        <style>
            
            
        </style>
    </head>
    <body>
    </body>
</html>