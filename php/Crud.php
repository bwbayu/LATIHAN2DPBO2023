<?php
/*Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*/
// import file
require("mahasiswa.php");

class Crud{ //deklarasi class
    /* class Crud berisi array of object dari class mahasiswa 
    yang digunakan untuk mmeodifikasi array tersebut, seperti
    menambahkan data, menampilkan data, memperbaharui data, dan
    menghapus data */

    // private atribut
    private $dataMhs = array();

    // CONSTRUCT
    public function __construct($data = array()){
        /* konstruktor yang menerima parameter dengan tipe data array sebagai inputannya*/ 
        $this->dataMhs = $data;
    }

    // PUBLIC METHOD
    public function tambahData($idx, $nik, $nama, $gender, $asalUni, $emailEdu, $nim, $prodi, $fakultas, $foto=""){
        /*method yang digunakan untuk menambahkan data baru
        ke dalam vector*/
        $this->dataMhs[$idx] = new Mahasiswa($nik, $nama, $gender, $asalUni, $emailEdu, $nim, $prodi, $fakultas, $foto); #instansiasi objek mahasiswa
    }

    public function tampil(){
        /*method yang digunakan untuk menampilkan data mahasiswa
        yang ada di dalam vector*/
        echo "<table border='1'>";
        echo "<tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Asal Universitas</th>
            <th>Email Universitas</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
            <th>Foto Profil</th>
            </tr>";
        for($i = 0; $i < sizeof($this->dataMhs); $i++){
            echo "<tr><td>";
            echo $this->dataMhs[$i]->getNIK();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getNama();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getGender();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getAsalUniv();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getEmailEdu();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getNIM();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getProdi();
            echo "</td><td>";
            echo $this->dataMhs[$i]->getFakultas();
            echo "</td><td>";
            echo "<img src='" . $this->dataMhs[$i]->getFoto(). "'style='width:100px'>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    // DESTRUCTOR
    function __destruct(){}
}

?>