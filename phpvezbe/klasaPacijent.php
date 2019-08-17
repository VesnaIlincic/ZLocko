<?php

class Pacijent
{
    private $ime;
    private $visina;
    private $tezina;
    public function __construct($i, $v, $t)
    {
        $this->setIme($i);
        $this->setVisina($v);
        $this->setTezina($t);
    }
    public function Stampaj()
    {
        echo "Pacijent imena: ".$ime->getIme().", visine: ".$visina->getVisina()." i tezine: ".$tezina->getTezina()."<br>";
    }
    public function Bmi()
    {   
        $bmi=$this->tezina/($this->visina/100*$this->visina/100);
        return $bmi;
    }
    public function Kritican()
    {
        if($this->bmi()<15 || $this->bmi()>40)
        {
            return true;
        }
        return false;
    }
    public function setVisina($v)
    {
        if($v<0)
        {
            $this->visina=0;
        }
        elseif($v<=250)
        {
            $this->visina=$v;
        }
        else
        {
            $this->visina=250;
        }
    }
    public function setTezina($t)
    {
        if($t>=45 and $t<=100)
        {
            $this->tezina=$t;
        }
        elseif($t<45)
        {
            $this->tezina="$t - Jedi vise!<br>";
        }
        elseif($t>100)
        {
            $this->tezina="$t - Odmah na dijetu!<br>";
        }
        else
        {
            $this->tezina=0;
        }
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getVisina()
    {
        return $this->visina;
    }
    public function getTezina()
    {
        return $this->tezina;
    }

}
$pacijent1=new Pacijent("Bogoljub", 165, 169);
/*$pacijent1->setIme("Bogoljub");
$pacijent1->setVisina(265);
$pacijent1->setTezina(169);*/
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