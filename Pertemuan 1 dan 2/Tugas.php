<?php
// Membuat class Dosen yang merepresentasikan data dosen
class Dosen {
    // Deklarasi atribut yang dimiliki oleh class Dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    // Konstruktor untuk menginisialisasi objek dengan nilai atribut saat objek dibuat
    public function __construct($nama, $nip, $mataKuliah) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDosen() {
        // Menampilkan data dosen dalam format yang rapi
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
}

// Membuat objek dari class Dosen dan memberikan nilai-nilai atributnya
$dosen1 = new Dosen("Dr. Ahmad", "1987654321", "Pemrograman Web");

// Memanggil metode tampilkanDosen() untuk menampilkan informasi dosen
$dosen1->tampilkanDosen();
?>
