<?php
/*Kreirati klasu Krug koja ima atribut za poluprečnik kruga.
-Napraviti odgovarajući konstruktor, getere i setere.
-Napraviti metodu obimKruga koja izračunava i vraća obim kruga.
-Napraviti metodu povrsinaKruga koja izračunava i vraća površinu kruga.
-Napraviti funkciju upisaniKrug kojoj se prosleđuju dva objekta tipa krug, a ona vraća true 
 ukoliko je u prvi prosleđeni krug moguće upisati drugi prosleđeni krug. U suprotnom funkcija vraća false.
-Napisati funkciju rastuci koja vraća true ukoliko se svaki krug može upisati u svog sledbenika. 
 Ukoliko ma jedan krug ne može da se upiše u sledeći krug, vratiti false.*/

class Krug
{
    private $polupr;
    public function __construct($p)
    {
        $this->setPolupr($p);
    }
    public function setPolupr($p)
    {
        $this->polupr=$p;
    }
    public function getPolupr()
    {
        return $this->polupr;
    }
    public function obimKruga()
    {
        $pp=$this->getPolupr();
        $obim=2*$pp*pi();
        return $obim;
    }
    public function povrsinaKruga()
    {   
        $pp=$this->getPolupr();
        $povrsina=($pp*$pp)*pi();
        return $povrsina;
    }
}
$krug1=new Krug(23.1);
$krug2=new Krug(12.5);
$krug3=new Krug(34.3);
$krug4=new Krug(5.4);
$krug5=new Krug(15.3);
$krug=array($krug1, $krug2, $krug3, $krug4, $krug5);

foreach($krug as $k)
{
 echo "Obim kruga je: ".$k->obimKruga().", a povrsina je: ".$k->povrsinaKruga()."<br>";
}
function upisaniKrug($krug1, $krug2)
{   
    $pp1=$krug1->getPolupr();
    $pp2=$krug2->getPolupr();
    if($pp2<=$pp1)
    {
        return true;
    }
    else
    {
        return false;
    }   
}
if(upisaniKrug($krug1, $krug2)==true)
{
    echo "Drugi krug moze da se upise u prvi.<br>";
}
else
{
    echo "Drugi krug ne moze da se upise u prvi.<br>";
}

function rastuci($krug)
{ 
    $brf=0;
    for($i=0;$i<=3;$i++)
    {   
        if(upisaniKrug($krug[$i], $krug[$i+1])==false)
        {
            $brf++;
        }
    }
    if($brf!=0)
    {
        return false;
    }
    else
    {
        return true;
    }
}
if(rastuci($krug)==false)
{
    echo "Svaki sledeci krug ne moze da se upise u prethodni.<br>";
}
else
{
    echo "Svaki sledeci krug moze da se upise u prethodni.<br>";
}











?>