<?php
/*Kreirati klasu Radnik koja sadrži dva atributa - ime i platu ranika.
Napraviti konstruktor kome se prosleđuju dve vrednosti koje treba postaviti.
Napraviti odgovarajuće getere i setere.
Napraviti funkciju maksPlata kojoj se prosleđuje niz radnika, a ona vraća najveću platu ranika.
Napraviti funkciju maksPlataOsoba kojoj se prosleđuje niz ranika, a ona ispisuje sve podatke 
za svakom od radnika sa maksimalnom platom.*/

class Radnik
{
    private $ime;
    private $plata;
    public function __construct($i, $p)
    {
        $this->ime=$i;
        $this->plata=$p;
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setPlata($p)
    {
        $this->plata=$p;
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getPlata()
    {
        return $this->plata;
    }
}

$radnik1=new Radnik("Miki", 345);
$radnik2=new Radnik("Osvald", 789);
$radnik3=new Radnik("Radmila", 543);
$radnik4=new Radnik("Aleksandra", 789);
$radnici=array($radnik1, $radnik2, $radnik3, $radnik4);

function maksPlata($radnici)
{
    $max=$radnici[0]->getPlata();
    foreach($radnici as $rad)
    {
        if($max<=$rad->getPlata())
        {
            $max=$rad->getPlata();
        }
    }
    return $max;
}
echo "Maksimalna plata je: ".maksPlata($radnici)."<br>";
echo "Radnici koji imaju maksimalnu platu od ".maksPlata($radnici)." su: <br>";
function maksPlataOsoba($radnici)
{   
    $maksp=maksPlata($radnici);
    foreach($radnici as $rad)
    {
        if($maksp==$rad->getPlata())
        {
            echo $rad->getIme()."<br>";
        }
    }   
}
maksPlataOsoba($radnici);





?>