<?php    
/*Kreirati klasu FMRadio koja sadrđi atribute o stanici, frekvenciji i  jačini tona.
Klasa treba da sedrži odgovarajući konstruktor, getere i setere koji zadovoljavaju uslov 
da se frekvencija nalazi u opsegu od 87.5MHz do 108MHz. 
Jačina zvuka treba da se nalazi u opsegu od 0 do 20.
Napraviti metodu promeniZvuk kojoj se prosleđuje simbol plus ili minus i koja  po pozivu jačinu zvuka menja
isključivo za 1 stupanj. Ukoliko je prosleđen simbol + povećati jačinu zvuka za 1, u suprotnom smanjiti jačinu zvuka za 1. 
Voditi računa o tome da jačina zvuka ne sme biti manja od 0 i veća od 20 
(Ova metoda ništa ne vraća, samo promeni vrednost zvuka).
Napraviti metodu frekvencijaIskljuci koja vrednost funkcije postavlja na najmanju moguću frekvenciju (na 87.5MHz).
(I ova metoda takođe ništa ne vraća, samo postavi vrednost frekvencije)
Napisati funkciju srednjaFrekvencija kojoj se prosleđuje niz radio stanica, 
a ona vraća koja je prosečna frekvencija prosleđenih radio stanica.
Napisati funkciju najbliziMaks kojoj se prosleđuje niz radio stanica, 
a funkcija vraća onu radio stanicu čija je frekvencija najbliža(jednaka) maksimalnoj frekvenciji.
Testirati rad napravljenih metoda.*/

class FMRadio
{
    private $stanica;
    private $frekvencija;
    private $jactona;
    public function __construct($s, $f, $j)
    {
        $this->stanica=$s;
        $this->setFrekvencija($f);
        $this->setJacTona($j);
    }
    public function setStanica($s)
    {
        $this->stanica=$s;
    }
    public function setFrekvencija($f)
    {
        if($f>=87.5 AND $f<=108)
        {
            $this->frekvencija=$f;
        }
    }
    public function setJacTona($j)
    {
        if($j>=0 AND $j<=20)
        {
            $this->jacinatona=$j;
        }
    }
    public function getStanica()
    {
        return $this->stanica;
    }
    public function getFrekvencija()
    {
        return $this->frekvencija;
    }
    public function getJactona()
    {
        return $this->jactona;
    }
    public function promeniZvuk($znak)
    {   
        $j1=$this->getJactona();
        if($znak=="-")
        {
            //setJacTona($this->jactona+1)
            $j1=$j1+1;
        }
        elseif($znak=="+")
        {
            //setJacTona($this->jactona-1)
            $j1=$j1-1;
        }
        return $this->setJactona($j1);         
    }
    public function frekvencijaIskljuci()
    {
        $this->frekvencija=87.5;
        //$this->frekvencija=87.5;
    }
}
$radiost=array();
$radiost[0]=new FMRadio("Radio S", 67.3, 88);
$radiost[1]=new FMRadio("Radio Karolina", 88.7, 56);
$radiost[2]=new FMRadio("Radio BelleAmie", 105.5, 109);
$radiost[3]=new FMRadio("Radio Classic", 108.7, 98);

foreach($radiost as $st)
{
echo "Izmenjene vrednosti radio stanica:".$st->promeniZvuk("-").", ".$st->frekvencijaIskljuci(87.5)."<br>";
}
function srednjaFrekvencija($radiost)
{   
    $sum=0;$br=0;
    foreach($radiost as $st)
    {   
        $sum+=$st->getFrekvencija();
        $br+=1;
    }
    return $srednjaf=$sum/$br;
}
echo "Srednja vrednost frekvencije svih radio stanica je: ".srednjaFrekvencija($st)."<br>";  

$max=$radiost[0]->getFrekvencija();
foreach($radiost as $st)
{   
    $f1=$st->getFrekvencija();
    if($f1>$max)
    {
        $max=$f1;
    }
}    
echo "Maksimalna frekvencija je: ".$max."<br>";

function NajbliziMax($f)
{   
    foreach($radiost as $st)
    {
        if($max==$st->getFrekvencija())
        {
            echo "Radiostanice frakvencije priblizne maximalnoj su: ".$st->getStanica().", ".$st->getFrekvencija().", ".$st->getJactona();
        }
    } 
}
NajbliziMax($f)




?>