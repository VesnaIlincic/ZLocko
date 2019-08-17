<?php
/*★ Napraviti klasu Kamion .
Klasa kamion ima dva atributa: registarski broj i nosivost .
★ Napraviti konstruktor koji prihvata i postavlja vrednost registarskog broja i nosivosti
kamiona.
★ Napraviti metodu setRegistarskiBroj koja postavjla registarski broj kamiona i
metodu setNosivost koja postavlja nostivost kamiona.
Konstruktor i setere ograničiti tako da najmanja nosivost kamiona može biti 0 (nula),
a registarski broj ne sme biti manji od 5 karaktera.
★ Napraviti metodu getRegistarskiBroj koja vraća registarski broj kamiona i metodu
getNosivost koja vraća nosivost kamiona.
★ Napraviti metodu ispisiKamion koja na ekranu u okviru paragrafa plavom bojom
ispisuje registarski broj kamiona, a crvenom bojom ispisuje nosivost kamiona.
★ Napraviti niz od najmanje tri kamiona.
★ Napraviti funkciju ispisSvihKamiona kojoj se prosleđuje niz kamiona, a koja ispisuje
sve kamione koji se nalaze u nizu kamiona.
★ Napraviti funkciju podrzavaNosivost kojoj se prosleđuje niz kamiona i težina paketa
robe. Funksija vraća true ukoliko je robu moguće smestiti u neki od kamiona (ako
nosivost nekog od kamiona može podržati nosivost tog paketa), u suprotnom funkcija
vraća false .
★ Testirati (isprobati i pozvati) sve funkcije i metode koje su navedene u ovom zadatku.*/

class Kamion
{
    private $regbr;
    private $nosivost;
    public function __construct($r, $n)
    {
        $this->regbr=$r;
        $this->nosivost=$n;
    }
    public function setRegistarskiBroj($r)
    {
        $this->regbr=$r;
    }
    public function setNosivost($n)
    {
        $this->nosivost=0;
    }
    public function getRegistarskiBroj()
    {
        return $this->regbr;
    }
    public function getNosivost()
    {
        return $this->nosivost;
    }
    public function ispisiKamion()
    {   
        $s1=$this->getRegistarskiBroj();
        $s2=$this->getNosivost();
        echo "<p>Reg.br. kamiona je:"."<h4>$s1</h4>".", nosivosti: "."<h3>$s2</h3>"."</p>"; 
    }
}

$kamion1=new Kamion("NI-354758", 15);
$kamion2=new Kamion("BG-76899", 56);
$kamion3=new Kamion("SU-87678", 30);
$kamion4=new Kamion("KG-8585", 75);
$kamion=array($kamion1, $kamion2, $kamion3, $kamion4);


echo "Spisak svih kamiona:<br>";
function ispisSvihKamiona($kamion)
{   
    for($i=0;$i<=3;$i++)
    {
        $kamion[$i]->ispisiKamion()."<br>";
    }
}
ispisSvihKamiona($kamion);

function podrzavaNosivost($kamion)
{   
    $tezpak=50;
    foreach($kamion as $kam)
    {
        if($kam->getNosivost()>=$tezpak)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
podrzavaNosivost($kamion);

foreach($kamion as $kam)
{
    if(podrzavaNosivost($kam)==0)
    {
        echo "Kamion ".$kam->getRegistarskiBroj()." ne moze da ponese ovu kolicinu robe.<br>";
    }
    else
    {
        echo "Kamion ".$kam->getRegistarskiBroj()." moze da ponese ovu kolicinu robe.";
    }
}

?>
<html>
    <head>
        <style>
            h4{color:blue};
            h3{color:red};
        </style>
    </head>
    <body>
    </body>
</html>