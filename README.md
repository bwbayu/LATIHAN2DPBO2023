## Janji
Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Tugas latihan 2 DPBO 2023
Buatlah program berbasis OOP menggunakan bahasa pemrograman C++, Java, Python, dan PHP yang mengimplementasikan konsep Multi-level Inheritance pada kelas - kelas tersebut:
- Mahasiswa: NIM, nama, jenis_kelamin, fakultas, prodi
- Human: NIK, nama, jenis_kelamin
- SivitasAkademik: asal_universitas, email_edu

# Desain Program
program ini dibuat menggunakan 3 class, yaitu :
1. class Human
- class Human memiliki 3 atribut yaitu NIK, nama, dan jenis kelamin. class Human menjadi parent class untuk class SivitasAkademik karena semua objek sivitas akademik itu berisi objek manusia ex. mahasiswa, dosen tapi tidak semua objek Human itu termasuk sivitas akademik ex. pengusaha. Method yang tersedia pada class ini terdiri dari setter dan getter untuk setiap atributnya, serta method tampil untuk menampilkan data.

2. class SivitasAkademik
- class SivitasAkademik memiliki 2 atribut yaitu asal universitas dan email universitas. class SivitasAkademik menjadi child class dari class Human karena berdasarkan definisinya, sivitas akademik adalah sekelompok orang yang terlibat dalam kegiatan akademik. Oleh karena itu, secara objek, class Human dan SivitasAkademik itu sama sama manusia. class SivitasAkademik juga merupakan parent class untuk class Mahasiswa. Method yang tersedia pada class ini terdiri dari setter dan getter untuk setiap atributnya, serta 2 method tampil, yaitu menampilkan data dari class SivitasAkademik dan menampilkan data dari class SivitasAkademik beserta parent class-nya.

3. class Mahasiswa
- class Mahasiswa memiliki 3 atribut yaitu NIM, program studi, dan fakultas. class Mahasiswa menjadi child class dari sivitas akademik karena sivitas akademik itu terdiri dari mahasiswa, dosen, dll. Method yang tersedia pada class ini terdiri dari setter dan getter untuk setiap atributnya, serta 2 method tampil, yaitu menampilkan data dari class Mahasiswa dan menampilkan data dari class Mahasiswa beserta parent class-nya.

Berikut adalah design dari program dengan menggunakan class diagram.

![design](https://user-images.githubusercontent.com/100755457/220111434-6ef57793-7990-47b0-bd35-b395e9fee004.jpg)


# Alur Program
Menginisialisasikan list untuk menampung data objek Mahasiswa kemudian data di inputkan secara manual/hardcode lalu data yang telah di inputkan melalui constructor tiap class akan ditampilkan berupa list Data Mahasiswa.

# Dokumentasi
- program PHP


![dokumentasi_php](https://user-images.githubusercontent.com/100755457/219675741-70836583-ac3f-4402-acb6-860025bb092d.png)

- Pada program java.


![dokumentasi_java](https://user-images.githubusercontent.com/100755457/218934341-1f3400cf-f02e-4f2b-9b2f-5ee2927229f9.png)
