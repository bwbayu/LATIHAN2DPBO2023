/*Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*/
// import library dan file
#include <bits/stdc++.h>
#include "Human.cpp"

// using standard namespace
using namespace std;

class SivitasAkademik : public Human // deklarasi class SivitasAkademik yang merupakan inheritance dari class Human
{
    /*class SivitasAkademik menjadi child class dari class Human karena berdasarkan definisinya,
    sivitas akademik adalah sekelompok orang yang terlibat dalam kegiatan akademik.
    Oleh karena itu, secara objek, class Human dan SivitasAkademik itu sama yaitu manusia*/
private:
    // private atribut
    string asalUniv, emailEdu;

public:
    // CONSTRUCTOR
    SivitasAkademik(string nik, string nama, string gender, string asalUniv, string emailEdu)
        : Human(nik, nama, gender) // memanggil constructor dari parent class
    {
        this->asalUniv = asalUniv;
        this->emailEdu = emailEdu;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    void setAsalUniv(string asalUniv)
    { /*metode yang digunakan sebagai setter untuk data asal universitas*/
        this->asalUniv = asalUniv;
    }

    string getAsalUniv()
    { /*metode yang digunakan sebagai getter untuk data asal universitas*/
        return this->asalUniv;
    }

    void setEmailEdu(string emailEdu)
    { /*metode yang digunakan sebagai setter untuk data email universitas*/
        this->emailEdu = emailEdu;
    }

    string getEmailEdu()
    { /*metode yang digunakan sebagai getter untuk data email universitas*/
        return this->emailEdu;
    }

    void tampil()
    {
        /*method untuk menampilkan data dari class SivitasAkademik dan parent class-nya*/
        Human::tampil(); // memanggil method tampil dari parent class
        cout << "Asal Universitas  : " << asalUniv << endl;
        cout << "Email Universitas : " << emailEdu << endl;
    }

    void tampilSivitasAkademik()
    {
        /*method untuk menampilkan data dari class SivitasAkademik*/
        cout << "========== Data Sivitas Akademik ==========\n";
        cout << "Asal Universitas  : " << asalUniv << endl;
        cout << "Email Universitas : " << emailEdu << endl;
    }

    // DESTRUCTOR
    ~SivitasAkademik() {}
};