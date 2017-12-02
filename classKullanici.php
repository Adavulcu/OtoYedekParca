<?php 

	class Kullanici{

		private $Id;
		private $ad;
		private $soyad;
		private $adres;
		private $telefon;
		private $ePosta;
		private $durum;
		private $statu;

		function __construct($Id ,$ad,$soyad,$adres,$telefon,$ePosta,$durum,$statu)
		{
			#$this->setIdKullanici($IdKullanici);
			$this->Id=$Id;
			$this->ad=$ad;
			$this->soyad=$soyad;
			$this->adres=$adres;
			$this->telefon=$telefon;
			$this->ePosta=$ePosta;
			$this->durum=$durum;
			$this->statu=$statu;
			
	}

	function setId($val){$this->Id=$val;}
	function getId(){return $this->Id;}

	function setAd($val){$this->ad=$val;}
	function getAd(){return $this->ad;}

	function setSoyad($val){$this->soyad=$val;}
	function getSoyad(){return $this->soyad;}

	function setAdres($val){$this->adres=$val;}
	function getAdres(){return $this->adres;}

	function setTelefon($val){$this->telefon=$val;}
	function getTelefon(){return $this->telefon;}

	function setEposta($val){$this->ePosta=$val;}
	function getEposta(){return $this->ePosta;}

	function setDurum($val){$this->durum=$val;}
	function getDurum(){return $this->durum;}

	function setStatu($val){$this->statu=$val;}
	function getStatu(){return $this->statu;}


	function Display()
	{
			echo "ID= ".$this->getId().", ad= " .$this->ad.", soyad= ".$this->soyad.", adres=".$this->adres.", telefon= ".$this->telefon.", e Posta= ".$this->ePosta.", durum= ".$this->durum.", statu= ".$this->statu;
	}
}
$deneme =new Kullanici(1,"apo","davulcu","denizli",123,"abc","aktif",1);
#$deneme->setIdKullanici(-5);
$deneme ->Display();
	
 ?>