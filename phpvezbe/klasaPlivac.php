<?php
/*Kreirati klasu Plivac koja sadrži ime, godinu rodjenja i najbolji rezultat ove godine.
Napraviti odovarajuće konstruktore, getere i setere.
Napraviti metodu ispisi koja ispisuje sve podatke o plivaču.
Napraviti funkciju 
Napraviti funkciju topTen koja kao rezultat vraća niz od 10 najboljih rezultata ove godine.
Napraviti funkciju norma kojoj se prosleđuje norma i niz plivača, a funkcija vraća niz onih plivača koji ispunjavaju ovu normu.
Napisati funkciju normaNajmladji koja treba da na ekranu ispiše sve podatke o najmlađem igraču koji zadovoljava 
normu koja je zadata prethodnom funkcijom.*/

class Plivac
{
    private $ime;
    private $godrodj;
    private $najboljirez;
    public function __construct($i, $g, $n)
    {
        $this->ime=$i;
        $this->godrodj=$g;
        $this->najboljirez=$n;
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setGodRodj($g)
    {
        $this->godrodj=$g;
    }
    public function setNajboljiRez($n)
    {
        $this->najboljirez=$n;
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getGodRodj()
    {
        return $this->godrodj;
    }
    public function getNajboljiRez()
    {
        return $this->najboljirez;
    }
    public function Ispisi()
    {
        echo "Ime plivaca: ".$this->getIme().", god.rodjenja: ".$this->getGodRodj().". Njegov/njen najbolji rezultat ove godine je: ".$this->getNajboljiRez()."<br>";
    }
}

$plivac1=new Plivac("Mirko", 1992, 12.2);
$plivac2=new Plivac("Slavko", 1987, 10.9);
$plivac3=new Plivac("Marta", 1999, 16.3);
$plivac4=new Plivac("Dimitrije", 1998, 11.6);
$plivac5=new Plivac("Regina", 1996, 17.2);
$plivac6=new Plivac("Miodrag", 2000, 13.1);
$plivac7=new Plivac("Perica", 2001, 15.4);
$plivac8=new Plivac("Blagoje", 2000, 13.4);
$plivac9=new Plivac("Nikola", 2001, 10.8);
$plivac10=new Plivac("Ilija", 2002, 16.2);
$plivac11=new Plivac("Stefan", 2000, 13.7);
$plivac12=new Plivac("Boris", 2001, 12.1);
$plivaci=array($plivac1, $plivac2, $plivac3, $plivac4, $plivac5, $plivac6, $plivac7, $plivac8, $plivac9, $plivac10, $plivac11, $plivac12);

echo "<p><u>Spisak plivaca:</u></p>";
foreach($plivaci as $pliv)
{
    $pliv->Ispisi();
}
echo "<br>";
$niz1=array($plivac1->getNajboljiRez(),$plivac2->getNajboljiRez(),$plivac3->getNajboljiRez(),$plivac4->getNajboljiRez(),
           $plivac5->getNajboljiRez(),$plivac6->getNajboljiRez(),$plivac7->getNajboljiRez(),$plivac8->getNajboljiRez(),
           $plivac9->getNajboljiRez(),$plivac10->getNajboljiRez(),$plivac11->getNajboljiRez(),$plivac12->getNajboljiRez());
sort($niz1);
function TopTen($niz1)
{   
    $broj=10;
    foreach($niz1 as $ni1)
    {   
        if($broj!=0)
        {
            echo $ni1."<br>";
            $broj=$broj-1;
        }
    }
    return;
}
echo "<p><u>Top 10 rezultata:</u></p>";
echo TopTen($niz1);
echo "<br>";

$suma=0;$br=0;
foreach($plivaci as $pliv)
{   
    $rez=$pliv->getNajboljiRez();
    $suma+=$rez;
    $br++;
}
$norma=$suma/$br;
echo "Norma= ".$norma."<br><br>";
$niz2=array();
echo "<p><u>Plivaci koji zadovoljavaju normu su:</u></p>";
function Norma($norma, $plivaci)
{   
    $j=0;
    foreach($plivaci as $pliv)
    {
        if($norma>=$pliv->getNajboljiRez())
        {   
            $pliv->Ispisi();
            $niz2[$j]=$pliv->getGodRodj();
            $j++;
        }
    }
    rsort($niz2);
    $najml=$niz2[0];
    echo "<br>";
    echo "<p><u>Najmladji plivaci koji zadovoljavaju normu su:</u></p>";
    foreach($plivaci as $pliv)
    {
        if($najml==$pliv->getGodRodj() AND $norma>=$pliv->getNajboljiRez())
        {
            echo $pliv->Ispisi();
        }
    }
    return; 
}
echo Norma($norma, $plivaci);










?>