<?php

class Film
{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;
    public function __construct($n, $r, $o, $g)
    {
        $this->naslov=$n;
        $this->reziser=$r;
        $this->ocena=$o;
        if($g>1800)
        {
            $this->godinaIzdanja=$g;
        }
        else
        {
            $this->godinaIzdanja="Filmovi tada nisu snimani!<br>"; 
        }   
    }
    public function setNaslov($n)
    {
        return $this->naslov;
    }
    public function setReziser($r)
    {
        return $this->reziser;
    }
    public function setOcena($o)
    {
        return $this->ocena;
    }
    public function setGodinaIzdanja($g)
    {
        return $this->godinaIzdanja;
    }
    public function getNaslov()
    {
        return $this->naslov;
    }
    public function getReziser()
    {
        return $this->reziser;
    }
    public function getOcena()
    {
        return $this->ocena;
    }
    public function getGodinaIzdanja()
    {
        return $this->godinaIzdanja;
    }
    public function stampaj()
    {
        echo "Film sa naslovom: ".$this->getNaslov()."<br>";
        echo "Reziser filma: ".$this->getReziser()."<br>";
        echo "Ocena: ".$this->getOcena()."<br>";
        if($this->getGodinaIzdanja()>=2000)
        {
            echo "Godina izdanja filma: ".$this->getGodinaIzdanja()."<br><br>";
        }
    }
}
$film=array();
$film[1]=new Film("Titanic", "James Camerun", 2, 1997);
$film[2]=new Film("Maratonci trce...", "Zoran Shijan", 10, 1980);
$film[3]=new Film("Vruc vetar", "Aleksandar Djordjevic", 9, 1980);
$film[1]->stampaj();
$film[2]->stampaj();
$film[3]->Stampaj();
$sumaOc=0;
$maxOc=1;
$br=0;
for($i=1;$i<=3;$i++)
{
    $sumaOc+=$film[$i]->getOcena();
    if($maxOc<=$film[$i]->getOcena())
    {
        $maxOc=$film[$i]->getOcena();
        $br=$i;
    }
}
echo "Prosecna ocena svih filmova: ".$prosOc=$sumaOc/3.;
echo "<br>";
echo "Najbolje ocenjeni film je: ".$film[$br]->getNaslov();
?>