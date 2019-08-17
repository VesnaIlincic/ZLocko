<?php
/*Kreirati klasu Datum koja sadrži tri atributa - dan, mesec i godinu.
Napraviti konstruktor kome se prosleđuju tri vrednosti koje treba postaviti.
Napraviti odgovarajuće getere i setere.
Napraviti funkciju ranijiDatum koja za dva prosleđena datuma ispisuje raniji od ta dva datuma. 
Ukoliko su datumi jednaki onda na ekranu ispisati “Datumi su jednaki”.*/

class Datum
{
    private $dan;
    private $mesec;
    private $godina;
    public function __construct($d, $m, $g)
    {
        $this->dan=$d;
        $this->mesec=$m;
        $this->godina=$g;
    }
    public function setDan($d)
    {
        $this->dan=$d;
    }
    public function setMesec($m)
    {
        $this->mesec=$m;
    }
    public function setGodina($g)
    {
        $this->godina=$g;
    }
    public function getDan()
    {
        return $this->dan;
    }
    public function getMesec()
    {
        return $this->mesec;
    }
    public function getGodina()
    {
        return $this->godina;
    }
}

$d1=new Datum(23, 03, 2002);
$d2=new Datum(12, 10, 1963);
function ranijiDatum($d1, $d2)
{
    if($d1->getGodina() < $d2->getGodina())
    {
        return $d1->getDan()."/".$d1->getMesec()."/".$d1->getGodina();
    }
    elseif($d1->getGodina()==$d2->getGodina())
    {
        if($d1->getMesec() < $d2->getMesec())
        {
            return $d1->getDan()."/".$d1->getMesec()."/".$d1->getGodina();
        }
        elseif($d1->getMesec()==$d2->getMesec())
        {
            if($d1->getDan() <$d2->getDan())
            {
                return $d1->getDan()."/".$d1->getMesec()."/".$d1->getGodina();
            }
            elseif($d1->getDan()==$d2->getDan())
            {
                echo "Datumi su jednaki.";
            }
            else
            {
                return $d2->getDan()."/".$d2->getMesec()."/".$d2->getGodina();
            }
        }
        else
        {
            return $d2->getDan()."/".$d2->getMesec()."/".$d2->getGodina();
        }
    }
    else
    {
        return $d2->getDan()."/".$d2->getMesec()."/".$d2->getGodina();
    }
}
echo "Raniji datum je: ".ranijiDatum($d1, $d2)."<br>";

?>