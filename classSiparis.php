<?php 

 class Siparis{

 	private $ID;
 	private $IDYedekParca;
 	private $IDKargo;
 	private $tarih;
 	private $tutar;
 	private $adet;
 	private $IDDurum;
 	private $IDOdemeSecenegi;
 	private $IDFatura;

 	function __construct($ID,$IDYedekParca,$IDKargo,$IDDurum,$IDOdemeSecenegi,$IDFatura,$adet,$tarih)
 	{
 		$this->ID=$ID;
 		$this->IDYedekParca=$IDYedekParca;
 		$this->IDKargo=$IDKargo;
 		$this->IDFatura=$IDFatura;
 		$this->IDDurum=$IDDurum;
 		$this->IDOdemeSecenegi=$IDOdemeSecenegi;
 		$this->adet=$adet;
 		$this->tarih=$tarih;
 	}

 	function setID($val){$this->ID=$ID;}
 	function getID(){return $this->ID;}

 	function setIDYedekParca($val){$this->IDYedekParca=$val;}
 	function getIDYedekParca(){return $this->IDYedekParca;}

 	function setIDKargo($val){$this->IDKargo=$val;}
 	function getIDKargo(){return $this->IDKargo;}

 	function setIDFatura($val){$this->IDFatura=$val;}
 	function getIDFatura(){return $this->IDFatura;}

 	function setIDDurum($val){$this->IDDurum=$val;}
 	function getIDDurum(){return $this->IDDurum;}

 	function setIDOdemeSecenegi($val){$this->IDOdemeSecenegi=$val;}
 	function getIDOdemeSecenegi(){return $this->IDOdemeSecenegi;}

 	function setAdet($val){$this->adet=$val;}
 	function getAdet(){return $this->adet;}

 	function setTarih($val){$this->tarih=$val;}
 	function getTarih(){return $this->tarih;}

 	function Display()
 	{
 		echo "ID= ".$this->getID().", IDYedekParca= ".$this->getIDYedekParca().", IDKargo= ".$this->getIDKargo().", IDFatura= ".$this->getIDFatura().
 		", IDDurum= ".$this->getIDDurum().", Odeme= " .$this->getIDOdemeSecenegi().", Adet= ".$this->getAdet().", tarih= ".$this->getTarih();
 	}
 }

$deneme=new Siparis(1,2,3,4,5,6,7,"aralık");
$deneme->Display();

 ?>