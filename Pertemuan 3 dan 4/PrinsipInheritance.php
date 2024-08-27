<?php

// Kelas Produk adalah kelas dasar yang menyimpan informasi umum tentang produk
Class Produk {
    // Properti ini menyimpan nama produk dan dapat diakses oleh kelas turunan
    Protected $nama;

    // Constructor ini dijalankan saat membuat object Produk baru
    // Menetapkan nilai nama produk saat membuat object
    Public function __construct($nama){
        $this->nama =$nama; // Menyimpan nilai nama produk ke dalam properti
    }

     // Metode ini untuk mendapatkan (mengambil) nama produk
    Public function getNama(){
        return $this->nama; // Mengembalikan nilai nama produk
    }
}

// Kelas Buku adalah turunan dari kelas Produk
// Kelas ini menambahkan informasi khusus tentang buku, yaitu penulis
Class Buku extends Produk {
    // Properti ini menyimpan penulis buku dan hanya bisa diakses di dalam kelas Buku
    Private $penulis;

    // Constructor ini dijalankan saat membuat object Buku baru
    // Menggunakan constructor dari kelas Produk untuk menetapkan nama produk
    Public function __construct($nama, $penulis) {
        Parent::__construct($nama); // Menetapkan nama produk menggunakan constructor kelas Produk
        $this->penulis = $penulis; // Menyimpan nilai penulis buku ke dalam properti
    }

    // Metode ini untuk mendapatkan (mengambil) penulis buku
    Public function getPenulis(){
        return $this->penulis; // Mengembalikan nilai penulis buku
    }
}

// Membuat object baru dari kelas Buku dengan nama "Pemrograman PHP" dan penulis "Andi Prasetyo"
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");

// Menampilkan nama buku menggunakan metode getNama() dari kelas Produk
Echo $buku1->getNama(); //Output: Pemrograman PHP
?>