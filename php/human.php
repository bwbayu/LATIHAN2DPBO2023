<?php
/**Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. */
class Manusia {
    /**class Human menjadi parent class karena semua objek sivitas akademik itu berisi objek manusia ex. mahasiswa, dosen
    tapi tidak semua objek Human itu termasuk sivitas akademik ex. pengusaha */
    
    // PRIVATE ATRIBUT
    private $nik;
    private $nama;
    private $gender;

    //  CONSTRUCTOR
    function __construct($nik, $nama, $gender) {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->gender = $gender;
    }

    # PUBLIC METHPD
    # SETTER & GETTER

    public function getNIK() {
        /*metode yang digunakan sebagai getter untuk data NIK*/
        return $this->nik;
    }

    public function setNIK($nik) {
        /*metode yang digunakan sebagai setter untuk data NIK*/
        $this->nik = $nik;
    }

    public function getNama() {
        /*metode yang digunakan sebagai getter untuk data nama*/
        return $this->nama;
    }

    public function setNama($nama) {
        /*metode yang digunakan sebagai setter untuk data nama*/
        $this->nama = $nama;
    }

    public function getGender() {
        /*metode yang digunakan sebagai getter untuk data jenis kelamin*/
        return $this->gender;
    }

    public function setGender($gender) {
        /*metode yang digunakan sebagai setter untuk data jenis kelamin*/
        $this->gender = $gender;
    }

    // DESTRUCTOR
    function __destruct(){}
}

?>