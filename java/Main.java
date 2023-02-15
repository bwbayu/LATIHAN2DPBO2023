import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        ArrayList<Mahasiswa> dataMhs = new ArrayList<>(); // array untuk menampung objek mahasiswa
        // DATA MAHASISWA 1
        Mahasiswa mhs = new Mahasiswa("123", "hyerin", "perempuan", "abc", "hyerin@abc.edu", "210", "Ilmu Komputer",
                "FMIPA"); // instansiasi objek mahasiswa
        dataMhs.add(mhs); // menambahkan objek mahasiswa ke list

        // DATA MAHASISWA 2
        Mahasiswa mhs1 = new Mahasiswa("124", "minji", "perempuan", "abc", "minji@abc.edu", "211", "Ilmu Komputer",
                "FMIPA"); // instansiasi objek mahasiswa
        dataMhs.add(mhs1); // menambahkan objek mahasiswa ke list

        // DATA MAHASISWA 3
        Mahasiswa mhs2 = new Mahasiswa("125", "bayu", "laki-laki", "abc", "bayu@abc.edu", "212", "Ilmu Komputer",
                "FMIPA"); // instansiasi objek mahasiswa
        dataMhs.add(mhs2); // menambahkan objek mahasiswa ke list

        // MENAMPILKAN DATA MAHASISWA
        System.out.println("----------DATA MAHASISWA----------");
        for (int i = 0; i < dataMhs.size(); i++) {
            System.out.println("==========================================");
            System.out.println("NIK               : " + dataMhs.get(i).getNIK());
            System.out.println("Nama              : " + dataMhs.get(i).getNama());
            System.out.println("Jenis Kelamin     : " + dataMhs.get(i).getGender());
            System.out.println("Asal Universitas  : " + dataMhs.get(i).getAsalUniv());
            System.out.println("Email Universitas : " + dataMhs.get(i).getEmailEdu());
            System.out.println("NIM               : " + dataMhs.get(i).getNim());
            System.out.println("Program Studi     : " + dataMhs.get(i).getProdi());
            System.out.println("Fakultas          : " + dataMhs.get(i).getFakultas());
        }
    }
}

// Penjelasan:
// Kelas Manusia adalah kelas induk (parent class) yang memiliki atribut nik,
// nama, dan jenisKelamin.
// Kelas Mahasiswa adalah kelas anak (child class) dari Manusia, dan memiliki
// tambahan atribut nim, prodi, dan fakultas. Kelas ini juga mewarisi method
// info() dari Manusia dan menambahkan output untuk atribut yang dimilikinya
// sendiri.
// Kelas SivitasAkademik adalah kelas anak (child class) dari Mahasiswa, dan
// memiliki tambahan atribut asalUniv dan emailEdu. Kelas ini juga mewarisi
// method info() dari Mahasiswa dan menambahkan output untuk atribut yang
// dimilikinya sendiri.
// Method info() pada ketiga kelas