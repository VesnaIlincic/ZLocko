<?php

class Vozilo 
{		
    private $boja;
    private $tip;
    public function __construct($boja, $tip) 
    {			
        $this->setTip($tip);
        $this->setBoja($boja);		
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
        echo "Tip: ".$this->getTip().", boja: ".$this->getBoja().".<br>";
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
        echo "Tip: ".$this->getTip().", boja: ".$this->getBoja().", registarski broj: ".$this->getRegBr().".<br>";//echo ispisVozila()."Reg.broj".$this->getRegBr();
    }
}
$obj=new Vozilo("crvena", "bicikl");
$obj->ispisVozila();
$obj1=new Automobil("plava", "NI-87554");
$obj1->ispisiAuto();
class Kamion extends Vozilo
{
    public $tockovi;
    public function __construct($toc)
    {
        $this->setBoja("crvena");
        $this->setTip("kamion");
        $this->setTockovi($toc);
    }
    public function setTockovi($toc)
    {
        $this->tockovi=$toc;
    }
    public function getTockovi()
    {
        return $this->tockovi;
    }
    public function IspisiKamion()
    {
        echo "Tip vozila: ".$this->getTip().", boje: ".$this->getBoja()." i broja tockova: ".$this->getTockovi()."<br>";
    }
}
$kamion1=new Kamion(8);
$kamion1->IspisiKamion();

class Motor extends Vozilo
{
    public $tockovi;
    public $sediste;
    public function __construct($toc, $sed)
    {   
        $this->setBoja("siva");
        $this->setTip("motor");
        $this->tockovi=$toc;
        $this->sediste=$sed;
    }
    public function setTockovi($toc)
    {
        $this->tockovi=$toc;
    }
    public function setSediste($sed)
    {
        $this->sediste=$sed;
    }
    public function getTockovi()
    {
        return $this->tockovi;
    }
    public function getSediste()
    {
        return $this->sediste;
    }
    public function IspisiMotor()
    {
        echo "Tip vozila: ".$this->getTip().", boja: ".$this->getBoja().", broj tockova: ".$this->getTockovi().", broja sedista: ".$this->getSediste().".<br>";
    }
}
$motor1=new Motor(4, 2);
$motor1->IspisiMotor();


?>