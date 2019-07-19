<?php
/* Za unetu cenu robe i kolicinu novca koju je kupac dao, ispisati koliki kusur treba kasirka da vrati kupcu.*/
	$cenaProizvoda=1500;
	$kupac=2000;
	$kusur=$kupac-$cenaProizvoda;
	echo "kusur:".$kusur;
	echo "<br>";

	$cena="1500";
	$kupac="2000";
	echo $kusur;
	echo "<br>";

	$cena1="devojka";
	$kupac1="zena";
	$kusur1=$kupac1-$cena1;
	echo $kusur1;
	echo "<br>";

	/*Konverzija valuta (din>euro) Kurs: 1e=117.81*/
	$dinari=20000;
	$euri=$dinari/117.81;
	echo "euri=".$euri;
	echo "<br>";

	/*Konverzija iz eur u dol ako je poznata dinarska vrednost 1e=117.81 1$=104.86 */
	$euri=250;
	$dinari=$euri*117.81;;
	$dolari=$dinari/104.86;
	echo "eura=".$dolari." dolara";
	echo "<br>";

	$celzius=32;
	$farenhajt=$celzius*9;
	$farenhajt=$farenhajt/5;
	$farenhajt=$farenhajt+32;
	echo $farenhajt;
	/*Isto je kao i $farenhajt=$celzius*9/5+32;*/
	echo "<br>";

	$farenhajt1=234;
	$celzius1=($farenhajt1-32)*5/9;
	echo $celzius;
	echo "<br>";

	/*Za preuzeto vreme u satima i minutima, izracunati koliko je minuta proslo od ponoci*/
	$sati=13;
	$minuta=42;
	$ukupnoMinuta=$sati*60+$minuta;
	echo $ukupnoMinuta;
	echo "<br>";

	/*Druga varijanta:trenutno vreme*/
	/*date() vraca trenutni datum i vreme u odredjenom formatu 
	  format="G" - 24h vreme (0-23)
	  format="g" 12h vreme (0-11)
	  format="H" 24h vreme (00-23)
	  format="h" 12h vreme (00-11)
	  format="i" 1h vreme (00-59)*/
	$sati=date("G");
	$minuti=date("i");
	$ukupnoMinuta=$sati*60+$minuti;
	echo $ukupnoMinuta;
	echo "<br>";







?>


