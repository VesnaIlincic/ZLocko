<?php
/*Kreirati klasu Autobus koja ima podatke o registarskom broju autobusa i o broju sedišta u autobusu.
Napraviti konstruktor kome se prosleđujeu odgovarajuće vrednosti.
Napraviti odgovarajuće getere i setere.
Napraviti metodu koja ispisuje podatke o autobusu.
Napraviti niz autobusa.
Napraviti funkciju ukupnoSedista kojoj se prosleđuje niz autobusa a koja određuje i 
vraća koliko ukupno sedišta sadrže svi autobusi koji se nalaze u nizu autobusa.
Napraviti funkciju maksSedista koja ispisuje podatke o autobusu koji ima najveći broj sedišta.
Napraviti funkciju kojoj se prosleđuje broj ljudi i niz autobusa, a funkcija vraća true 
ukoliko je moguće toliko ljudi smestiti u autobuse, u suprotnom vraća false.*/

class Autobus
{
    private $regbr;
    private $brsed;
    public function __construct($r, $b)
    {
        $this->regbr=$r;
        $this->brsed=$b;
    }
    public function setRegbr($r)
    {
        $this->regbr=$r;
    }
    public function setBrsed($b)
    {
        $this->brsed=$b;
    }
    public function getRegbr()
    {
        return $this->regbr;
    }
    public function getBrsed()
    {
        return $this->brsed;
    }
    public function Stampa()
    {
        echo "Autobus je registarskog broja: ".$this->getRegbr()." i broja sedista: ".$this->getBrsed()."<br>";
    }
}

$autobus1=new Autobus("NI-86786", 56);$autobus1->Stampa();
$autobus2=new Autobus("BG-6765", 66);$autobus2->Stampa();
$autobus3=new Autobus("SU-7759", 88);$autobus3->Stampa();
$autobus4=new Autobus("AL-7346", 24);$autobus4->Stampa();
$autobus=array($autobus1, $autobus2, $autobus3, $autobus4);

function ukupnoSedista($autobus)
{
    $sumased=0;
    foreach($autobus as $bus)
    {
        $sumased+=$bus->getBrsed();
    }
    return $sumased;
}
echo "Ukupno sedista svih autobusa: ".ukupnoSedista($autobus)."<br>";

function Smestanje($brljudi, $autobus)
{
    if(ukupnoSedista($autobus)>=$brljudi)
    {
        return true;
    }
    else
    {
        return false;
    }
}
$brljudi=321;
echo "Broj ljudi koji treba da se smesti u autobuse: ".$brljudi;
echo "<br>";
if(Smestanje($brljudi, $autobus)==0)
{
    echo "Ovoliki broj ljudi se ne moze smestiti u ove autobuse.";
}
else
{
    echo "Ovoliki broj ljudi se moze smestiti u ove autobuse.";
}







?>