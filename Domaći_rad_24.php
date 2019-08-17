<?php
/*Napraviti klasu Pacijenti koja sadrži:

➢	Privatne promenljive (atribute) za ime, prezime, visinu i težinu pacijenta.
➢	Konstruktor kome se prosleđuju navedeni atributi.
➢	Metode za getere i setere za svaki od atributa.
➢	Napraviti niz objekata pacijenti koji sadrži najmanje 3 različita pacijenta.
➢	Funkciju koja ispisuje podatke o pacijentu sa najmanjom težinom.
➢	Funkciju koja ispisuje podatke o pacijentu koji ima najveći BMI.
➢	Funkciju koja ispisuje sve pacijente čije ime sadrži slovo A.*/

class Pacijenti
{
    private $ime;
    private $prezime;
    private $visina;
    private $tezina;
    public function __construct($i, $p, $v, $t)
    {
        $this->ime=$i;
        $this->prezime=$p;
        $this->visina=$v;
        $this->tezina=$t;
        
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setPrezime($p)
    {
        $this->prezime=$p;
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
    public function getPrezime()
    {
        return $this->prezime;
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
        echo "Pacijent: ".$this->getIme()." ".$this->getPrezime().",visine: ".$this->getVisina()." i tezine: ".$this->getTezina()."<br>";
    }
}

$pacijent1=new Pacijenti("Dragoljub", "Ilić", 189, 78);
$pacijent2=new Pacijenti("Miki", "Krstić", 176, 88);
$pacijent3=new Pacijenti("Milka", "Jović", 166, 56);
$pacijent4=new Pacijenti("Ljubinka", "Kozub", 165, 60);
$pacijent=array($pacijent1, $pacijent2, $pacijent3, $pacijent4);
$pacijent1->Stampa();
$pacijent2->Stampa();
$pacijent3->Stampa();
$pacijent4->Stampa();
echo "<br>";

echo "Minimalna tezina (";
function MinTez($pacijent)
{
    $tmin=$pacijent[0]->getTezina();
    $pacmini=$pacijent[0]->getIme();
    $pacminp=$pacijent[0]->getPrezime();
    foreach($pacijent as $pac)
    {   
        if($tmin>=$pac->getTezina())
        {
            $tmin=$pac->getTezina();
            $pacmini=$pac->getIme();
            $pacminp=$pac->getPrezime();
        }
    }
echo $tmin."kg) je pacijenta imena: ".$pacmini." ".$pacminp."<br>";
}
MinTez($pacijent);

echo "Pacijent sa najvecim BMI je: ";
function MaxBMI($pacijent)
{   
    $pacmaxi=$pacijent[0]->getIme();
    $pacmaxp=$pacijent[0]->getPrezime();
    $visina0=$pacijent[0]->getVisina()/100;
    $tezina0=$pacijent[0]->getTezina();
    $bmimax=$tezina0/($visina0*$visina0);
    foreach($pacijent as $pac)
    {   
        $visina1=$pac->getVisina()/100;
        $tezina1=$pac->getTezina();
        $bmi=$tezina1/($visina1*$visina1);
        if($bmimax<=$bmi)
        {
            $bmimax=$bmi;
            $pacmaxi=$pac->getIme();
            $pacmaxp=$pac->getPrezime();
            
        }
    }
    echo $pacmaxi." ".$pacmaxp." (bmi= ".$bmimax.")<br>";;
}
MaxBMI($pacijent);

echo "Pacijenti čije ime sadrži slovo 'a' su: <br>";
function SlovoA($pacijent)
{
    foreach($pacijent as $pac)
    {
        if(strpos($pac->getIme(), "a")!=false)
        {
            echo $pac->getIme()." ".$pac->getPrezime()."<br>";
        }
    }
}
SlovoA($pacijent)."<br>";

?>