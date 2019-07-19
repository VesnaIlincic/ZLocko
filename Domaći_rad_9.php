<?php

/*Zadatak 1. Za tri uneta broja ispisati koji od njih je najveći, 
koji od njih je srednji, a koji od nih je najmanji.*/

$x=78;
$y=-34;
$z=187;
if($x>=$y and $x>$z)
    {
        $max=$x;
        if($y>$z)
            {$sred=$y; $min=$z;}
        else 
            {$sred=$z; $min=$y;}
    }
elseif($y>$x and $y>=$z)
    {
        $max=$y;
        if($x>$z)
            {$sred=$x; $min=$z;}
        else
            {$sred=$z; $min=$y;}
    }
elseif($z>$y and $z>$x)
    {
        $max=$z;
        if($y>$x) 
            {$sred=$y; $min=$x;}
        else
            {$sred=$x; $min=$y;}
    }
echo "Max je: $max, srednji je: $sred, a min je: $min.";
echo "<br><br>";

/*Zadatak 2. Učitati dva cela broja i ispitati da li je veći od njih paran. */

/*1.nacin*/
$a=76;
$b=88;
if($a==$b)
    {
        if($a%2==0)
            {echo "Oba broja su identicna i parna.";}
        else
            {echo "Oba broja su identicna i neparna.";}}
if($a>$b)
    { 
        if($a%2==0)
            {echo "Broj $a je veci i paran je.";}
        else 
            {echo "Broj $a je veci, ali je neparan.";}
    }
elseif($b%2==0)
    {echo "Broj $b je veci i paran je.";}
else
    {echo "Broj $b je veci i neparan je.";}
echo "<br><br>";

/*2.nacin*/
$a=76;
$b=88;
if($a==$b)
    {
        switch($a)
            {
                case($a%2==0):
                    echo "Oba broja su identicna i parna";
                    break;
                default:
                    echo "Oba broja su identicna i neparna";
            }
    }
if($a>$b)
    {
        switch($a)
            {
                case($a%2==0):
                    echo "Broj $a je veci i paran je";
                    break;
                default:
                    echo "Broj $a je veci i neparan je";
            }
    }
switch($b)
    {
        case($b%2==0):
            echo "Broj $b je veci i paran je";
            break;
        default:
            echo "Broj $b je veci i neparan je";
    }
echo "<br><br>";

/*3.nacin*/
$a=76;
$b=88;
switch($a)
    {
        case($a==$b && $a%2==0):
            echo "Oba broja su identicna i parna.";
            break;
        case($a==$b && $a%2!==0):
            echo "Oba broja su identicna i neparna.";
            break;
        case($a>$b && $a%2==0):
            echo "Broj $a je veci i paran je.";
            break;
        case($b>$a && $b%2==0):
            echo "Broj $b je veci i paran je.";
            break;
        default:
            echo "Broj $b je veci i neparan je.";
    }
echo "<br><br>";
    
/*Zadatak 3. Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. 
Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren.*/

/*1.nacin*/
$danRac=date('N');
$vremeRac=date('G');
if($danRac==6 || $danRac==7)
            {
                if($vremeRac>=10 && $vremeRac<=18)
                    {echo "Butik je otvoren.";}
                else 
                    {echo "Butik je zatvoren.";}
            }
elseif($vremeRac>=9 && $vremeRac<=20)
        {echo "Butik je otvoren.";}
else
    {echo "Butik je zatvoren.";}
echo "<br><br>";

/*2.nacin*/
$danRac=date('N');
$vremeRac=date('G');
switch($danRac)
    {
        case(($danRac==6 || $danRac==7) && ($vremeRac>=10 && $vremeRac<=18)):
            echo "Butik je otvoren.";
            break;
        case(($danRac!==6 && $danRac!==7) && ($vremeRac>=9 && $vremeRac<=20)):
            echo "Butik je otvoren.";
            break;
        default:
            echo "Butik je zatvoren.";
    }
    echo "<br><br>";

/*Zadatak 4.  Sest paragrafa naizmenicno obojiti sa tri razlicite boje*/

$a="<p id='r'>Prvi</p>";
$b="<p id='g'>Drugi</p>";
$c="<p id='b'>Treci</p>";
$i=1;
while($i<=2)
{
    echo "$a$b$c";
    $i++;
}
echo "<br>";

/*Zad.4a. Na osnovu unete boje na engleskom jeziku obojiti tekst paragrafa u crveno, zeleno ili plavo. 
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

?>
<html>
    <head>
        <style>
            #r {background-color:red;}
            #g {background-color:green;}
            #b {background-color:blue;}
            #y {background-color:yellow;}
        </style>
    </head>
    <body>
    
    </body>
</html>
