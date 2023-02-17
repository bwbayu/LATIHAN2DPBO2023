/*Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*/
// import library dan file
#include <bits/stdc++.h>
#include "Mahasiswa.cpp"

// using standard namespace
using namespace std;

int main()
{
    vector<Mahasiswa> dataMhs; // deklarasi vector untuk menampung objek mahasiswa
    // MEMASUKKAN DATA HARDCODE
    Mahasiswa mhs1("123", "Minji", "perempuan", "Ador", "Minji@Ador.edu", "210", "Seni Musik", "New Jeans");
    dataMhs.push_back(mhs1);
    Mahasiswa mhs2("124", "Haerin", "perempuan", "Ador", "Haerin@Ador.edu", "211", "Seni Musik", "New Jeans");
    dataMhs.push_back(mhs2);
    Mahasiswa mhs3("125", "Hyein", "perempuan", "Ador", "Hyein@Ador.edu", "212", "Seni Musik", "New Jeans");
    dataMhs.push_back(mhs3);
    Mahasiswa mhs4("126", "Danielle", "perempuan", "Ador", "Danielle@Ador.edu", "213", "Seni Musik", "New Jeans");
    dataMhs.push_back(mhs4);
    Mahasiswa mhs5("127", "Hanni", "perempuan", "Ador", "Hanni@Ador.edu", "214", "Seni Musik", "New Jeans");
    dataMhs.push_back(mhs5);

    // MENAMPILKAN DATA MAHASISWA
    cout << "============== Data Mahasiswa =============\n";
    for (int i = 0; i < dataMhs.size(); i++)
    {
        cout << "> Mahasiswa " << i + 1 << endl;
        dataMhs[i].tampil();
    }

    return 0;
}