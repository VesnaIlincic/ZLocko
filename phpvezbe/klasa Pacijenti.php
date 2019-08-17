<?php

class Pacijenti
{
    private $ime;
    private $visina;
    private $tezina;
    public function __construct($i, $v, $t)
    {
        $this->ime=$i;
        $this->visina=$v;
        $this->tezina=$t;
        
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setVisina($v)
    {
        $this->visina=$v;
    }
    public function setTezina($t)
    {
        $this->tezina=$t;
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
    public function Stampa()
    {
        echo "Pacijent imena: ".$this->getIme().",visine: ".$this->getVisina()."i tezine: ".$this->getTezina()." ima BMI: ".$this->getBMI()."<br>";
    }
}
$pacijent=array();
$pacijent[1]=new Pacijenti("Dragoljub", "Ilić", 189, 78);
$pacijent[2]=new Pacijenti("Miki", "Krstić", 176, 88);
$pacijent[3]=new Pacijenti("Milka", "Jović", 166, 56);
$tezinamin=$pacijent[1]->getTezina();
for($i=1;$i<=3;$i++)
{
    if($tezinamin>=$pacijent[$i]->getTezina())
    {
        $tezinamin=$pacijent[$i]->getTezina();
    }
}
echo "Minimalna tezina od svih pacijenata je: ".$tezinamin."<br>";
$br=0;
$suma=0;
for($i=1;$i<=3;$i++)
{
    $suma+=$pacijent[$i]->getVisina();
    $br++;
}
echo "Srednja visina svih pacijenata je: ".$suma/$br."<br>";
$bmimax=0;
for($i=1;$i<=3;$i++)
{
    $visina1=$pacijent[$i]->getVisina()/100;
    $tezina1=$pacijent[$i]->getTezina();
    $bmi=$tezina1/($visina1*$visina1);
    if($bmimax<=$bmi)
    {
        $bmimax=$bmi;
    }
}
echo "Pacijent sa najvecim BMI je: ".$bmimax."<br>";
echo "Pacijenti cije ime sadrzi slovo 'a' su: <br>";
for($i=1;$i<=3;$i++)
{
    if(strpos($pacijent[$i]->getIme(), "a")!=false)
    {
        echo $pacijent[$i]->getIme()."<br>";
    }
}




?>