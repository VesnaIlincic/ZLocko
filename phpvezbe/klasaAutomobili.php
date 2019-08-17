<?php
class Automobili
{
    private $boja;
    private $tip;
    public function __construct($b, $t)
    {
        $this->boja=$b;
        $this->tip=$t;
    }
    public function setBoja($b)
    {
        $this->boja=$b;
    }
    public function setTip($t)
    {
        $this->tip=$t;
    }
    public function getBoja()
    {
        return $this->boja;
    }
    public function getTip()
    {
        return $this->tip;
    }
    public function Stampa()
    {
        echo "Automobil boje: ".$this->getBoja()." i tipa: ".$this->getTip()."<br>";
    }
}
$auto1=new Automobili("crvena", "kabrio");
$auto2=new Automobili("bela", "karavan");
$automobili=array($auto1, $auto2);
foreach($automobili as $auto)
{
    $auto->Stampa();
}




?>