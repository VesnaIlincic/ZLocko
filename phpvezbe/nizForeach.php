<?php
$niz=array(1,2,3,4,5);
foreach($niz as $i)
{
    echo "$i <br>";
}
/*Zad.4. Odrediti zbir elemenata celobrojnog niza.*/

$niz1=array(-2, 4, -6, 8, 34);
$suma=0;
foreach($niz1 as $elem)
{
    $suma+=$elem;
}
echo $suma;
echo "<br>";

/*Zad.5. Odrediti maksimalnu vrednost u celobrojnom nizu.*/

$max=$niz1[0];
for($i=1;$i<count($niz1);$i++)
{
    if($niz1[$i]>$max)
    {
        $max=$niz1[$i];
    }
}
echo $max;
echo "<br>";

/*Zad.6. Odrediti indeks najvećeg elementa celobrojnog niza.*/

$niz2=array(-3, 8, -34, 25, 6);
$max1=$niz2[0];
$len=count($niz2);
for($i=1;$i<$len;$i++)
{
    if($niz2[$i]>$max1)
    {
        $max1=$niz2[$i];
        $index=$i;
    }
}
echo "$max1 <br> $index <br>";

/*Zad.7. Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.*/
$suma1=0;
foreach($niz2 as $elem1)
{
    $suma1+=$elem1;
}
$srvr=$suma1/$len;
$br=0;
foreach($niz2 as $elem1)
{
    if($srvr<$elem1)
    {
        $br+=1;
    }
}
echo "$srvr <br> $br <br>";

/*Zad.8. Izračunati zbir pozitivnih elemenata celobrojnog niza.*/

$suma2=0;
$niz2=array(-3, 8, -34, 25, 6);
foreach($niz2 as $elem1)
{
    if($elem1>=0)
    {
        $suma2+=$elem1;
    }
}
echo "$suma2 <br>";

/*Zad.9. Odrediti broj parnih elemenata u celobrojnom nizu.*/

$br1=0;
$niz2=array(-3, 8, -34, 25, 6);
foreach($niz2 as $elem1)
{
    if($elem1%2==0)
    {
        $br1+=1;
    }
}
echo "$br1 <br>";

/*Zad.10. Izračunati sumu elemenata u nizu sa parnim indeksom.*/

$suma3=0;
$niz2=array(-3, 8, -34, 25, 6);
$len=count($niz2);
for($i=0;$i<$len;$i+=2)
{
    $suma3+=$niz2[$i];
}
echo "$suma3 <br>";

/*Zad.11. Promeniti znak svakom elementu celobrojnog niza.*/

$niz2=array(-3, 8, -34, 25, 6);
$len=count($niz2);
for($i=0;$i<$len-1;$i++)
{
    $niz2[$i]*=-1;
    echo "$niz2[$i] <br>";
}
/*Zad.12. Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.*/

$niz2=array(-3, 8, -34, 25, 6);
$len=count($niz2);
for($i=1;$i<$len;$i+=2)
{
    $niz2[$i]*=-1;
    echo "$niz2[$i] <br>";
}

/*Zad.13. Odrediti broj parnih elemenata sa neparnim indeksom.*/

$niz2=array(-3, 8, -34, 25, 6);
$len=count($niz2);
$br2=0;
for($i=1;$i<$len-1;$i+=2)
{
    if($niz2[$i]%2==0)
    $br2+=1;
}
echo "$br2 <br>";

/*Zad.14. Ispisati dužinu svakog elementa u nizu stringova.*/

$niz3=array("jabuka", "kruska", "jagoda", "tresnja", "breskva", "kajsija");
foreach($niz3 as $elem3)
{
    $len3=strlen($elem3);
    echo "$len3 <br>";
}

/*Zad.15. Odrediti element u nizu stringova sa najvećom dužinom.*/

$niz3=array("jabuka", "kruska", "jagoda", "tresnja", "breskva", "kajsija");
$len3=count($niz3);
$maxd=strlen($niz3[0]);
for($i=1;$i<$len3-1;$i++)
{
    if($maxd<=strlen($niz3[$i]))
    {
        $maxd=strlen($niz3[$i]);
    }
}
echo "$maxd <br>";

/*Zad.16. Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.*/

$niz3=array("jabuka", "kruska", "jagoda", "tresnja", "breskva", "kajsija");
$len3=count($niz3);
$br3=0;
$ukduz=0;
for($i=0;$i<$len3;$i++)
{
    $duz[$i]=strlen($niz3[$i]);
    $ukduz+=$duz[$i];
}
$prduz=$ukduz/$len3;
for($i=0;$i<$len3;$i++)
{
    if($duz[$i]>=$prduz)
    {
        $br3+=1;
    }
}
echo "$br3 <br>";

/*Zad.17. Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.*/

$niz3=array("jabuka", "kruska", "jagoda", "tresnja", "breskva", "kajsija");
$len3=count($niz3);
$br4=0;
$sadrA=substr("a", 0);
foreach($niz3 as $elem3)
{
    if($sadrA=="a")
    {
        $br4+=1;
    }
}
echo "$br4 <br>";

/*Zad.18. Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'.*/

//1.nacin
$niz3=array("jabuka", "kruska", "jagoda", "tresnja", "breskva", "kajsija");
$len3=count($niz3);
$br5=0;
foreach($niz3 as $elem3) 
{
    $pocA=substr($elem3, 0, 1);
    $poca=substr($elem3, 0, 1);
    if($pocA=="A"||$poca=="a")
    {
        $br5+=1;
    }
}
echo "Broj stringova koi pocinju na slovo a ili A: $br5 <br>";

//2.nacin
foreach($niz3 as $elem3)
{
    if(strpos($elem3,'a')===0 || strpos($elem3, 'A')===0)
    {
        $br5++;
    }
}
echo "Broj stringova koi pocinju na slovo a ili A: $br5";

/*Zad.19. Na osnovu celobrojnog niza $a[0], $a[1], … formirati niz $b[0], $b[1], ... 
koji sadrži samo pozitivne brojeve.*/

$a=array(-2, 4, -67, 34, -34, -23);
$lena=count($a);
for($i=0;$i<$lena-1;$i++)
{
    if($a[$i]>=0)
    {
        $b[$i]=$a[$i];
        echo "$b[$i] <br>";
    } 
}
echo "<br>";

/*Zad.20. Dati su nizovi $a[0], $a[1], …, $a[n - 1] i  $b[0], $b[1], …, $b[n - 1]. 
Formirati niz $c[0], $c[1], …, $c[2n – 1] čiji su elementi $a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n - 1].*/

$a1=array(2, -45, 76, 78, -89);
$b1=array(32, -16, 17, -77, 123);
$n=count($a1);
$c=array();
for($i=0;$i<$n;$i++)
{
    $c[2*$i]=$a1[$i];
    $c[2*$i+1]=$b1[$i];
}
function stampajNiz($c)
{
    foreach($c as $elem4)
    {
        echo $elem4."<br>";
    }
    echo "<br>";
}
stampajNiz($c);
echo "<br>";

/*Zad.21. Dati su nizovi $a[0], $a[1], …, $a[n - 1] i  $b[0], $b[1], …, $b[n - 1]. 
Formirati niz $c[0], $c[1], …, $c[n – 1] čiji su elementi $a[0] * $b[0], $a[1] * $b[1], …, $a[n – 1] * $b[n – 1].*/

$a1=array(2, -45, 76, 78, -89);
$b1=array(32, -16, 17, -77, 123);
$n=count($a1);
$c1=array();
for($i=0;$i<$n;$i++)
{
    $c1[$i]=$a1[$i]*$b1[$i];
}
function stampajNiz1($c1)
{
    foreach($c1 as $elem4)
    {
        echo $elem4."<br>";
    }
    echo "<br>";
}
stampajNiz1($c1);
echo "<br>";




/*Zad.22. Na osnovu niza $a[0], $a[1], …, $a[2n - 1] formirati niz $b[0], $b[1], …, $b[n - 1] 
po formuli: b[i]=(a[i]+a[2n-1-i])/2 */

$a2=array(2, -45, 76, 78);
$n=count($a2)/2;
for($i=0;$i<$n;$i++)
{
    $b2[$i]=($a2[$i]+$a2[2*$n-1-$i])/2;
}
function stampajNiz2($b2)
{
    foreach($b2 as $elem5)
    {
        echo $elem5."<br>";
    }
    echo "<br>";
}
stampajNiz2($b2);
echo "<br>";

/*Zad. Dat je niz elemenata u obliku MarkaAuta/Godište.
Ispisati sve automobile, kao i njihova godišta.
Ispisati automobile koji su stariji od 10 godina.
Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.*/

$auto=array("OpelVektra"=>1980, "OpelCorsa"=>2001, "Citroen4"=>2010, "Punto"=>2009, "Citroen3"=>2007);
foreach($auto as $vrsta=>$vrsta_value)
{
    echo " Vrsta: ".$vrsta.", godiste: ".$vrsta_value."<br>";
}
foreach($auto as $vrsta=>$vrsta_value)
{
$datum=date('Y');
    if($datum-$vrsta_value>=10)
    {
        echo " Auta starija od 10  god: ".$vrsta."<br>";
    }
    if(substr($vrsta, 0, 4)=="Opel" && $datum-$vrsta_value<=19)
    {
        echo " Opel auta proizvedena posle 2000.: ".$vrsta."<br>";
    }
}
echo "<br><br>";

/*Zad. Dat je niz elemenata u obliku ImeOsobe/Visina.*/

$osobe=array("Vesna"=>165, "Milena"=>168, "Jelena"=>176, "Darko"=>189, "Veselin"=>177);

/*Zad. Ispisati sve osobe sa njihovim visinama.*/

foreach($osobe as $vis=>$vis_value)
{
    echo "Ime osobe: $vis, visine: $vis_value<br>";
}

/*Zad. Ispisati sve natprosečno visoke osobe.*/

foreach($osobe as $vis=>$vis_value)
{
    if($vis_value>=185)
    {
        echo "Natprosecno visoke osobe su: $vis, visine: $vis_value<br>";
    }
}

/*Zad. Ispisati sve osobe koje imaju maksimalnu visinu.*/

$maxvis=0;
foreach($osobe as $vis=>$vis_value)
{
    if($maxvis<$vis_value)
    {
        $maxvis=$vis_value;
    }
}
echo "Najveca visina je: $maxvis <br>";

foreach($osobe as $vis=>$vis_value)
{
    if($maxvis==$vis_value)
    {
        echo "Osoba $vis visoka $vis_value cm <br>";
        break;
    }
}

/*Zad. Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.*/














?>