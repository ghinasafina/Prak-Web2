<?php

// Kelas Buku menyimpan informasi tentang buku
Class Buku { 
    Private $judul; // Properti ini menyimpan judul buku
    Private $penulis; // Properti ini menyimpan penulis buku

    // Constructor ini dijalankan saat kita membuat object Buku baru
    // Menetapkan nilai untuk judul dan penulis saat membuat objec
    Public function __construct($judul,$penulis) {
        $this->judul = $judul; // Menyimpan nilai judul ke dalam properti
        $this->penulis = $penulis; // Menyimpan nilai penulis ke dalam properti
    }

    // Metode ini untuk mendapatkan (mengambil) judul buku
    Public function getJudul(){
        return $this->judul; // Mengembalikan nilai judul buku
    }

    // Metode ini untuk mengatur (mengubah) judul buku
    // Perhatikan bahwa parameter $judul harus ditambahkan pada fungsi ini
    Public function setJudul(){
        $this->judul = $judul; // Menyimpan nilai judul baru ke dalam properti
    }
}

// Membuat object baru dari kelas Buku dengan judul "Pemrograman PHP" dan penulis "Andi Prasetyo"
$buku1 = new Buku("Pemrograman PHP","Andi Prasetyo");

// Menampilkan judul buku menggunakan metode getJudul()
Echo $buku1->getJudul(); //Output: Pemrograman PHP

?>