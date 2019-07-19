<html>
    <head></head>
    <body></body>
</html>



<?php

/*Zad.9. Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, dobar dan za vreme manje od 18 sati popodne
 i u ostalim  slučajevima ispisati dobro veče.*/

 $vremeRac=date("H:i:s");
 if($vremeRac<date("12:00:00"))
    {echo "<p>Dobro jutro!</p>";}
    elseif($vremeRac<date("18:00:00"))
        {echo "<p>Dobar dan!</p>";}
else
    {echo "Dobro veče!";}
    echo "<br>";
    
/*Zad.10. Uporediti dva uneta datuma i ispisati koji od njih je raniji.*/

$dat1="2019-03-12";
$dat2="2019-05-24";
if($dat1>$dat2)
    {echo "$dat2";}
else
    {echo "$dat1";}
    echo "<br>";

$dan1=03;
$mes1=04;
$god1=1978;
$dan2=05;
$mes2=07;
$god2=1978;
if($god2==$god1)
    if($mes2==$mes1)
        if($dan2==$dan2)
            {echo "<p>Datumi su jednaki.</p>";}
        elseif($dan2<$dan1)
            {echo "<p>Datum $dan2 je raniji.</p>";}
        else {echo "<p>Datum $dan1 je raniji.</p>";}
    elseif($mes2>$mes1)
        {echo "<p>Mesec $mes1 je raniji.</p>";}
    else{echo "<p>Mesec $mes2 je raniji.</p>";}
elseif($god2>$god1)
    {echo "<p>Godina $god1 je ranija.</p>";}
else {echo "<p>Godina $god2 je ranija.</p>";}
echo "<br>";


/*Zad.11. Radno vreme jedne programerske firme je od 9h do 17h. 
Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.*/

$vremeRac1=date("H:i:s");
$vremeFirme1=date("09:00:00");
$vremeFirme2=date("17:00:00");
if($vremeRac1<$vremeFirme2 and $vremeRac1>$vremeFirme1)
    {echo "Racunarska firma radi.";}
else
    {echo "Racunarska firma ne radi.";}
    echo "<br>";

/*Zad.12. Za unet početak i kraj radnog vremena dva lekara ispisati DA 
ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.*/

$pocRada1=date("08:00:00");
$krajRada1=date("16:00:00");
$pocRada2=date("12:00:00");
$krajRada2=date("20:00:00");
if($krajRada1>$pocRada2 or $krajRada2>$pocRada1 or ($krajRada2>$krajRada1 and $pocRada2>$pocRada1) or 
  ($pocRada1>$pocRada2 and $krajRada1>$krajRada2) or
   $pocRada1==$pocRada2 )
     {echo "DA";}
else {echo "NE";}
echo "<br>";
    

/*Zad.13. Za uneti broj ispitati da li je paran ili nije.*/

$broj=33;
$x=$broj/2;
if($x==(int)($x))
    {echo "Broj je paran.";}
else 
    {echo "Broj je neparan.";}
echo "<br>";

/*Zad.14. Za uneti broj ispisati da li je deljiv sa 3 ili ne.*/

$broj1=37;
$x1=$broj1/3;
if($x1==(int)($x1))
    {echo "Broj je deljiv sa 3.";}
else
    {echo "Broj nije deljiv sa 3.";}
echo "<br>";

$x1=48;
if($x1%3==0)
    {echo "Broj je deljiv sa 3.";}
else 
    {echo "Broj nije deljiv sa 3.";}
echo "<br>";

/*Zad.15. Za dva uneta broja, od većeg učitanog broja 
oduzeti manji i rezultat ispisati na ekranu.*/

$broj2=25;
$broj3=65;
if($broj2>$broj3)
    {echo $broj2-$broj3;}
else 
    {echo $broj3-$broj2;}
echo "<br>";

/*Zad.16.* Za uneti broj ispitati da li je on manji ili veći od nule. 
Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, 
a ukoliko je veći od nule ispisati njegov sledbenik.*/

$a=-98;
if($a<=0)
    {$a=$a-1; echo "$a";}
else 
    {$a=$a+1; echo "$a";}
echo "<br>";

/*Zad.17. Za tri uneta broja ispisati koji od njih je najveći, 
koji od njih je srednji, a koji od njih je najmanji.*/

$x=78;
$y=-34;
$z=187;
if($x>=$y and $x>$z)
    {$max=$x;
    if($y>$z)
        {$sred=$y; $min=$z;}
    else {$sred=$z; $min=$y;}
    }
elseif($y>$x and $y>=$z)
    {$max=$y;
    if($x>$z)
        {$sred=$x; $min=$z;}
    else{$sred=$z; $min=$y;}
    }
elseif($z>$y and $z>$x)
    {$max=$z;
    if($y>$x) 
        {$sred=$y; $min=$x;}
    else{$sred=$x; $min=$y;}
    }
echo "Max je: $max, srednji je: $sred, a min je: $min.";
echo "<br>";



    





/*Zad.18. Za učitani broj ispitati da li je ceo.*/

$broj=4.3;
if((int)($broj)==$broj)
    {echo "Broj je ceo";}
else {echo "Broj nije ceo.";}
echo "<br>";


/*Zad.19. Za tri uneta broja ispisati koji od njih je najveći, 
koji od njih je srednji, a koji od nih je najmanji.*/

/*Zad.20. Učitati dva cela broja i ispitati da li je veći od njih paran.*/

$a=45;
$b=67;
if($a>$b)
    {if($a%2==0)
    {echo "Broj $a je veci i paran.";}
    else {echo "Broj $a je veci, ali nije paran.";}}
elseif($b%2==0)
    {echo "Broj $b je veci i paran je.";}
else{echo "Broj $b je veci, ali nije paran.";}
echo "<br>";

/*Zad.21. Naći koji je najveći od tri uneta broja $a, $b i $c.*/

$a=-7;
$b=56;
$c=-12;
if($a>=$b and $a>$c)
    {echo "Najveci je $a";}
elseif($b>$a and $b>=$c)
    {echo "Najveci je $b";}
elseif($c>$b and $c>$a)
    {echo "Najveci je $c";}
else{echo "Jednaki su";}
echo "<br>";
        

/*Zad.22.  Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih
  i veća od 40 stepeni Celzijusovih.*/
$temp=-45;
if($temp<-15 or $temp>40)
    {echo "Ekstremna temperatura!";}
else {echo "Temperatura je u granicama normale.";}
echo "<br>";

/*Zad.23. Ispitati da li je godina prestupna. (Godinu preuzeti sa vremena na Vašem računaru). Prestupna je ona godina koja je deljiva sa 
4, ako nije deljiva sa 100, mada ipak jeste deljiva sa 400.*/

$godPrest=date('Y');
if($godPrest%4==0 and !($godPrest%100==0) and $godPrest%400==00)
        {echo "Godina je prestupna.";}
else{echo "Godina nije prestupna.";}
echo "<br>";

/*Zad.24. Za uneto početno i krajnje radno vreme dva lekara, ispitati koliko 
sati i minuta se njihove smene preklapaju.*/

$pocRada1=8.12;
$krajRada1=16.15;
$pocRada2=12.30;
$krajRada2=20.05;
$prekl=$krajRada1-$pocRada2;
$preklSati=(int)($prekl);
$preklMin=($prekl-(int)($prekl))*60;
echo "Sati preklapanja: $preklSati, a minuti: $preklMin";
echo "<br>";







/*Zad.25. Ispitati koji je najveći od tri uneta broja*/

/*Zad.26. Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. 
Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren*/

/*1.nacin*/
$danRac=date("D");
$vremeRac=date("G");
if($danRac==date("S"))
            {if($vremeRac>=10 and $vremeRac<=18)
                {echo "Butik je otvoren.";}
            else {echo "Butik je zatvoren.";}}
elseif($vremeRac>=9 and $vremeRac<=20)
    {echo "Butik je otvoren.";}
    else{echo "Butik je zatvoren.";}
echo "<br>";

/*2.nacin*/
$danRac=date("D");
$vremeRac=date("G");
if($danRac==date("S") and $vremeRac>=10 and $vremeRac<=18)
                {echo "Butik je otvoren.";}
if($vremeRac>=9 and $vremeRac<=20)
                {echo "Butik je otvoren.";}
else{echo "Butik je zatvoren.";}
echo "<br>";
?>   