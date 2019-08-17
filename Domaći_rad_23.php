<?php

/*1. Napraviti klasu Knjiga koja od privatnih polja sadrži naslov, autor, godIzdanja, 
brojStrana i cena (podrazumevana vrednost 2500). Od javnih metoda sadrži:
●	Konstruktor koji postavlja sva polja,
●	Metodu koja štampa sve podatke o knjizi,
●	Metodu koja ispituje da li je knjiga debela (broj strana veći od 600),
●	Metodu koja ispituje da li je knjiga skupa (cena je veća od 8000),
●	Metodu koja ispituje da li je ime autora dugačko (broj karaktera veći od 18).
Formirati tri objekta klase Knjiga, svakom objektu postaviti sva polja i pozvati sve metode.*/

class Knjiga
{
    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena=2500;
    public function __construct($n, $a, $g, $b, $c)
    {
        $this->naslov=$n;
        $this->autor=$a;
        $this->godIzdanja=$g;
        $this->brojStrana=$b;
        $this->cena=$c;
    }
    public function setNaslov($n)
    {
        $this->naslov=$n;
    }
    public function setAutor($a)
    {
        $this->autor=$a;
    }
    public function setGodIzdanja($g)
    {
        $this->godIzdanja=$g;
    }
    public function setBrojStrana($b)
    {
        $this->brojStrana=$b;
    }
    public function setCena($c)
    {
        $this->cena=$c;
    }
    public function getNaslov()
    {
        return $this->naslov;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getGodIzdanja()
    {
        return $this->godIzdanja;
    }
    public function getBrojStrana()
    {
        return $this->brojStrana;
    }
    public function getCena()
    {
        return $this->cena;
    }
    public function Stampa()
    {
        echo "<br>Naslov knjige: ".$this->getNaslov()."<br>Autor: ".$this->getAutor()."<br>Godina izdanja: ".$this->getGodIzdanja().
             "<br>Broj strana: ".$this->getBrojStrana()."<br>Cena: ".$this->getCena()."<br>";
    }
    public function BrojStrana()
    {
        if($this->brojStrana>600)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function Cena()
    {
        if($this->cena>8000)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function Autor()
    {
        if(strlen($this->autor)>18)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
$knjiga=array();
$knjiga[1]=new Knjiga("Alhemičar", "Paolo Koeljo", 1988, 164, 600);
$knjiga[2]=new Knjiga("Lovac na zmajeve", "Haleid Hoseini", 2003, 343, 760);
$knjiga[3]=new Knjiga("Sudar kraljeva", "Džordž Rejmond Ričard Martin", 1998, 761, 750);
for($i=1;$i<=3;$i++)
{
    $knjiga[$i]->Stampa();
    if($knjiga[$i]->BrojStrana())
    {
        echo "(knjiga je obimna)<br>";
    }
    if($knjiga[$i]->Autor())
    {
        echo "(ime autora je predugo)<br>";
    }
    if($knjiga[$i]->Cena())
    {
        echo "(cena knjige je previsoka)<br>";
    }
}
?>