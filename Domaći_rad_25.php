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
    }
}
$osoba1=new Osoba("Mirko", "Prpa", 1971);
$osoba2=new Osoba("Slavko", "Gacik", 1970);
$osoba1->IspisiOsoba();
$osoba2->IspisiOsoba();
echo "<br>";

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
        $this->setPozicija($poz);
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
        echo "<br>Ime: ".$this->getIme().", prezime: ".$this->getPrezime().", godine rodjenja: ".$this->getGodRodj().", plata: ".$this->getPlata().", pozicija: ".$this->getPozicija().".";
    }
}
$zaposleni1=new Zaposleni("Ana", "Antic", 1973, 60000, "montazer slike");
$zaposleni2=new Zaposleni("Slavko", "Peric", 1977, 35000, "ekonomista");
$zaposleni3=new Zaposleni("Petar", "Lazic", 1975, 50000, "pravnik");
$zaposleni4=new Zaposleni("Marija", "Braunstain", 1965, 125000, "dizajner");
$zaposleni=array($zaposleni1, $zaposleni2, $zaposleni3, $zaposleni4);

foreach($zaposleni as $zap)
{
    if($zap->getPozicija()=="ekonomista")
    {   
        
        echo "(zaposlen u ekonomskom sektoru)".$zap->IspisiZaposleni();
    }
    else
    {
        $zap->IspisiZaposleni();
    }
}






?>