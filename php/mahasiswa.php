<?php
/**Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. */

// import file
include "sivitasakademik.php";

class Mahasiswa extends SivitasAkademik {// deklarasi class Mahasiswa yang merupakan inheritance dari class SivitasAkademik
    /*class Mahasiswa menjadi child class dari sivitas akademik karena sivitas akademik
    itu terdiri dari mahasiswa, dosen, dll*/

    // private atribut
    private $nim;
    private $prodi;
    private $fakultas;
    private $foto;

     // CONSTRUCTOR
    function __construct($nik, $nama, $gender, $asalUni, $emailEdu, $nim, $prodi, $fakultas, $foto) {
        parent::__construct($nik, $nama, $gender, $asalUni, $emailEdu);// memanggil constructor dari parent class
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
        $this->foto = $foto;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    public function getNIM() {
        /*metode yang digunakan sebagai getter untuk data NIM*/
        return $this->nim;
    }

    public function setNIM($nim) {
        /*metode yang digunakan sebagai setter untuk data NIM*/
        $this->nim = $nim;
    }

    public function getProdi() {
        /*metode yang digunakan sebagai getter untuk data program studi*/
        return $this->prodi;
    }

    public function setProdi($prodi) {
        /*metode yang digunakan sebagai setter untuk data program studi*/
        $this->prodi = $prodi;
    }

    public function getFakultas() {
        /*metode yang digunakan sebagai getter untuk data fakultas*/
        return $this->fakultas;
    }

    public function setFakultas($fakultas) {
        /*metode yang digunakan sebagai setter untuk data fakultas*/
        $this->fakultas = $fakultas;
    }

    public function getFoto() {
        /*metode yang digunakan sebagai getter untuk data foto*/
        return $this->foto;
    }

    public function setFoto($foto) {
        /*metode yang digunakan sebagai setter untuk data foto*/
        $this->foto = $foto;
    }

    // DESTRUCTOR
    function __destruct(){}
}

?>