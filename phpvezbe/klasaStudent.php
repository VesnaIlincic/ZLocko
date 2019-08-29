<?php
/*8.(Malo teži od ostalih zadataka)
Kreirati klasu Student koja ima atribute: jmbg, ime, prezime, nizOcena i presecna ocena.
Prilikom kreiranja konstruktora, prosledjuje se jmbg, ime, prezime i nizOcena, a automatski se izračuna prosečna
ocena ovog studenta. 
Takođe, voditi računa o tome da svaka od unetih ocena može biti isključivo ceo broj i to 6, 7, 8, 9 ili 10.
JMBG studenta mora biti string koji sadrži 13 karaktera.
Izračunata prosečna ocena se dodeli atributu prosecna ocena.
Napraviti i odgovarajuće getere i setere.
Napraviti metodu ispis koja ispisuje sve podatke o jednom studentu.
Napraviti niz studenata i koristiti ga u predstojećim funkcijama.
Napraviti funkciju imePrezime kojoj se prosleđuje ime i prezime, a funkcija vraća broj studenata sa tim imenom i prezimenom.
Napraviti funkciju srednjaOcena koja ispisuje koja je preosečna ocena svih ocena studenata.
Napraviti funkciju osrednji koja ispisuje studenta koji ima prosek najbliži srednjoj oceni svih studenata.
Napraviti ocenu najmanjaOcenaNajboljeg koja određuje najboljeg studenta i na ekranu ispisuje njegovu najslabiju ocenu.
Napisati funkciju najmanjaOcena koja vraća koja je najmanja ocena, uzimajući u obzir ocene svih ocena koje su studenti dobijali.
Napisati funkciju najcescaOcena koja vraća ocenu koju su studenti najčešće dobijali. 
Napisati funiciju rodjeniGodine kojoj se prosleđuje godina, a funkcija na ekranu ispisuje sve studente koji su rodjeni te godine. 
Godinu rođenja preuzeti (odrediti) iz JMBG-a studenta.*/

class Student
{
    private $jmbg;
    private $ime;
    private $prezime;
    private $nizocena;
    private $prosecnaocena;
    public function __construct($jmbg, $i, $p, $no, $pro)
    {
        $this->jmbg=$jmbg;
        $this->ime=$i;
        $this->prezime=$p;
        $this->setNizocena($no);
        $this->setProsecnaOcena($pro);
    }
    public function setJmbg($jmbg)
    {   
        if(strlen($jmbg)==13)
        {
            $this->jmbg=$jmbg;
        }    
    }
    public function setIme($i)
    {
        $this->ime=$i;
    }
    public function setPrezime($p)
    {
        $this->prezime=$p;
    }
    public function setNizOcena($no)
    {   
        $no=array();$j=0;
        if($n>=6 AND $n<=10)
        {
            $no[$j]=$n;
            $j++;
        }
        
    }
    public function setProsecnaOcena($pro)
    {
        $suma=0;$br=0;
        foreach($no as $n)
        {
            $suma+=$n;
            $br++;
        }
        $pro=$suma/$br;
    }
    public function getProsecnaOcena()
    {
        return $this->prosecnaocena;
    }
    public function getIme()
    {
        $this->ime;
    }
    public function getPrezime()
    {
        $this->prezime;
    }
    public function getJmbg()
    {
        $this->jmbg;
    }
    public function getNizOcena()
    {
        $this->nizocena;
    }
    public function Ispis()
    {
        echo "JMBG studenta je: ".$this->getJmbg().", njegovo ime: ".$this->getIme().", prezime:".$this->getPrezime().", ocene: ".$this->getNizOcena()." i prosecne ocene: ".$this->getProsecnaOcena().".<br>";
    }
}





?>