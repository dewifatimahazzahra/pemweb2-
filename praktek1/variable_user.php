<?php
//definisikan variable
$nama = 'Septian Si';
$umur = 20;
$berat = 61;

//menampilkan nilai variable
echo 'Nama : ' . $nama;
echo '<br/>Umur : '. $umur.' Tahun';
echo '<br/>Berat : '. $berat.' Kg' ;

echo "<br />";
echo "<br />";

//variable sistem
echo 'Dokumen Root ' .$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File ' .$_SERVER["PHP_SELF"];

echo "<br />";
echo "<br />";

//variable konstan
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 8 ;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan jari-jari '.$jari. ' : ' .$luas;
echo '<br/>Kelilingnya : '.$kll;

echo "<hr>";

echo 'Nama databasenya : ' .DBNAME;
echo '<br/>Lokasi databasenya ada di ' .DBSERVER;

?>