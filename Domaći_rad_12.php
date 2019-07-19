<?php

/*Zad.1. Napisati funkciju koja ispisuje stavku liste <li>. 
Kao prvi parametar  prima boju teksta, kao drugi parametar veličinu teksta u toj stavci liste, 
a kao treći parametar sam tekst koji se ispisuje. U telu HTML dokumenta formirati jednu neuređenu listu i 
pozvati tri puta funkciju za ispisivanje tri stavke liste. Za boje, veličinu i tekst uzeti proizvoljne veličine.*/

function Lista($bojatxt, $veltxt, $txt)
{
    echo $txt="<li style='color:$bojatxt;font-size:$veltxt'>Tralalala</li>";
}
Lista("yellow", 30, "Tralalala")."<br>";
Lista("red", 24, "Tralalala")."<br>";
Lista("green", 18, "Tralalala")."<br>";
echo "<br>";

/*Zad.2. Napisati funkciju koja ispisuje ćeliju tabele <td>. Kao prvi parametar prima logičku promenljivu 
da li je tekst u ćeliji iskošen ili ne, a kao drugi parametar tekst koji se prikazuje unutar te ćelije. 
U telu HTML dokumenta kreirati tabelu dimenzija 2 x 3, a unutar nje pozvati šest puta funkciju sa 
proizvoljnim tekstom.Potrebno je da tekst u ćelijama naizmenično bude iskošen.*/

function Tabela($isktxt, $textTD)
{
    if($isktxt==1)
    {
        echo $textTD="<i>Tralalala</i>";
    }
    elseif($isktxt==0)
    {
        echo $textTD="Tralalala";
    }
    return;
}

?>

<html>
    <head>
        <style>
            table{border:1px solid;font-size:20px;width:500px;height:100px;text-align:center;}
            td{border:1px solid;}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td><?php
                Tabela(0, "Tralalala");
                ?></td>
                <td><?php
                Tabela(1, "Tralalala");
                ?></td>
                <td><?php
                Tabela(0, "Tralalala");
                ?></td>
            </tr>
            <tr>
                <td><?php
                Tabela(1, "Tralalala");
                ?></td>
                <td><?php
                Tabela(0, "Tralalala");
                ?></td>
                <td><?php
                Tabela(1, "Tralalala");
                ?></td>
            </tr>
        </table>
    </body>
</html>

