class Human { // deklarasi class
    /*
     * class Human merupakan base class / class parent dari subclassnya.
     * class ini berisi atribut NIK, nama, dan jenis kelamin
     */

    // private atribut
    private String nik;
    private String nama;
    private String gender;

    // CONSTRUCTOR
    public Human() {
        /* konstruktor yang mengatur atribut ke default value */
        this.nik = "";
        this.nama = "";
        this.gender = "";
    }

    public Human(String nik, String nama, String gender) {
        /* konstruktor yang mengatur atribut berdasarkan parameter */
        this.nik = nik;
        this.nama = nama;
        this.gender = gender;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    public String getNIK() {
        /* metode yang digunakan sebagai getter untuk data NIK */
        return nik;
    }

    public void setNIK(String nik) {
        /* metode yang digunakan sebagai setter untuk data NIK */
        this.nik = nik;
    }

    public String getNama() {
        /* metode yang digunakan sebagai getter untuk data nama */
        return nama;
    }

    public void setNama(String nama) {
        /* metode yang digunakan sebagai setter untuk data nama */
        this.nama = nama;
    }

    public String getGender() {
        /* metode yang digunakan sebagai getter untuk data jenis kelamin */
        return gender;
    }

    public void setGender(String gender) {
        /* metode yang digunakan sebagai setter untuk data jenis kelamin */
        this.gender = gender;
    }

}
