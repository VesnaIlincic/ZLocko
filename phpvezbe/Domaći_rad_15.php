<?php

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

?>