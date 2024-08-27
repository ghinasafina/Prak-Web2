<?php
// Mendefinisikan kelas dengan nama Mobil
Class Mobil {
    // Atribut atau Properties dari kelas Mobil
    public $merk;  // Menyimpan merk mobil
    public $warna; // Menyimpan warna mobil

    // Constructor: Metode yang dijalankan saat objek dibuat
    public function __construct($merk, $warna) {
        $this->merk = $merk;  // Mengatur nilai atribut merk
        $this->warna = $warna; // Mengatur nilai atribut warna
    }

    // Metode untuk menampilkan deskripsi mobil
    public function deskripsi() {
        // Mengembalikan string yang menjelaskan mobil
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }  
}

// Membuat objek dari kelas Mobil dengan merk "Toyota" dan warna "Hitam"
$mobil1 = new Mobil("Toyota", "Hitam");

// Menampilkan deskripsi mobil dengan memanggil metode deskripsi() pada objek $mobil1
echo $mobil1->deskripsi();
?>
