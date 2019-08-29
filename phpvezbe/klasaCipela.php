<?php
/*Napraviti klasu Cipela koja sadrži atribute: naziv, broj cipele i niz prepravki koje treba obaviti na cipeli.
-Napraviti odgovarajući konstruktor, getere i setere.
-Napraviti metodu zalepi koja po pozivu na ekranu ispisuje “Zalepljena cipela”.
-Napraviti metodu prosiri koja po pozivu na ekranu ispisuje “Prosirena cipela”.
-Napraviti metodu usij koja po pozivu na ekranu ispisuje “Usivena cipela”.
-Napraviti funkciju radi kojoj se prosledjuje jedna cipela (jedna instanca klase Cipela) i koja proverava 
 da li je neka u nizu prepravki sadrži string zalepi, proširi ili ušij. Svaki put kada naiđe na prepravku 
 (element u nizu prepravki)
 zalepi poziva se metoda zalepi, kada naiđe na prepravku prosiri poziva se metoda prosiri, 
 kada naiđe na prepravku usij poziva se metoda usij, 
 u suprotno se na ekranu ispisuje “Nepoznata prepravka”.*/

 class Cipela
{
    private $naziv;
    private $brcipele;
    private $prepravka;
    public function __construct($n, $b, $prep)
    {
        $this->naziv=$n;
        $this->brcipele=$b;
        $this->prepravka=$prep;
        
    }
    public function setNaziv($n)
    {
        $this->naziv=$n;
    }
    public function setBrCipele($b)
    {
        $this->brcipele=$b;
    }
    public function setPrepravka($prep)
    {   
        $this->prepravka=$prep;
    }
    public function getNaziv()
    {
        return $this->naziv;
    }
    public function getBrCipele()
    {
        return $this->brcipele;
    }
    public function getPrepravka()
    {
        return $this->prepravka;
    }
    public function Zalepi()
    {
        echo "Zalepljena cipela!";
    }
    public function Prosiri()
    {
        echo "Proširena cipela!";
    }
    public function Usij()
    {
        echo "Ušivena cipela!";
    }
}
$prepravke1=array("usij", "zalepi", "skrati");
$prepravke2=array("zalepi", "prosiri");
$prepravke3=array("prosiri", "usij");
$prepravke4=array("zalepi", "skrati");
$prepravke5=array("skrati","produzi", "prosiri");
$prepravke=array($prepravke1, $prepravke2, $prepravke3, $prepravke4, $prepravke5);
$cipela1=new Cipela("sandala", 38, $prepravke1);
$cipela2=new Cipela("duboka cipela", 42, $prepravke2);
$cipela3=new Cipela("salonska cipela", 37, $prepravke3);
$cipela4=new Cipela("papuca", 39, $prepravke4);
$cipela5=new Cipela("patika", 44, $prepravke5);
$cipela=array($cipela1, $cipela2, $cipela3, $cipela4, $cipela5);
$len=count($prepravke);
function Radi($prepravke1, $cipela1)
{       
        foreach($prepravke1 as $pre1)
        {
            if ($pre1=="usij")
            {
                echo $cipela1->getNaziv().", ".$cipela1->getBrCipele()." - ";
                $cipela1->Usij();
                echo "<br>";
            }
            elseif($pre1=="zalepi")
            {   
                echo $cipela1->getNaziv().", ".$cipela1->getBrCipele()." - ";
                $cipela1->Zalepi();
                echo "<br>";
            }
            elseif($pre1=="prosiri")
            {   
                echo $cipela1->getNaziv().", ".$cipela1->getBrCipele()." - ";
                $cipela1->Prosiri();
                echo "<br>";
            }
            else
            {   
                echo $cipela1->getNaziv().", ".$cipela1->getBrCipele()." - ";
                echo "Nepoznata prepravka!";
                echo "<br>";
            }
            
        }
}
Radi($prepravke1, $cipela1);






?>