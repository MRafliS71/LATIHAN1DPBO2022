<?php
include "Mahasiswa.php";

$mahasiswa1 = new DaftarMahasiswa();
$mahasiswa1->setNim(2005381);
$mahasiswa1->setNama("Muhammad Rafli Syaputra");
$mahasiswa1->setNilai("A");
$mahasiswa1->setGender("Laki-laki");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

$mahasiswa2 = new DaftarMahasiswa(2011111, "De Intan Fitria", "A", "Perempuan", "Keperawatan", 4);

echo "________________________________________________________________________"."<br>";
echo "|---NIM---|----------Nama----------|--Nilai--|-----Gender-----|-------Prodi-------|--Semester--|"."<br>";
echo "------------------------------------------------------------------------------------------------"."<br>";
echo "|-".$mahasiswa1->getNim()."-|".$mahasiswa1->getNama()."|".$mahasiswa1->getNilai()."|".$mahasiswa1->getGender()."|".$mahasiswa1->getProdi()."|".$mahasiswa1->getSemester()."|"."<br>";
echo "------------------------------------------------------------------------------------------------"."<br>";
echo "|-".$mahasiswa2->getNim()."-|".$mahasiswa2->getNama()."|".$mahasiswa2->getNilai()."|".$mahasiswa2->getGender()."|".$mahasiswa2->getProdi()."|".$mahasiswa2->getSemester()."|"."<br>";
echo "------------------------------------------------------------------------------------------------"."<br>";

?>