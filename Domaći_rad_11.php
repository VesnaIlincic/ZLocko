<?php

/*Napisati funkciju digitron koja prima tri parametra: Prva dva su brojevi, 
a treći je karakter koji predstavlja aritmetičku operaciju (‘+’, ‘-’, ‘*’ ili ‘/’). 
Potrebno je da funkcija izvrši odgovarajuću aritmetičku operaciju nad zadatim brojevima.
Na primer, digitron(5, 8, ‘*’) kao rezultat daje 5 * 8 = 40.*/

$n=5;
$m=8;
$oper="*";
function digitron($n, $m, $oper)
{
    switch($oper)
    {
        case $oper=="+":
            $rez=$n+$m;
            break;
        case $oper=="-":
            $rez=$n-$m;
            break;
        case $oper=="*":
            $rez=$n*$m;
            break;
        case $oper=="/":
            $rez=$n/$m;
            break;
    }
    return $rez;
}
echo $n,$oper,$m."=".digitron($n, $m, $oper);
echo "<br><br>";

?>