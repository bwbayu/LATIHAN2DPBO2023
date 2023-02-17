/*Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*/

// import library
#include <bits/stdc++.h>

// using standart namespace
using namespace std;

class Human // deklarasi class
{
    /*class Human menjadi parent class karena semua objek sivitas akademik itu berisi objek manusia ex. mahasiswa, dosen
    tapi tidak semua objek Human itu termasuk sivitas akademik ex. pengusaha*/
private:
    // private atribut
    string nik, nama, gender;

public:
    // CONSTRUCTOR
    Human(string nik, string nama, string gender)
    {
        this->nik = nik;
        this->nama = nama;
        this->gender = gender;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    void setNIK(string nik)
    {
        /*metode yang digunakan sebagai setter untuk data NIK*/
        this->nik = nik;
    }

    string getNIK()
    {
        /*metode yang digunakan sebagai getter untuk data NIK*/
        return this->nik;
    }

    void setNama(string nama)
    {
        /*metode yang digunakan sebagai setter untuk data nama*/
        this->nama = nama;
    }

    string getNama()
    {
        /*metode yang digunakan sebagai getter untuk data nama*/
        return this->nama;
    }

    void setGender(string gender)
    {
        /*metode yang digunakan sebagai setter untuk data jenis kelamin*/
        this->gender = gender;
    }

    string getGender()
    {
        /*metode yang digunakan sebagai getter untuk data jenis kelamin*/
        return this->gender;
    }

    void tampil()
    {
        /*Method untuk menampilkan data class Human*/
        cout << "NIK               : " << nik << endl;
        cout << "Nama              : " << nama << endl;
        cout << "Jenis Kelamin     : " << gender << endl;
    }

    // DESTRUCTOR
    ~Human() {}
};