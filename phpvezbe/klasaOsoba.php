<?php
class Osoba
{
    private $ime;
    private $prezime;
    private $godrodj;
    public function __construct($i, $p, $g)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setGodRodj($g);
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setPrezime($p)
    {
        $this->prezime=$p;
    }
    public function setGodRodj($g)
    {
        $this->godrodj=$g;
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }
    public function getGodRodj()
    {
        return $this->godrodj;
    }
    public function IspisiOsoba()
    {
        echo "Ime: ".$this->getIme().", prezime: ".$this->getPrezime().", godine rodjenja: ".$this->getGodRodj().".<br>";
        /*echo "Ime: ".$this->ime.", prezime: ".$this->prezime.", godine rodjenja: ".$this->godrodj.".<br>";*/
    }
}
$osoba1=new Osoba("Mirko", "Prpa", 1971);
$osoba2=new Osoba("Slavko", "Gacik", 1970);
$osoba1->IspisiOsoba();
$osoba2->IspisiOsoba();

class Zaposleni extends Osoba
{
    private $plata;
    private $pozicija;
    public function __construct($i, $p, $g, $pl, $poz)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setGodRodj($g);
        $this->setPlata($pl);
        $this->setPozicija($poz);//parent::__construct($ime, $prezime, $godrodj);$this->setPlata($pl);$this->setPozicija($poz)
    }
    public function setPlata($pl)
    {
        $this->plata=$pl;
    }
    public function setPozicija($poz)
    {
        $this->pozicija=$poz;
    }
    public function getPlata()
    {
        return $this->plata;
    }
    public function getPozicija()
    {
        return $this->pozicija;
    }
    public function IspisiZaposleni()
    {
        echo "Ime: ".$this->getIme().", prezime: ".$this->getPrezime().", godine rodjenja: ".$this->getGodRodj().", plata: ".$this->getPlata().", pozicija: ".$this->getPozicija().".<br>";
    }
}
$zaposleni1=new Zaposleni("Ana", "Antic", 1973, 60000, "kontrolor");
$zaposleni2=new Zaposleni("Slavko", "Peric", 1977, 35000, "radnik na traci");
$zaposleni3=new Zaposleni("Petar", "Lazic", 1975, 50000, "sef radnika");
$zaposleni1->IspisiZaposleni();
$zaposleni2->IspisiZaposleni();
$zaposleni3->IspisiZaposleni();
$zaposleni=array($zaposleni1, $zaposleni2, $zaposleni3);

function prosecnaPlata($zaposleni)
{
    $suma=0;
    $br=0;
    foreach($zaposleni as $zap)
    {
        $suma+=$zap->getPlata();
        $br++;
    }
    return $prospl=$suma/$br;
}
echo "Prosecna plata zaposlenih je: ".prosecnaPlata($zaposleni).".<br>";

function natprosecnaPlata($zaposleni, $zap)
{   
    $prosek=prosecnaPlata($zaposleni);
    foreach($zaposleni as $zap)
    {
        if($zap->getPlata()>$prosek)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
if(natprosecnaPlata($zaposleni, $zaposleni2)==true)
{
    echo "Natprosecna plata.<br><br>";
}
else
{
    echo "Plata ispod proseka.<br><br>";
}

class Kosarkas extends Osoba 
{
    private $gradrodj;
    private $visina;
    private $tezina;
    private $br_dres;
    private $br_poena;
    private $br_utakmica;
    private $pozicija;
    private $reprezentacija;
    public function __construct($i, $p, $g, $gr, $v, $t, $br_d, $br_p, $br_u, $poz, $repr)
    {
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setGodRodj($g);
        $this->setGradRodj($gr);
        $this->setVisina($v);
        $this->setTezina($t);
        $this->setBrDres($br_d);
        $this->setBrPoena($br_p);
        $this->setBrUtakmica($br_u);
        $this->setPozicija($poz);
        $this->setReprezentacija($repr);
    }
    public function setGradRodj($gr)
    {
        $this->gradrodj=$gr;
    }
    public function setVisina($v)
    {
        $this->visina=$v;
    }
    public function setTezina($t)
    {
        $this->tezina=$t;
    }
    public function setBrDres($br_d)
    {
        $this->br_dres=$br_d;
    }
    public function setBrPoena($br_p)
    {
        $this->br_poena=$br_p;
    }
    public function setBrUtakmica($br_u)
    {
        $this->br_utakmica=$br_u;
    }
    public function setPozicija($poz)
    {
        $this->pozicija=$poz;
    }
    public function setReprezentacija($repr)
    {
        $this->reprezentacija=$repr;
    }
    public function getGradRodj()
    {
        return $this->gradrodj;
    }
    public function getVisina()
    {
        return $this->visina;
    }
    public function getTezina()
    {
        return $this->tezina;
    }
    public function getBrDres()
    {
        return $this->br_dres;
    }
    public function getBrPoena()
    {
        return $this->br_poena;
    }
    public function getBrUtakmica()
    {
        return $this->br_utakmica;
    }
    public function getPozicija()
    {
        return $this->pozicija;
    }
    public function getReprezentacija()
    {
        return $this->reprezentacija;
    }
    public function IspisiKosarkasa()
    {
        echo $this->getIme().", ".$this->getPrezime(),", ".$this->getGodRodj().", ".$this->getGradRodj().", ".$this->getVisina().", ".$this->getTezina().", ".$this->getBrDres().", ".$this->getBrPoena().", ".$this->getBrUtakmica().", ".$this->getPozicija().", ".$this->getReprezentacija().".<br>";
    }
}

$kosarkas1=new Kosarkas("Boban", "Marjanovic", 1988, "Zajecar", 221, 132, 5, 1766, 149, "centar", "da");
$kosarkas2=new Kosarkas("Vlade", "Divac", 1968, "Prijepolje", 216, 110, 34, 1345, 145, "centar", "da");
$kosarkas3=new Kosarkas("Aleksandar", "Djordjevic", 1967, "Beograd", 188, 90, 45, 1250, 144, "plejmejker", "da");
$kosarkas=array($kosarkas1, $kosarkas2, $kosarkas3);

function ProsPoeni($kosarkas)
{   
    foreach($kosarkas as $kos)
    {
        echo $prosp=$kos->getBrPoena()/$kos->getBrUtakmica()."<br>";
    }
    return $prosp;  
}
ProsPoeni($kosarkas);
echo "<br>";

function TeskiCentar($kos)
{   
        if($kos->getPozicija()==5 && $kos->getVisina()>=210 && $kos->getTezina()>=110)
        {
            return "Teski centar!";
        }
       
}


foreach($kosarkas as $kos)
{
    $kos->ispisiKosarkasa();
    echo "<p style='color:red'>".TeskiCentar($kos)."</p>";    
}





?>