<?php

//Buat Class Mahasiswa untuk menyimpan data mahasiswa
Class Mahasiswa {
    Protected $nama; //hanya bisa diakses oleh kelas ini dan kelas turunan.

    Public function __construct($nama) {
        $this->nama =$nama; //Menyimpan nama mahasiswa ke dalam properti
    }

    //Fungsi ini untuk mendapatkan (mengambil) nama mahasiswa
    Public function getNama() {
        return $this->nama; //Mengembalikan nilai nama mahasiswa
    }
}

//Class Dosen adalah turunan dari Class Mahasiswa
//Class ini menambahkan properti dan metode untuk mata kuliah yang diajarkan
Class Dosen extends Mahasiswa {
    //Properti ini menyimpan mata kuliah yang diajarkan oleh dosen
    Private $mataKuliah; //hanya bisa diakses dalam kelas ini

    Public function __construct($nama,$mataKuliah) {
        Parent::__construct($nama); //Memanggil constructor kelas induk untuk mengatur nama
        $this->mataKuliah = $mataKuliah; //Menyimpan mata kuliah dosen ke dalam properti
    }

    //Fungsi ini untuk mendapatkan (mengambil) mata kuliah yang diajarkan dosen
    Public function getmataKuliah() {
        return $this->mataKuliah; //Mengembalikan nilai mata kuliah dosen
    }
}

//Membuat object baru dari kelas Dosen dengan nama "Ghina" dan mata kuliah "P WEB 2"
$dosen1 = new Dosen("Ghina", "P WEB 2");
//Menampilkan nama dosen
Echo $dosen1->getNama(); // Output: Pemrograman PHP
// Menampilkan mata kuliah yang diajarkan dosen
Echo $dosen1->getmataKuliah(); //Output: P WEB 2

?>