<?php

class DaftarMahasiswa
{	
	// inisialisasi atribut private 
	private $nim = 0;
	private $nama = "";
	private $nilai = "";
	private $gender = "";
	private $prodi = "";
	private $semester = 0;

	// construksi atribut
	public function __construct($nim = 0, $nama = "", $nilai = "", 
								$gender = "", $prodi = "", $semester = 0)
	{
		$this->nim = $nim;
		$this->nama = $nama;
		$this->nilai = $nilai;
		$this->gender = $gender;
		$this->prodi = $prodi;
		$this->semester = $semester;
	}

	public function setNim($nim){
		$this->nim = $nim;
	}

	public function getNim(){
		return $this->nim;
	}
	
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	public function setNilai($nilai){
		$this->nilai = $nilai;
	}

	public function getNilai(){
		return $this->nilai;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getGender(){
		return $this->gender;
	}

	public function setProdi($prodi){
		$this->prodi = $prodi;
	}

	public function getProdi(){
		return $this->prodi;
	}

	public function setSemester($semester){
		$this->semester = $semester;
	}

	public function getSemester(){
		return $this->semester;
	}

}

?>