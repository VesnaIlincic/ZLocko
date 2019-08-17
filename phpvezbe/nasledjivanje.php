<?php

class Vozilo 
{		
    public $boja;
    public $tip;
    public function __construct() 
    {			
        $this->tip=$tip;
        $this->boja=$boja;		
	}				
    public function setBoja($boja) 
    {
		$this->boja=$boja;		
    }
    public function setTip($tip)
    {
        $this->tip=$tip;
    }
    public function getBoja()
    {
        return $this->boja;
    }
    public function getTip()
    {
        return $this->tip;
    }
    public function ispisVozila()
    {
        echo "Tip: ".$this->getTip()." i boje: ".$this->getBoja();
    }					
}
class Automobil extends Vozilo
{
    public $regbr;
    public function __construct($boja, $regbr)
    {
        $this->setBoja($boja);
        $this->setTip("automobil");
        $this->setRegBr($regbr);
    }
    public function setRegBr($regbr)
    {
        $this->regbr=$regbr;
    }
    public function getRegBr()
    {
        return $this->regbr;
    }
    public function ispisiAuto()
    {
        echo "Tip: ".$this->getTip()."Boja: ".$this->getBoja()."Registarski broj: ".$this->getRegBr();//echo ispisVozila()."Reg.broj".$this->getRegBr();
    }
}
$obj=new Vozilo("crvena", "bicikl");
$obj->ispisVozila();
$obj1=new Automobil("plava", "NI-87554");
$obj1->ispisiAuto();



?>