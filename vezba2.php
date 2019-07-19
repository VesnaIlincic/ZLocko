<html>
    <head>
        <style>
            img {width:250;}
        </style>
    </head>
    <body>
        <!--input type="submit" onclick="alert('')"-->
        <?php
            $putanja="images/11.jpg";/*Moze i ovako*/
        ?>
    </body>
</html>
<?php
    /*Dat je slika sa sojomputanjomi imenom. Prikazi datu sliku na web stranici*/
    $putanja="images/11.jpg";
    echo "<img src='$putanja'>";
    echo "<br>";
    /* Za radnika je poznato :
        -broj radnih sati u mesecu
        -cena rada po satu
        -procenat odbijanja na osnovu doprinosa
       Odrediti bruto i neto dohodak radnika*/
       $brojSati=160;
       $cena=5;
       $procenat=65;
       $bruto=$brojSati*$cena;
       $neto=$bruto-$bruto*$procenat/100;
       echo "<p>Bruto zarada: $bruto &euro;, Neto zarada: $neto &euro;.</p>";
       echo "<br>";

    /*Broj minuta pretvoriti u sate i minute */
        $brojMinuta=63;
        $sati=(int)($brojMinuta/60);
        $minuti=$brojMinuta%60; /*Za racunanje ostataka koristi se % */
        echo "<p>Broj sati: $sati, broj minuta: $minuti.</p>";
        echo "<br>";

    /*Ako je vrednost neke robe x dinara, odrediti najmanju kolicinu novcanica od 500 din, 
    100din, 10din i 1din kojima se moze platti data roba. */
        $x=2399;
        $petsto=(int)($x/500);
        $x=$x%500;
        $sto=(int)($x/100);
        $x=$x%100;
        $deset=(int)($x/10);
        $dinar=$x%10;
        echo "<p>Petsto: $petsto, Sto: $sto, Deset: $deset, Dinar: $dinar.</p>";
        echo "<br>";

        $a=5;
        $b=3;
        if($a>$b)
        {echo "a je vece od b";}
        echo "<br>";

        $a=5;
        $b=6;
        if($a==$b)
        {echo "a je jednako b";}
        echo "<br>";

        $a1=3;
        $b1=7;
        if($a!=$b)
        {echo "a je razlicito od b";}
        echo "<br>";

        /*Zad 1*/
        $a2=8;
        $b2=4;
        if($a<$b)
        {echo "a je manje od b";}
        else
        {echo "a je vece od b";}
        echo "<br>";

        /*Zad 2*/
        $t=-67;
        if($t<0)
        {echo "temp je u minusu";}
        else
        {echo "temp je u plusu";}
        echo "<br>";

        /*Zad 3*/
        $pol="zenski";
        if($pol=="muski")
        {echo "pol je muski";}
        else
        {echo "<img src='images/1263759293_030-morita21.jpg'>";}
        echo "<br>";

        /*Zad 4*/
        $racunar=date('A');
        if($racunar=="AM")
        {echo "trenutno je prepodne";}
        else
        {echo "trenutno je poslepodne";}
        echo "<br>";

        /*Zad 5*/
        $godRac=date('Y');
        $godRodj=1971;
        if($godRac-$godRodj>=18)
        {echo "osoba je punoletna";}
        else
        {echo "osoba je maloletna";}
        echo "<br>";

        /*Zad 6*/
        $x=12;
        $y=16;
        $z=35;
        if($x>$y)
            {if($x>$z)
            {echo "x je najveci broj";}
            else
            {echo "z je najveci broj";}}
        elseif($y>$z)
        {echo "y je najveci broj";}
        else
        {echo "z je najveci broj";}
        echo "<br>";
        
        /*drugi nacin zad 6*/
        $a5=12;
        $b5=9;
        $c5=5;
        $max=$a5;
        if($max<$b5)
            {$max=$b5;}
        if($max<$c5)
            {$max=$c5;}
            echo $max;
            echo "<br>";

        /*Zad 7*/
        $poeni=76;
        if($poeni<=100)
            {if($poeni>=90)
                {echo "10";}}
        elseif($poeni<90)
            {if($poeni>=80)
                {echo "9";}}
        elseif($poeni<80)
            {if($poeni>=70)
                {echo "8";}}
        elseif($poeni<70)
            {if($poeni>=60)
                {echo "7";}}
        elseif($poeni<60)
            {if($poeni>=50)
                {echo "6";}}
        else 
            {echo "5";}
            echo "<br>";

        /*Zad 8*/
        $danRac=date('Day');
        if($danRac==date('S'))
            {echo "Vikend";}
        else
            {echo "Radni dan";}
        echo "<br>";


?>
