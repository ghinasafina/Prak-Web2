<?php

// Membuat class Mahasiswa yang merepresentasikan data mahasiswa
class Mahasiswa {
    // Deklarasi atribut yang dimiliki oleh class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct ($nama, $nim, $jurusan) {
        // Menyimpan nilai-nilai yang diberikan ke dalam atribut class
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        // Menampilkan data mahasiswa dalam format yang rapi
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

// Membuat objek dari class Mahasiswa dan memberikan nilai-nilai atributnya
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();

?>