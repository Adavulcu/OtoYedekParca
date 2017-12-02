<?php

class YedekParca
{

	private $ID;
	private $model;
	private $tur;
	private $isimParca;
	private $aciklama;
	private $image;
	private $adet;
	private $stokMiktari;

	function __construct($ID,$model,$tur,$isimParca,$aciklama,$image,$adet,$stokMiktari)
	{
		$this->ID=$ID;
		$this->model=$model;
		$this->tur=$tur;
		$this->isimParca=$isimParca;
		$this->aciklama=$aciklama;
		$this->image=$image;
		$this->setStokMiktari($stokMiktari);
		$this->setAdet($adet);
		
	}

	function setID($val){$this->ID=$val;}
	function getID(){return $this->ID;}

	function setModel($val){$this->model=$val;}
	function getModel(){return $this->model;}

	function setTur($val){$this->tur=$val;}
	function getTur(){return $this->tur;}

	function setIsimParca($val){$this->isimParca=$val;}
	function getIsimParca(){return $this->isimParca;}

	function setAciklama($val){$this->aciklama=$val;}
	function getAciklama(){return $this->aciklama;}

	function setImage($val){$this->image=$val;}
	function getImage(){return $this->image;}

	function setAdet($val){
		if($val>0 && $val<=$this->stokMiktari )
		{
			$this->adet=$val;
		}
		else if($val>=$this->stokMiktari)
		{
			$this->adet=$this->stokMiktari;
		}
		else
		{
			$this->adet=0;
		}
	}
	function getAdet(){return $this->adet;}

	function setStokMiktari($val){
		if($val>0)
		{
			$this->stokMiktari=$val;
		}
		else
		{
			$this->stokMiktari=0;
		}
	}
	function getStokMiktari(){return $this->stokMiktari;}


	function Display()
	{
		echo "ID= ".$this->getID().", model= ".$this->getModel().", tur= ".$this->getTur().", isim= ".$this->getIsimParca().", acıkalama= ".$this->getAciklama().
		", image yolu= ".$this->getImage().", adet= ".$this->getAdet().", stokMiktari= ".$this->getStokMiktari();
	}
}

$deneme=new YedekParca(1,2,"fren balatası","arka fren balatası","on numaradır","c:asdas",15,10);
$deneme->Display();






  ?>