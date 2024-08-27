<?php

// Membuat kelas Buku
Class Buku {
    // Mendefinisikan atribut untuk menyimpan judul dan penulis buku
    public $judul;
    public $penulis;

    // Membuat metode konstruktor untuk mengatur nilai awal atribut saat objek dibuat
    public function __construct($judul, $penulis) {
        // Mengisi atribut $judul dan $penulis dengan nilai yang diberikan saat objek dibuat
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Membuat metode untuk menampilkan informasi buku
    public function tampilkanInfo() {
        // Mengembalikan teks yang berisi judul dan penulis buku
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
        }
}

// Membuat objek buku baru dengan judul dan penulis tertentu
$buku1 = new Buku("Pemrograman PHP","John Doe");
// Menampilkan informasi buku yang telah dibuat
echo $buku1->tampilkanInfo();
?>