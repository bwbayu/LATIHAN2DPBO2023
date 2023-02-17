"""Saya Bayu Wicaksono NIM 2106836 mengerjakan soal Latihan 2 dalam mata kuliah Desain Pemrograman Berorientasi 
Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin."""
# import file
from Mahasiswa import Mahasiswa

dataMhs = []  # deklarasi list untuk menampung objek mahasiswa

# MEMASUKKAN DATA HARDCODE
# Mahasiswa 1
mhs1 = Mahasiswa("123", "Minji", "perempuan", "Ador", "Minji@Ador.edu",
                 "210", "Seni Musik", "New Jeans")
dataMhs.append(mhs1)
# # Mahasiswa 2
mhs2 = Mahasiswa("124", "Haerin", "perempuan", "Ador", "Haerin@Ador.edu",
                 "211", "Seni Musik", "New Jeans")
dataMhs.append(mhs2)
# Mahasiswa 3
mhs3 = Mahasiswa("125", "Hyein", "perempuan", "Ador", "Hyein@Ador.edu",
                 "212", "Seni Musik", "New Jeans")
dataMhs.append(mhs3)
# Mahasiswa 4
mhs4 = Mahasiswa("126", "Danielle", "perempuan", "Ador", "Danielle@Ador.edu",
                 "213", "Seni Musik", "New Jeans")
dataMhs.append(mhs4)
# Mahasiswa 5
mhs5 = Mahasiswa("127", "Hanni", "perempuan", "Ador", "Hanni@Ador.edu",
                 "214", "Seni Musik", "New Jeans")
dataMhs.append(mhs5)

# MENAMPILKAN DATA
# menampilkan semua data
print("============== Data Mahasiswa =============")
for i in range(len(dataMhs)):
    print("> Mahasiswa " + str(i+1))
    dataMhs[i].tampil()
