<?php
    class Osoba
    {
        private $ime;
        private $prezime;
        private $godRodj;
        private $gradRodj;

        public function __construct($ime, $prezime, $godRodj, $gradRodj)
        {
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setGodRodj($godRodj);
            $this->setGradRodj($gradRodj);
        }

        public function setIme($ime)
        {
            $this->ime = $ime;
        }
        public function setPrezime($prezime)
        {
            $this->prezime = $prezime;
        }
        public function setGodRodj($godRodj)
        {
            $this->godRodj = $godRodj;
        }
        public function setGradRodj($gradRodj)
        {
            $this->gradRodj = $gradRodj;
        }

        public function getIme()
        {
            return $this->ime;
        }
        public function getPrezime()
        {
            return $this->prezime;
        }
        public function getGodRodj()
        {
            return $this->godRodj;
        }
        public function getGradRodj()
        {
            return $this->gradRodj;
        }

        public function ispisiOsobu()
        {
            echo "Ime i prezime: " . $this->getIme() . " " . 
            $this->getPrezime() . "; Godina rođenja: " . $this->getGodRodj() . 
            "; Grad rođenja: " . $this->getGradRodj() . "<br>"; 
        }
    }

    class Kosarkas extends Osoba
    {
        private $visina;
        private $tezina;
        //private $brojNaDresu;
        private $brPoena;
        private $brUtakmica;
        private $pozicija;
        //private $reprezentacija;

        public function __construct($ime, $prezime, $godRodj, $gradRodj, $visina, 
        $tezina, $brPoena, $brUtakmica, $pozicija)
        {
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setGodRodj($godRodj);
            $this->setGradRodj($gradRodj);
            $this->setVisina($visina);
            $this->setTezina($tezina);
            $this->setBrPoena($brPoena);
            $this->setBrUtakmica($brUtakmica);
            $this->setPozicija($pozicija);
        }

        public function setVisina($visina)
        {
            $this->visina = $visina;
        }
        public function setTezina($tezina)
        {
            $this->tezina = $tezina;
        }
        public function setBrPoena($brPoena)
        {
            $this->brPoena = $brPoena;
        }
        public function setBrUtakmica($brUtakmica)
        {
            $this->brUtakmica = $brUtakmica;
        }
        public function setPozicija($pozicija)
        {
            $this->pozicija = $pozicija;
        }

        public function getVisina()
        {
            return $this->visina;
        }
        public function getTezina()
        {
            return $this->tezina;
        }
        public function getBrPoena()
        {
            return $this->brPoena;
        }
        public function getBrUtakmica()
        {
            return $this->brUtakmica;
        }
        public function getPozicija()
        {
            return $this->pozicija;
        }

        public function ispisiKosarkasa()
        {
            echo "Ime i prezime: " . $this->getIme() . " " . $this->getPrezime() . 
            "; Godina rođenja: " . $this->getGodRodj() . "; Grad rođenja: " . $this->getGradRodj() . 
            "; Visina: " . $this->getVisina() . "; Težina: " . $this->getTezina() . "; Ukupan broj poena: " . 
            $this->getBrPoena() . "; Ukupan broj utakmica: " . $this->getBrUtakmica() . "; Pozicija: " . 
            $this->getPozicija(); 
        }
    }

	function prosecanBroj($k)
	{
		$prosek = $k->getBrPoena() / $k->getBrUtakmica();
		return $prosek;
	}
    
    $k1 = new Kosarkas ("Mika", "Mikic", 1990, "Nis", 215, 130, 32, 5, 5);
    $k2 = new Kosarkas ("Pera", "Peric", 1990, "Nis", 211, 109, 32, 5, 5);
    $k3 = new Kosarkas ("Laza", "Lazic", 1990, "Nis", 200, 100, 32, 5, 5);
    $kosarkasi = array($k1, $k2, $k3);
	
	echo "Prosecan broj poena je: " . prosecanBroj($k1);
	
	function teskiCentar($k)
	{
		if($k->getPozicija() == 5 && $k->getVisina() >= 210 && $k->getTezina() >= 110)
		{
			return " Teski centar";
		}
	}

	foreach($kosarkasi as $k)
	{   
        $k->ispisiKosarkasa();
		echo "<span style='color:red'>".teskiCentar($k)."</span>";
	}
	
	
	
?>