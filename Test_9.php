<?php
/*Implementirati klasu Racunar i klasu Laptop. Klasa Laptop treba da
nasleđuje klasu Racunar .
Klasa Racunar ima atribute: sifra, boja dok klasa Laptop pored navedenih
atributa ima i atribut masa .
Za klase Racunar i Laptop kreirati sledeće metode:
➢ konstruktore
➢ getere
➢ setere
○ Šifra računara mora sadržati 4 karaktera. Ukoliko se seteru za
šifru prosledi neki drugačiji unos dodeliti šifru “aaaa”.
○ Boja računara može biti isključivo siva, crna ili bela.
Ukoliko se seteru za boju prosledi neka druga vrednost koja nije
siva, crna ili bela, boju postaviti na bela.
○ Masa laptopa ne sme biti manja od 100. Ukoliko se seteru za
masu prosledi masa manja od 100, dodeliti 100 kao vrednost
mase.
➢ ispise konfiguracija (i za računar i za laptop)
Realizovati sledeće zadatke:
➢ Napraviti niz od najmanje tri objekta tipa Laptop
➢ Napisati funkciju (ili više njih) koja ispisuje sve natprosečno teške
laptopove.
➢ Napisati funkciju koja vraća najčešću boju laptopova. Ukoliko postoje
dve ili tri najučestalije boje, vratiti bilo koju od njih.
➢ Testirati program*/

class Racunar
{
    private $sifra;
    private $boja;
    public function __construct($s, $b)
    {
        $this->setSifra($s);
        $this->setBoja($b);
    }
    public function setSifra($s)
    {   
        if(strlen($s)!=4)
        {
            $this->sifra="aaaa";
        }
        else
        {
            $this->sifra=$s;
        }
    }
    public function setBoja($b)
    {   
        if($b=="siva" OR $b=="crna" OR $b=="bela")
        {
            $this->boja=$b;
        }
        else
        {
            $this->boja="bela";
        }
    }
    public function getSifra()
    {
        return $this->sifra;
    }
    public function getBoja()
    {
        return $this->boja;
    }
    public function IspisiRacunar()
    {
        echo "Sifra racunara: ".$this->getSifra().", boja: ".$this->getBoja()."<br>";
    }
}
class Laptop extends Racunar
{
    private $sifra;
    private $boja;
    private $masa;
    public function __construct($s, $b, $m)
    {
        $this->setSifra($s);
        $this->setBoja($b);
        $this->setMasa($m);
    }
    public function setMasa($m)
    {
        if($m<100)
        {
            $this->masa=100;
        }
        else
        {
            $this->masa=$m;
        }
    }
    public function getMasa()
    {
        return $this->masa;
    }
    public function IspisiLaptop()
    {
        echo "Sifra laptopa je: ".$this->getSifra().", boja laptopa: ".$this->getBoja()." i masa: ".$this->getMasa()."<br>";
    }
}
$lap1=new Laptop("K52F", "crna", 1500);
$lap2=new Laptop("S45G", "crna", 2400);
$lap3=new Laptop("23TYK", "crvena", 95);
$lap=array($lap1, $lap2, $lap3);
$suma=0;
$br=0;
foreach($lap as $l)
{
    $suma=$suma+$l->getMasa();
    $br++;
}
echo "Srednja masa (".$suma.") svih laptopova (".$br.") je: ".$srvr=$suma/$br."<br>";

echo "Natprosecna masa: <br>";
function NatprMasa($lap, $srvr)
{
    foreach($lap as $l)
    {
        if($l->getMasa()>$srvr)
        {
           $l->IspisiLaptop();
        }
    }
    return;
}
NatprMasa($lap, $srvr);

function NajcescaBoja($lap)
{
    $bojaCrna=0;
    $bojaBela=0;
    $bojaSiva=0;
    
    foreach($lap as $l)
    {
        if($l->getBoja()=="crna")
        {
            $bojaCrna++;
        }
        elseif($l->getBoja()=="bela")
        {
            $bojaBela++;
        }
        elseif($l->getBoja()=="siva")
        {
            $bojaSiva++;
        }
        if($bojaCrna>$bojaBela)
        {
            if($bojaCrna>$bojaSiva)
            {
                return $l->getBoja();
            }
        }
        elseif($bojaBela>$bojaSiva)
        {
            return $l->getBoja();
        }
        else
        {
            return $l->getBoja();
        }   
    }
}
echo "Najcesca boja je: ".NajcescaBoja($lap);





?>