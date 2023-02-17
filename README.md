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
- class Human memiliki 3 atribut yaitu NIK, nama, dan jenis kelamin. class Human merupakan parent class. method yang tersedia pada class ini terdiri dari setter dan getter untuk setiap atributnya.

2. class SivitasAkademik
- class SivitasAkademik memiliki 2 atribut yaitu asal universitas dan email universitas. class SivitasAkademik merupakan subclass dari class Human karena sivitas akademik adalah sekumpulan manusia yang terdiri dari mahasiswa dan dosen, makanya class ini merupakan child dari class Human. class SivitasAkademik merupakan parent class untuk class Mahasiswa.

3. class Mahasiswa
- class Mahasiswa memiliki 3 atribut yaitu NIM, program studi, dan fakultas. class Mahasiswa merupakan child dari class SivitasAkademik karena mahasiswa termasuk kedalam komunitas sivitas akademik.

# Alur Program
Pada program java, inputan dilakukan secara manual/hardcode, dan output dari program ini berupa data mahasiswa yang tersedia.

# Dokumentasi
- program PHP


![dokumentasi_php](https://user-images.githubusercontent.com/100755457/219675741-70836583-ac3f-4402-acb6-860025bb092d.png)

- Pada program java.


![dokumentasi_java](https://user-images.githubusercontent.com/100755457/218934341-1f3400cf-f02e-4f2b-9b2f-5ee2927229f9.png)
