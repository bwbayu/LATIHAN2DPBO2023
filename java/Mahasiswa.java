class Mahasiswa extends SivitasAkademik {// deklarasi class Mahasiswa pewarisan dari class SivitasAkademik
    /*
     * class Mahasiswa merupakan sub class dari class SivitasAkademik.
     * class Mahasiswa memiliki atribut NIM,nama, jenis kelamin, prodi, dan
     * fakultas.
     * atribut nama dan jenis kelamin tidak dideklarasi lagi pada class ini karena
     * sudah
     * dideklarasi di parent classnya.
     */

    // private atribut
    private String nim;
    private String prodi;
    private String fakultas;

    // CONSTRUCTOR
    Mahasiswa() {
        /* konstruktor yang mengatur atribut ke default value */
        super(); // memanggil constructor dari parent class
        this.nim = "";
        this.prodi = "";
        this.fakultas = "";
    }

    Mahasiswa(String nik, String nama, String gender, String asalUniv, String emailEdu, String nim, String prodi,
            String fakultas) {
        /* konstruktor yang mengatur atribut berdasarkan parameter */
        super(nik, nama, gender, asalUniv, emailEdu); // memanggil constructor dari parent class
        this.nim = nim;
        this.prodi = prodi;
        this.fakultas = fakultas;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    public String getNim() {
        /* metode yang digunakan sebagai getter untuk data NIM */
        return nim;
    }

    public void setNim(String nim) {
        /* metode yang digunakan sebagai setter untuk data NIM */
        this.nim = nim;
    }

    public String getProdi() {
        /* metode yang digunakan sebagai getter untuk data program studi */
        return prodi;
    }

    public void setProdi(String prodi) {
        /* metode yang digunakan sebagai setter untuk data program studi */
        this.prodi = prodi;
    }

    public String getFakultas() {
        /* metode yang digunakan sebagai getter untuk data fakultas */
        return fakultas;
    }

    public void setFakultas(String fakultas) {
        /* metode yang digunakan sebagai setter untuk data fakultas */
        this.fakultas = fakultas;
    }
}
