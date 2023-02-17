"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""
from SivitasAkademik import SivitasAkademik

# deklarasi class Mahasiswa yang merupakan inheritance dari class SivitasAkademik


class Mahasiswa(SivitasAkademik):
    """
    class Mahasiswa menjadi child class dari sivitas akademik karena sivitas akademik itu terdiri dari mahasiswa, dosen, dll
    """
    __dataNIM = []  # deklarasi class atribut untuk menampung data NIM

    # CONSTRUCTOR
    def __init__(self, nik, nama, gender, asalUniv, emailEdu, nim, prodi, fakultas):
        """semua atribut pada parameter tidak boleh kosong karena diperlukan untuk
        parent classnya"""
        super().__init__(nik, nama, gender, asalUniv,
                         emailEdu)   # memanggil constructor dari parent class
        self.nim = nim
        self.prodi = prodi
        self.fakultas = fakultas

        Mahasiswa.__dataNIM.append(nim)

    @property
    def nim(self):
        """ method yang digunakan sebagai getter untuk data NIM"""
        return self.__nim

    @nim.setter
    def nim(self, nim):
        """method yang digunakan sebagai setter untuk data NIM"""
        if not nim:  # validasi data NIM yang masuk
            raise ValueError("Missing NIM")
        if nim in self.__dataNIM:
            raise ValueError("Invalid NIM")
        self.__nim = nim

    @property
    def prodi(self):
        """ method yang digunakan sebagai getter untuk data program studi"""
        return self.__prodi

    @prodi.setter
    def prodi(self, prodi):
        """method yang digunakan sebagai setter untuk data program studi"""
        if not prodi:  # validasi data program studi yang masuk
            raise ValueError("Missing program studi")
        self.__prodi = prodi

    @property
    def fakultas(self):
        """ method yang digunakan sebagai getter untuk data fakultas"""
        return self.__fakultas

    @fakultas.setter
    def fakultas(self, fakultas):
        """method yang digunakan sebagai setter untuk data fakultas"""
        if not fakultas:  # validasi data fakultas yang masuk
            raise ValueError("Missing fakultas")
        self.__fakultas = fakultas

    def tampil(self):
        """method untuk menampilkan data dari class Mahasiswa dan parent class-nya"""
        super().tampil()
        print("NIM               : ", self.nim)
        print("Program Studi     : ", self.prodi)
        print("Fakultas          : ", self.fakultas)
        print("===========================================")

    def tampilMahasiswa(self):
        """method untuk menampilkan data dari class Mahasiswa"""
        print("============== Data Mahasiswa =============")
        print("NIM               : ", self.nim)
        print("Program Studi     : ", self.prodi)
        print("Fakultas          : ", self.fakultas)
