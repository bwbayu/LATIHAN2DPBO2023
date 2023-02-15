class SivitasAkademik extends Human {// deklarasi class SivitasAkademik pewarisan dari class Human
    /*
     * Class SivitasAkademik merupakan subclass dari class Human dan parent
     * class dari class Mahasiswa. class ini memiliki atribut asal universitas,
     * dan email universitas
     */

    // private atribut
    private String asalUniv;
    private String emailEdu;

    // CONSTRUCTOR
    SivitasAkademik() {
        /* konstruktor yang mengatur atribut ke default value */
        super();// memanggil constructor dari parent class
        this.asalUniv = "";
        this.emailEdu = "";
    }

    SivitasAkademik(String nik, String nama, String gender, String asalUniv, String emailEdu) {
        /* konstruktor yang mengatur atribut berdasarkan parameter */
        super(nik, nama, gender);// memanggil constructor dari parent class
        this.asalUniv = asalUniv;
        this.emailEdu = emailEdu;
    }

    // PUBLIC METHOD
    // SETTER & GETTER

    public String getAsalUniv() {
        /* metode yang digunakan sebagai getter untuk data asal universitas */
        return asalUniv;
    }

    public void setAsalUniv(String asalUniv) {
        /* metode yang digunakan sebagai setter untuk data asal universitas */
        this.asalUniv = asalUniv;
    }

    public String getEmailEdu() {
        /* metode yang digunakan sebagai getter untuk data email universitas */
        return emailEdu;
    }

    public void setEmailEdu(String emailEdu) {
        /* metode yang digunakan sebagai setter untuk data email universitas */
        this.emailEdu = emailEdu;
    }
}