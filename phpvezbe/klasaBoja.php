<?php
/*Kreirati klasu Boja koja ima talasnu dužinu u nm, zasićenje i intenzitet.
Napraviti konstruktor kome se prosleđuju tri vrednosti koje treba postaviti.
Napraviti odgovarajuće getere i setere.
Napraviti funkciju ispitajSličnost koja za dve prosleđene boje vraća true ukoliko su te dve boje iste, u suprotnom vraća false.
Napraviti funkciju srednjaTalasnaDuzina koja za niz boja vraća vrednost srednje talasne dužine.*/

class Boja
{
    private $talasnaduzina;
    private $zasicenje;
    private $intenzitet;
    public function __construct($t, $z, $i)
    {
        $this->talasnaduzina=$t;
        $this->zasicenje=$z;
        $this->intenzitet=$i;
    }
    public function setTalasnaduzina($t)
    {
        $this->talasnaduzina=$t;
    }
    public function setZasicenje($z)
    {
        $this->zasicenje=$z;
    }
    public function setIntenzitet($i)
    {
        $this->intenzitet=$i;
    }
    public function getTalasnaduzina()
    {
        return $this->talasnaduzina;
    }
    public function getZasicenje()
    {
        return $this->zasicenje;
    }
    public function getIntenzitet()
    {
        return $this->intenzitet;
    }
}

$boja0=new Boja(123, 34, 54);
$boja1=new Boja(234, 23, 76);
$boja2=new Boja(143, 67, 12);
$boje=array($boja0, $boja1, $boja2);

function IspitajSlicnost($b1, $b2)
{
    if($b1==$b2)
    {
        return true;
    }
    else
    {
        return false;
    }
}
echo IspitajSlicnost($boja1, $boja2)."<br>";

function srednjaTalasnaDuzina($boje)
{   
    $suma=0;
    $br=0;
    foreach($boje as $color)
    {   
        $suma+=$color->getTalasnaduzina();
        $br++;
    }
    return $suma/$br;
}
echo "Srednja talasna duzina je: ".srednjaTalasnaDuzina($boje)."nm.";


?>