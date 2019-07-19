<?php

/*Zad.1. Napisati funkciju suma koja određuje sumu onih brojeva koji su deljivi
sa 3 i nisu deljivi sa 7, u intervalu od n do m. Sumu vratiti pomoću
return naredbe i tek onda je ispisati na ekranu.*/

function suma($n, $m)
{   $s=0;
    for($i=$n;$i<=$m;$i++)
    {
        if($i%3==0 && $i%7!=0)
        {
            $s+=$i;
        }
    }
    return $s;
}
echo suma(3, 7);
echo "<br><br>";

/*Zad.2. Napraviti funkciju ispis kojoj se prosleđuju tri parametra – boja na
engleskom jeziku $color , numerička vrednost za veličinu fonta $font i
numeričku vrednosti za broj iteracija $n . U funkciji iteriranje vršiti $n
puta pomoću while petlje i u okviru HTML paragrafa ispisivati redni
broj iteracije, paragraf obojiti prosleđenom bojom i podesiti mu
prosleđenu veličinu za veličinu fonta.*/

function ispis($color, $font, $n)
{   
    $i=0;
    while($i<=$n)
    {
        $i+=1;
        echo $paragr="<p style='color:$color;font-size:$font'>$i</p>";
    }
    return;
}
ispis("red", 20, 5);
echo "<br><br>";

/*Zad.3. Napraviti funkciju krvnaGrupa koja na osnovu prosleđenog tipa krvne
grupe A+, 0+, B+ ili AB+ u switch naredbi ispisuje krv koje krvne
grupe osoba može da primi, a kojim krvnim grupama krv može da da,
na osnovu sledeće tabele.*/

function krvnaGrupa($grp)
{
    switch($grp)
    {
        case "A+":
            echo "Moze dati krv: A+, AB+, moze primiti krv od : A+, 0+";
            break;
        case "0+":
            echo "Moze dati krv: 0+, A+, B+, AB+, moze priiti krv od: 0+";
            break;
        case "B+":
            echo "Moze dati krv: B+, AB+, moze primiti krv od: B+, 0+";
            break;
        case "AB+":
            echo "Moze dati krv: AB+, moze primiti krv od svih krvnih grupa.";
            break;       
    }
    return;
}
krvnaGrupa("B+");

?>
