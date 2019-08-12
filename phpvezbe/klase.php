<?php
//1.zad.

class Auto
{
    //tri polja(atributa)
    var $marka;
    var $boja='white';
    var $imaKrov=true;
    //jedna metoda
    function sviraj()
    {
        echo "Beep!<br>";
    }
}
//$i=array(1, 2, 3)
//kreiranje(instanciranje) objekta
$auto1=new Auto;
$auto2=new Auto;
$auto1->marka="BMW";
$auto1->boja="Audi";
$auto1->imaKrov=false;
$auto2->marka="Audi";
$auto2->imaKrov=true;
if($auto1->imaKrov===false)
{
    echo "Auto nema krov! ";
}
if($auto2->imaKrov===false)
{
    echo "Auto nema krov!";
}
echo "Karakteristike prvog vozila:";
echo $auto1->marka.",".$auto1->boja.",".$auto1->imaKrov."<br>";
echo "Karakteristike drugog vozila:";
echo $auto2->marka.",".$auto2->boja.",".$auto2->imaKrov."<br>";
$auto2->sviraj();
$auto1->sviraj();

//2.zad.

class Film
{
    var $naslov;
    var $reziser;
    var $godinaIzdanja;
    function stampaj()
    {
        echo "Film sa naslovom: ".$this->naslov."<br>";
        echo "Reziser filma: ".$this->reziser."<br>";
        echo "Godina izdanja filma: ".$this->godinaIzdanja."<br>";
    }
}
$film1=new Film;
$film1->naslov="Titanic";
$film1->reziser="James Camerun";
$film1->godinaIzdanja=1997;
$film2=new Film;
$film2->naslov="Maratonci trce...";
$film2->reziser="Zoran Shijan";
$film2->godinaIzdanja=1982;
$film3=new Film;
$film3->naslov="Vruc vetar";
$film3->reziser="Aleksandar Djordjevic";
$film3->godinaIzdanja=1980;
$film2->stampaj();
$film1->stampaj();

//3.zad

class Pacijent
{
    var $ime;
    var $visina;
    var $tezina;
    function Stampaj()
    {
        echo "Pacijent imena: ".$this->ime.", visine: ".$this->visina." i tezine: ".$this->tezina."<br>";
    }
    function Bmi()
    {   
        $bmi=$this->tezina/($this->visina/100*$this->visina/100);
        return $bmi;
    }
    function Kritican()
    {
        if($this->bmi()<15 || $this->bmi()>40)
        {
            return true;
        }
        return false;
    }
}
$pacijent1=new Pacijent;
$pacijent1->ime="Bogoljub";
$pacijent1->visina=198;
$pacijent1->tezina=169;
$pacijent1->Stampaj();
echo "BMI pacijenta je: ".$pacijent1->bmi()."<br>";
if($pacijent1->kritican())
{
    echo "Pacijent je kritican!<br>";
}
else
{
    echo "Pacijent je normalan!<br>";
}



?>