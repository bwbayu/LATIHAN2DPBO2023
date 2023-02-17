<?php
/**Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. */

// import file
include "Crud.php";

$dataMahasiswa = array(); #deklarasi tampungan data
$temp = new Crud($dataMahasiswa); # instansiasi objek crud

// MENAMBAHKAN DATA HARDCODE
$temp->tambahData(0, "123", "Minji", "perempuan", "Ador", "Minji@Ador.edu", "210", "Seni Musik", "New Jeans", "asset/minji.jpg");
$temp->tambahData(1, "124", "Haerin", "perempuan", "Ador", "Haerin@Ador.edu", "211", "Seni Musik", "New Jeans", "asset/haerin.jpg");
$temp->tambahData(2, "125", "Hyein", "perempuan", "Ador", "Hyein@Ador.edu", "212", "Seni Musik", "New Jeans", "asset/hyein.jpg");
$temp->tambahData(3, "126", "Danielle", "perempuan", "Ador", "Danielle@Ador.edu", "213", "Seni Musik", "New Jeans", "asset/danielle.jpg");
$temp->tambahData(4, "127", "Hanni", "perempuan", "Ador", "Hanni@Ador.edu", "214", "Seni Musik", "New Jeans", "asset/hanni.jpg");


// MENAMPILKAN DATA
echo "Data Mahasiswa";
$temp->tampil();

?>