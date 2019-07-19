<?php
/*Zad.1. Odrediti sumu brojeva od 1 do 100*/
$i=1;
$suma100=0;
while($i<=100)
{
    $suma100=$suma100+$i;
    $i++;
}
echo "Suma brojeva od 1 do 100 je: $suma100";
echo "<br><br>";

/*Zad.2. Odrediti sumu brojeva od 1 do n.*/
$n=2345;
$i=1;
$suma=0;
while($i<=$n)
{
    $suma=$suma+$i;
    $i++;
}
echo "Suma brojeva od 1 do n je: $suma";
echo "<br><br>";

/*Zad.3. Odrediti sumu brojeva od n do m.*/
$n=5;
$m=346;
$i=$n;
$suma=0;
while($i<=$m)
{
    $suma=$suma+$i;
    $i++;
}
echo "Suma brojeva od n do m je: $suma";
echo "<br><br>";

/*Zad.4. Odrediti sumu kvadrata brojeva od n do m.*/
$n=5;
$n1=$n;
$m=356;
$suma=0;
$i=1;
while($i<=$m)
{
    $kvadr=$n*$n;/* $kvadr+=pow($n, 2) ili $kvadr+=$n**2 */
    $suma=$suma+$kvadr;
    $n=$n+1;
    $i++;
}
echo "Suma kvadrata brojeva od $n1 do $m je: $suma";
echo "<br><br>";

/*Zad.5. Odrediti proizvod svih brojeva od n do m*/
$n=5;
$n1=$n;
$m=5;
$proizv=1;
while($n<=$m)
{
    $proizv=$proizv*$n;
    $n=$n+1;
}
echo "Proizvod brojeva od $n1 do $m je: $proizv";
echo "<br><br>";

/* FOR petlja */

/*Zad.1. Ispisati brojeve od 1 do 10.*/
for($i=1;$i<=10;$i++)
{
    echo "$i <br>";
}
echo "<br><br>";

/*Zad.2. Ispisati brojeve od 20 do 1. */
for($i=20;$i>=1;$i--)
{
    echo "$i <br>";
}
echo "<br><br>";

/*Zad.3. Ispisati parne brojeve od 1 do 20. */
for($i=1;$i<=20;$i++)
{
    if($i%2==0)
        {
            echo "$i <br>";
        }
}
echo "<br><br>";

/*Zad.4. Ispisati dvostruku vrednost brojeva od 5 do 15. */
for($i=5;$i<=15;$i++)
    {
        $n=2*$i;
        echo "$n <br>";   
    }
echo "<br><br>";

/*Zad.5. Odrediti sumu brojeva od 1 do 100. */
$suma=0;
for($i=1;$i<=100;$i++)
{
    $suma=$suma+$i;
}
echo "$suma <br><br>";

/*Zad.6. Odrediti sumu brojeva od 1 do n. */
$suma=0;
$n=25;
for($i=1;$i<=$n;$i++)
{
    $suma=$suma+$i;
}
echo "$suma <br><br>";

/*Zad.7. Odrediti sumu brojeva od n do m. */
$suma=0;
$n=2;
$m=34;
for($i=$n;$i<=$m;$i++)
{
    $suma=$suma+$i;
}
echo "$suma <br><br>";

/*Zad.8. Odrediti proizvod brojeva od n do m. */
$proizv=1;
$n=1;
$m=5;
for($i=$n;$i<=$m;$i++)
{
    $proizv=$proizv*$i;
}
echo "$proizv <br><br>";

/*Zad.9. Odrediti sumu kvadrata brojeva od n do m. */
$n=1;
$m=5;
$suma=0;
for($i=$n;$i<=$m;$i++)
{
    $kvadr=$i*$i;/* $kvadr+=pow($n, 2) ili $kvadr+=$n**2 */
    $suma=$suma+$kvadr;
}
echo "$suma <br><br>";

/*Zad.10. Preuzeti sa interneta 3 slike i imenovati ih 1, 2 i 3. 
For petljom u HTML-u ispisati svaku od slicica uz pomoc brojaca.*/
/*1.nacin*/
function slikePr($slika)
{
    echo "$slika <br>";
}
for($i=1;$i<=3;$i++) 
{
    slikePr("<img src='$i.jpg'>");
}
echo "<br><br>";

/*2.nacin*/
for($i=1;$i<=3;$i++)
{
    echo "<img src='$i.jpg'> <br>";
}
echo "<br><br>";

/*Zad.11. Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.*/
$m=30;
$suma=0;
for($n=1;$n<=30;$n++)
    {
        if($n%9==0)
        {
            $suma=$suma+$n;
        }

    }
echo "$suma <br><br>";

/*Zad.12. Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. */
$m=100;
$proizv=1;
for($n=20;$n<=100;$n++)
{
    if($n%11==0)
    {
        $proizv=$proizv*$n;
    }
}
echo "$proizv <br><br>";

?>
<html>
    <head>
        <style>
            img {width:30%;}
        </style>
    </head>
    <body>
    </body>
</html>