<?php
/*Kreirati klasu Automobil koji ima podatke o maksimalnoj brzini, minimalnoj brzini i trenutnoj brzini. 
Pri stvaranju novog automobila (u konstruktoru) zadajete minimalnu vrednost brzine, 
maksimalnu vrednost brzine i trenutnu vrednost brzine.
Napraviti odgovarajuće setere i getere.
Napraviti metodu  ubrzaj kojoj se prosledjuje vrednost za koliko treba uvećati trenutnu brzinu. 
Ukoliko nije moguće izvršiti toliko ubrzanje, trenutnu brzinu postaviti na maksimalnu vrednost brzine, 
u suprotnom uvećati za traženu vrednost.
Napraviti metodu uspori kojoj se prosledjuje vrednost za koliko treba smanjiti trenutnu brzinu. 
Ukoliko nije moguće izvršiti toliko usporenje, trenutnu brzinu postaviti na minimalnu vrednost brzine, 
u suprotnom umanjiti brzinu za traženu vrednost.*/

class Automobil
{
    private $maxbrz;
    private $minbrz;
    private $trbrz;
    public function __construct($max, $min, $tr)
    {
        $this->maxbrz=$max;
        $this->minbrz=$min;
        $this->trbrz=$tr;
    }
    public function setMaxbrz($max)
    {
        $this->maxbrz=$max;
    }
    public function setMnbrz($min)
    {
        $this->minbrz=$min;
    }
    public function setTrbrz($tr)
    {
        $this->trbrz=$tr;
    }
    public function getMaxbrz()
    {
        return $this->maxbrz;
    }
    public function getMinbrz()
    {
        return $this->minbrz;
    }
    public function getTrbrz()
    {
        return $this->trbrz;
    }
    public function ubrzaj()
    {   
        $a1=$this->getTrbrz();
        $ubrzanje=$a1+100;
        if($ubrzanje<=$this->getMaxbrz())
        {
            return $a1=$ubrzanje;
        }
        else 
        {
            return $a1=$this->getMaxbrz();
        }
    }
    public function uspori()
    {
        $a2=$this->getTrbrz();
        $usporenje=$this->getTrbrz()-100;
        if($usporenje<=$this->getMinbrz())
        {
            return $a2=$this->getMinbrz();
        }
        else
        {
            return $a2=$usporenje;
        }
    }
}

$auto1=new Automobil(250, 10, 67);
$auto2=new Automobil(210, 20, 120);
$auto3=new Automobil(270, 25, 200);
$auto=array($auto1, $auto2, $auto3);
$brzina=100;
foreach($auto as $car)
{
echo "Ako ubrzamo za ".$brzina." brzina auta ce biti:  ".$car->ubrzaj()."<br>";
echo "Ako usporimo za ".$brzina." brzina auta ce biti: ".$car->uspori()."<br>";
}



?>