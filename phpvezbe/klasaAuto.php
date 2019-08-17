<?php

class Auto
{
    //tri polja(atributa)
    private $marka;
    private $boja;
    private $imaKrov;

    public function __construct($marka, $boja, $imaKrov)
    {
        $this->marka=$m;
        $this->boja=$b;
        $this->imaKrov=$k;
    }

    public function SetMarka($m)
    {
        $this->marka=$m;
    }
    public function setBoja($b)
    {
        $this->boja=$b;
    }
    public function setImaKrov($k)
    {
        $this->setImaKrov=$k;
    }
    //jedna metoda
    public function sviraj()
    {
        echo "Beep!<br>";
    }
    public function getMarka()
    {
        return $this->marka;
    }
    public function getBoja()
    {
        return $this->boja;
    }
    public function getImaKrov()
    {
        return $this->imaKrov;
    }

}

//$i=array(1, 2, 3)
//kreiranje(instanciranje) objekta
$auto1=new Auto("BMW", "yellow", false);
$auto2=new Auto("Audi", "white", true);
if($auto1->getImaKrov()===false)
    {
        echo "Auto nema krov! ";
    }
if($auto2->getImaKrov()===false)
    {
        echo "Auto nema krov!";
    }
/*$auto1->setMarka("BMW");
$auto1->setBoja("black");
$auto1->setImaKrov(false);
$auto2->setMarka("Audi");
$auto2->setBoja("grey");
$auto2->setImaKrov(true);*/
echo "Karakteristike prvog vozila:";
echo $auto1->getMarka().",".$auto1->getBoja().",".$auto1->getImaKrov()."<br>";
echo "Karakteristike drugog vozila:";
echo $auto2->getMarka().",".$auto2->getBoja().",".$auto2->getImaKrov()."<br>";
$auto2->sviraj();
$auto1->sviraj();

/*Kada nema konstruktora:$auto3=new Auto;
class Auto
{
    public function __construct()
    {

    }
}
*/


?>