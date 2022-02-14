<?php

class DaftarSepakbola
{	
	// inisialisasi atribut private 
	
	private $nama = "";
	private $negara = "";
	private $tahun = 0;
	private $pemain = 0;

	// construksi atribut
	public function __construct($nama = "", $negara = "", $tahun = 0, $pemain = 0)
	{
		$this->nama = $nama;
		$this->negara = $negara;
		$this->tahun = $tahun;
		$this->pemain = $pemain;
	}
	
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	public function setNegara($negara){
		$this->negara = $negara;
	}

	public function getNegara(){
		return $this->negara;
	}

	public function setTahun($tahun){
		$this->tahun = $tahun;
	}

	public function getTahun(){
		return $this->tahun;
	}

	public function setPemain($pemain){
		$this->pemain = $pemain;
	}

	public function getPemain(){
		return $this->pemain;
	}

}

?>