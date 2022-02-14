<?php
include "Sepakbola.php";

$Team1 = new DaftarSepakbola();
$Team1->setNama("Barcelona FC");
$Team1->setNegara("Spanyol");
$Team1->setTahun(1890);
$Team1->setPemain(64);

$Team2 = new DaftarSepakbola("Manchester", "Inggris", 1877, 59);


echo "Team Sepakbola 1 : ". $Team1->getNama() ."<br>";
echo "Asal Negara : ". $Team1->getNegara()."<br>";
echo "Tahun Berdiri : ". $Team1->getTahun()."<br>";
echo "Jumlah Pemain : ". $Team1->getPemain()."<br>";
echo "<br>";
echo "Team Sepakbola 2 : ".$Team2->getNama()."<br>";
echo "Asal Negara : ". $Team2->getNegara()."<br>";
echo "Tahun Berdiri : ". $Team2->getTahun()."<br>";
echo "Jumlah Pemain : ". $Team2->getPemain()."<br>";

?>