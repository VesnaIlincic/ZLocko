<?php
class Brojevi
{
    private $br1;
    private $br2;
    public function __construct($b1, $b2)
    {
        $this->br1=$b1;
        $this->br2=$b2;
    }
    public function setBr1($br1)
    {
        $this->br1=$b1;
    }
    public function setBr2($br2)
    {
        $this->br2=$b2;
    }
    public function getBr1()
    {
        return $this->br1;
    }
    public function getBr2()
    {
        return $this->br2;
    }
    public function Stampa()
    {
        echo $this->br1." i ".$this->br2." obradjeni u raznim operacijama: <br>";
    } 
}
function Sab($b1, $b2)
{
    $sab=$b1+$b2;
    return $sab;
}
function Oduz($b1, $b2)
{
    $oduz=$b1-$b2;
    return $oduz;
}
function Mnoz($b1, $b2)
{
    $mnoz=$b1*$b2;
    return $mnoz;
}
function Delj($b1, $b2)
{
    $delj=$b1/$b2;
    return $delj;
}
$obj=new Brojevi(23,13);
$obj->Stampa();
$a1=$obj->getBr1();
$a2=$obj->getBr2();
echo "Zbir je: ".Sab($a1, $a2)."<br>";
echo "Razlika je: ".Oduz($a1, $a2)."<br>";
echo "Proizvod je: ".Mnoz($a1, $a2)."<br>";
echo "Kolicnik je: ".Delj($a1, $a2)."<br>";
?>