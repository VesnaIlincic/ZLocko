<html>
    <head>
        <style>
            p1, #r {background-color:red;}
            p2, #g {background-color:green;}
            p3, #b {background-color:blue;}
            #y {background-color:yellow;}
            .blue{color:blue;}
            .yellow{color:yellow;}
            .red{color:red;}
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php

$boja="crvena";
switch($boja)
{
    case "crvena":
        echo "Odabrali ste crvenu boju!";
        break;
    case "plava":
        echo "Odabrali ste plavu boju!";
        break;
    case "zelena":
        echo "Odabrali ste zelenu boju!";
        break;
    default:
        echo "Niste odabrali crvenu, plavu i zelenu boju!";
        break;
}
echo "<br><br>";

/*Zad.1.Za uneti redni broj dana ispisati koji je to dan u nedelji 
(1. dan je ponedeljak).*/

$rbrDana=date("N");
switch($rbrDana)
{
    case "1":
        echo "Ponedeljak.";
        break;
    case "2":
        echo "Utorak";
        break;
    case "3":
        echo "Sreda";
        break;
    case "4":
        echo "Cetvrtak";
        break;
    case "5":
        echo "Petak";
        break;
    case "6":
        echo "Subota";
        break;
    case "7":
        echo "Nedelja";
        break;
    default:
        echo "Greska";
        break;
}
echo "<br><br>";

/*Zad.2. Za unetu prosečnu ocenu učenika ispisati njegov uspeh te školske godine.*/

$prosOc=4;
switch($prosOc)
{
    case 1:
        echo "Nedovoljan";
        break;
    case 2:
        echo "Dovoljan";
        break;
    case 3:
        echo "Dobar";
        break;
    case 4:
        echo "Vrlodobar";
        break;
    case 5:
        echo "Odlican";
        break;
    default:
        echo "Greska";
        break;
}
echo "<br><br>";

/*Zad.3. Za uneti paran broj manji od 10 ispitati da li je uneti broj nula, dvojka, četvorka, šestica, osmica ili je unos pogrešan.*/

$parBr=6;
switch($parBr)
{
    case 2:
        echo "Jeste 2";
        break;
    case 4:
        echo "Jeste 4";
        break;
    case 6:
        echo "Jeste 6";
        break;
    case 8:
        echo "Jeste 8";
        break;
    default: 
        echo "Unos pogresan!";
        break;
}
echo "<br><br>";

/*Zad.4. Za uneta dva broja i karakter napraviti kalkulator koji vrši množenje ta dva broja 
ukoliko je uneto slovo ’m’, deljenje ukoliko je uneto slovo ’d’, sabiranje ukoliko je uneto slovo ’s’ ili oduzimanje ukoliko je uneto slovo ’o’.*/

$a=35;
$b=78;
$k="m";

switch($k)
{
    case "m":
        echo "<p> $a * $b </p>";
        break;
    case "d":
        echo "<p> $a / $b </p>";
        break;
    case "s":
        echo "<p> $a + $b </p>";
        break;
    case "o":
        echo "<p> $a - $b </p>";
        break;
    default:
        echo "Pogresan unos!";
        break;
}
echo "<br><br>";

/*Zad.5. Za preuzeti dan sa računara ispisati još koliko dana je preostalo do vikenda.*/

$danRac=date("N");
$ost=7-$danRac;
switch($danRac)
{
    case 1:
        echo $ost;
        break;
    case 2:
        echo $ost;
        break;
    case 3:
        echo $ost;
        break;
    case 4:
        echo $ost;
        break;
    case 5:
        echo $ost;
        break;
    case 6:
        echo $ost;
        break;
    case 7:
        echo $ost;
        break;
    deafult:
        echo "Greska";
        break;
}
echo "<br><br>";

/*Zad.6.Preuzeti redni broj meseca sa računara i ispisati koji je to mesec u godini.*/

$redbrMes=date("m");
switch($redbrMes)
 {
    case 1:
        echo "Januar";
        break;
    case 2:
        echo "Februar";
        break;
    case 3:
        echo "Mart";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "Maj";
        break;
    case 6:
        echo "Jun";
        break;
    case 7:
        echo "Jul";
        break;
    case 8:
        echo "Avgust";
        break;
    case 9:
        echo "Septembar";
        break;
    case 10:
        echo "Oktobar";
        break;
    case 11:
        echo "Novembar";
        break;
    case 12:
        echo "Decembar";
        break;
    default:
        echo "Greska!";
        break;
 }
 echo "<br><br>";

 /*Zad.7. Preuzeti redni broj meseca sa računara i ispisati koliko taj mesec ima dana. Ukoliko je u pitanju mesec februar, 
 preuzeti i godinu sa računara, ispitati da li je godina prestupna i na osnovu toga ispisati broj dana meseca februara.*/

 $rbrMes=date('m');/*m je redni broj meseca u godini*/
 $brDanaMes=date('t');/*t je broj dana datog meseca*/
 $godRac=date('Y');
 echo "Ovaj mesec ima: $brDanaMes dana.<br>";
 switch($rbrMes)
    {
        case 02:
            echo "Ovo je $godRac godina.";
                case ($godRac==date('L')):
                    echo "Godina je prestupna i broj dana meseca februara je: $brDanaMes";
                    break;
                default:
                    echo "Godina nije prestupna.";           
    }
echo "<br><br>";

 /*Zad.8. Na osnovu unete boje na engleskom jeziku obojiti tekst paragrafa u crveno, zeleno ili plavo. 
 Ukoliko nije uneta ni jedna od ove tri boje, tekst paragrafa obojiti u žuto.*/

 $boja="grey";
 switch($boja)
     {
         case "red":
             echo "<p id='r'>Crveno</p>";
             break;
         case "green":
             echo "<p id='g'>Zeleno</p>";
             break;
         case "blue":
             echo "<p id='b'>Plavo</p>";
             break;
         default:
             echo "<p id='y'>Nije uneta trazena boja!</p>";
     }
 echo "<br><br>";





 /*                                                                     */

/*Ispisati sve brojeve od 1 do 10.*/

 $i=1;
 while($i<=10)
{
    echo $i;
    echo "<br>";
    $i++;
}
echo "<br><br>";

/*Ispisati sve brojeve od 1 do 10.*/

$i=0;
while($i<10)
{
    $i++;
    echo $i;
    echo "<br>";
}
echo "<br><br>";

/*Ispisati sve brojeve od 1 do 20. */

$i=1;
while($i<=20)
{
    echo $i;
    echo "<br>";
    $i++;
}
echo "<br><br>";

/*Ispisati sve brojeve od 20 do 1.*/

$i=20;
while($i>=1)
{
    echo $i;
    echo "<br>";
    $i--;
}
echo "<br><br>";

/* Ispisati sve parne brojeve do 20.*/

$i=1;
while($i<=20)
{
    {if(($i%2)==0)
        {echo $i;
         echo "<br>";}}
    $i++;
}
echo "<br><br>";

/*Deljenjem dva broja odrediti celi deo i ostatak, bez upotrebe znaka / i %.*/

/*1.nacin*/
$a=42;
$b=5;
$i=$b;
$ceo=0;
while($i<=$a)
{
    $i=$i+$b;
    $ceo++;
}
$ost=$a-($b * $ceo);
echo "Deljenje brojeva $a i $b rezultat:";
echo "<br>";
echo "Celi deo=$ceo <br>Ostatak=$ost";
echo "<br><br>";

/*2.nacin*/
$a=31;
$b=9;
$kol=0;
$ost=$a;
while($ost>=$b)
    {
        $ost=$ost-$b;
        $kol++;
    }
    echo "$a=$kol*$b+$ost";
    echo "<br><br>";

/*Zad. Sest paragrafa naizmenicno obojiti sa tri razlicite boje*/

/*1.nacin*/
$a="<p1>Prvi";
$b="<p2>Drugi";
$c="<p3>Treci";
$i=1;
while($i<=2)
{
    echo "$a$b$c";
    $i++;
}
echo "<br><br>";

/*2. nacin*/
$a="<p id='r'>Prvi</p>";
$b="<p id='g'>Drugi</p>";
$c="<p id='b'>Treci</p>";
$i=1;
while($i<=2)
{
    echo "$a$b$c";
    $i++;
}
echo "<br><br>";

/*3.nacin*/
$text="Some text jkdjejjed...";
$i=1;
while($i<=6)
{
    if($i%3==1)
    {
        echo "<p class='blue'>$text</p>";
    }
    elseif($i%3==2)
    {
        echo "<p class='yellow'>$text</p>";
    }
    else
    {
        echo "<p class='red'>$text</p>";
    }
    $i++;
}
echo "<br><br>";

?>