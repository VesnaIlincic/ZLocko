<?php
/*Kreirati klasu ZooZivotinja koja od atributa sadrži: ime , tezina , brgodina .
Iz ove klase izvesti klasu Sisar koja od dodatnih atributa sadrži: pol , visina.
Za klase ZooZivotinja i Sisar kreirati sledeće metode:
➢ Konstruktore,
➢ Getere,
➢ Setere,
○ Vrednosti za težinu, visinu i broj godina ne smeju biti manje od
0. Ukoliko se u nekom seteru prosledi vrednost manja od 0,
vrednost odgovarajućeg atributa podesiti na 0.
○ Pol sme biti jedino “M” ili “Z”. Ukoliko se u seteru prosledi neka
druga vrednost, postaviti pol na “Z”.
➢ Metode za ispis svih atributa životinje.
Za klasu Sisar kreirati sledeću metodu:
➢ Metodu koja vraća kalorijske potrebe sisara. Kalorijske potrebe
računaju se po formuli:
○ Za mužjake:
13.397 * tezina + 4.799 * visina − 5.677 * brgodina + 88.362 ,
○ Za ženke:
9.247 * tezina + 3.098 * visina − 4.330 * brgodina + 447.593 .
Realizovati sledeće zadatke:
➢ Napraviti niz od najmanje tri sisara.
➢ Napisati funkciju (ili više njih) koja ispisuje sve ženke koje u svom
nazivu sadrže reč “tigar”.
➢ Napisati funkciju kojoj se prosleđuje ceo broj (kalorijska vrednost), a
koja proverava da li postoji neka životinja kojoj neće biti dovoljna
zadata kalorijska vrednosti.
➢ Testirati program.*/

class ZooZivotinja
{
    private $ime;
    private $tezina;
    private $brgodina;
    public function __construct($i, $t, $brg)
    {
        $this->ime=$i;
        $this->tezina=$t;
        $this->brgodina=$brg;
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setTezina($t)
    {
        if($t<0)
        {
            $this->tezina=0;
        }
        else
        {
            $this->tezina=$t;
        }
    }
    public function setBrGodina($brg)
    {
        if($brg<0)
        {
            $this->brgodina=0;
        }
        else
        {
            $this->brgodina=$brg;
        }
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getTezina()
    {
        return $this->tezina;
    }
    public function getBrGodina()
    {
        return $this->brgodina;
    }
    public function IspisZivotinja()
    {
        echo "Spisak svih zivotinja: <br>";
        echo "Ime: ".$this->getIme.", ".", tezina: ".$this->tezina.", broj godina: ".$this->brgodina.".<br>";
    }
}
class Sisar extends ZooZivotinja
{
    private $pol;
    private $visina;
    public function __construct($i, $t, $brg, $p, $v)
    {
        $this->setIme($i);
        $this->setTezina($t);
        $this->setBrGodina($brg);
        $this->setPol($p);
        $this->setVisina($v);
    }
    public function setPol($p)
    {
        if($p=="z" || $p=="m")
        {
            $this->pol=$p;
        }
        else
        {
            $this->pol="z";
        }
    }
    public function setVisina($v)
    {
        if($v<0)
        {
            $this->visina=0;
        }
        else
        {
            $this->visina=$v;
        }
    }
    public function getPol()
    {
        return $this->pol;
    }
    public function getVisina()
    {
        return $this->visina;
    }
    public function KalSisari()
    {
        if($this->getPol()=="m")
        {
            $kal=(13.397*$this->getTezina())+(4.799*$this->getVisina())-(5.677*$this->getBrGodina())+88.362; 
        }
        else
        {
            $kal=(9.247*$this->getTezina())+(3.098*$this->getVisina())-(4.330*$this->getBrGodina())+447.593;
        }
        return $kal;
    }
}

$sisar1=new Sisar("svinja", 230, 3, "z", 78);
$sisar2=new Sisar("bik", 1500, 7, "m", 180);
$sisar3=new Sisar("koza", 65, 4, "z", 80);
$sisar4=new Sisar("ovan", 90, 5, "m", 95);
$sisar5=new Sisar("tigar", 350, 6, "z", 120);
$sisari=array($sisar1, $sisar2, $sisar3, $sisar4, $sisar5);

function Tigrice($sisari)
{
    foreach($sisari as $sis)
    {
        if($sis->getPol()=="z" && $sis->getIme()=="tigar")
        {
            echo "Zenka sisar imena tigar, tezine: ".$sis->getTezina()." kg, starosti:  ".$sis->getBrGodina()." godina, pola: ".$sis->getPol()." i visine: ".$sis->getVisina()." cm.<br>";
        }
    }
}
Tigrice($sisari);
echo "Da li navedeni sisari imaju dovoljno kalorija za ishranu?<br>";
function Dovoljno($sisari, $kal1)
{
    foreach($sisari as $sis)
    {
        if($kal1<$sis->KalSisari())
        {
            echo $sis->getIme()." - nije dovoljno kalorija.<br>";
        }
        else
        {
            echo $sis->getIme()." - dovoljno kalorija.<br>";
        }
    }
}
Dovoljno($sisari, 23467);












?>