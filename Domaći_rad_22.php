<?php
class Kompozicija
{
    var $naziv_kompozicije;
    var $ime_kompozitora;
    var $godina_izlaska;
    var $i;
    function Stampa()
    {
        echo "Naziv kompozicije: ".$this->naziv_kompozicije.", ime kompozitora: ".$this->ime_kompozitora.", godina izlaska: ".$this->godina_izlaska."<br>";
    }
    function Provera_Barok()
    {
        if($this->godina_izlaska>=1600 AND $this->godina_izlaska<=1750)
        {
            return true;
        }
        return false;
    }
    function Provera_Kompozitora()
    {
        if(strpos($this->ime_kompozitora, "Betoven")!==false)
        {
            return true;
        }
        return false;
    }
}
$kompozicija=array();
$kompozicija[1]=new Kompozicija;
$kompozicija[1]->naziv_kompozicije="Stabat mater";
$kompozicija[1]->ime_kompozitora="Djovani Batista Pergolezi";
$kompozicija[1]->godina_izlaska=1736;
$kompozicija[2]=new Kompozicija;
$kompozicija[2]->naziv_kompozicije="Requiem";
$kompozicija[2]->ime_kompozitora="Wolfgang Amadeus Mozart";
$kompozicija[2]->godina_izlaska=1791;
$kompozicija[3]=new Kompozicija;
$kompozicija[3]->naziv_kompozicije="Meseceva sonata";
$kompozicija[3]->ime_kompozitora="Ludvig Van Betoven";
$kompozicija[3]->godina_izlaska=1801;
for($i=1;$i<=3;$i++)
{
    $kompozicija[$i]->Stampa();
    if($kompozicija[$i]->Provera_Barok())
    {
        echo "Kompozicija je nastala u periodu baroka.<br>";
    }
    else
    {
        echo "Kompozicija nije nastala u periodu baroka.<br>";
    }
    if($kompozicija[$i]->Provera_Kompozitora())
    {
        echo "Ovu kompoziciju je komponovao Ludvig Van Betoven.<br>";
    }
    else
    {
        echo "Ovu kompoziciju nije komponovao Ludvig Van Betoven.<br>";
    }
}





?>