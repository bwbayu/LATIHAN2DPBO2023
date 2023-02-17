<?php
/**Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin. */
// import file
include "human.php";

class SivitasAkademik extends Manusia {// deklarasi class SivitasAkademik yang merupakan inheritance dari class Human
    /*class SivitasAkademik menjadi child class dari class Human karena berdasarkan definisinya,
    sivitas akademik adalah sekelompok orang yang terlibat dalam kegiatan akademik.
    Oleh karena itu, secara objek, class Human dan SivitasAkademik itu sama yaitu manusia*/

    // private atribut
    private $asalUniv;
    private $emailEdu;

    // CONSTRUCTOR
    function __construct($nik, $nama, $gender, $asalUniv, $emailEdu) {
        parent::__construct($nik, $nama, $gender); // memanggil constructor dari parent class
        $this->asalUniv = $asalUniv;
        $this->emailEdu = $emailEdu;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    public function getAsalUniv() {
        /*metode yang digunakan sebagai setter untuk data asal universitas*/
        return $this->asalUniv;
    }

    public function setAsalUniv($asalUniv) {
        /*metode yang digunakan sebagai getter untuk data asal universitas*/
        $this->asalUniv = $asalUniv;
    }

    public function getEmailEdu() {
        /*metode yang digunakan sebagai setter untuk data email universitas*/
        return $this->emailEdu;
    }

    public function setEmailEdu($emailEdu) {
        /*metode yang digunakan sebagai getter untuk data email universitas*/
        $this->emailEdu = $emailEdu;
    }

    // DESTRUCTOR
    function __destruct(){}
}
?>