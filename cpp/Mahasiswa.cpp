/*Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*/
// import library dan file
#include <bits/stdc++.h>
#include "SivitasAkademik.cpp"

// using standard namespace
using namespace std;

class Mahasiswa : public SivitasAkademik // deklarasi class Mahasiswa yang merupakan inheritance dari class SivitasAkademik
{
    /*class Mahasiswa menjadi child class dari sivitas akademik karena sivitas akademik
    itu terdiri dari mahasiswa, dosen, dll*/
private:
    // private atribut
    string nim, prodi, fakultas;

public:
    // CONSTRUCTOR
    Mahasiswa(string nik, string nama, string gender, string asalUniv, string emailEdu, string nim, string prodi, string fakultas)
        : SivitasAkademik(nik, nama, gender, asalUniv, emailEdu) // memanggil constructor dari parent class
    {
        this->nim = nim;
        this->prodi = prodi;
        this->fakultas = fakultas;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    void setNIM(string nim)
    {
        /*metode yang digunakan sebagai setter untuk data NIM*/
        this->nim = nim;
    }

    string getNIM()
    { /*metode yang digunakan sebagai getter untuk data NIM*/
        return this->nim;
    }

    void setProdi(string prodi)
    { /*metode yang digunakan sebagai setter untuk data program studi*/
        this->prodi = prodi;
    }

    string getProdi()
    { /*metode yang digunakan sebagai getter untuk data program studi*/
        return this->prodi;
    }

    void setFakultas(string fakultas)
    { /*metode yang digunakan sebagai setter untuk data fakultas*/
        this->fakultas = fakultas;
    }

    string getFakultas()
    { /*metode yang digunakan sebagai getter untuk data fakultas*/
        return this->fakultas;
    }

    void tampil()
    {
        /*method untuk menampilkan data dari class Mahasiswa dan parent class-nya*/
        SivitasAkademik::tampil(); // memanggil method tampil dari parent class
        cout << "NIM               : " << nim << endl;
        cout << "Program Studi     : " << prodi << endl;
        cout << "Fakultas          : " << fakultas << endl;
        cout << "===========================================\n";
    }

    void tampilMahasiswa()
    {
        /*method untuk menampilkan data dari class Mahasiswa*/
        cout << "============== Data Mahasiswa =============\n";
        cout << "NIM               : " << nim << endl;
        cout << "Program Studi     : " << prodi << endl;
        cout << "Fakultas          : " << fakultas << endl;
    }

    // DESTRUCTOR
    ~Mahasiswa() {}
};