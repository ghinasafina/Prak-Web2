<?php

//Buat Class Mahasiswa untuk menyimpan dan mengatur data mahasiswa
Class Mahasiswa {
    //Properti ini digunakan untuk menyimpan nama, NIM, dan jurusan mahasiswa
    Private $name;
    Private $nim;
    Private $jurusan;

    //Constructor digunakan pada saat membuat objek baru
    //Di sini kita menetapkan nilai awal untuk nama, NIM, dan jurusan
    Public function __construct ($nama,$nim,$jurusan) {
        $this->nama = $nama; // Mengisi properti nama dengan nilai yang diberikan
        $this->nim = $nim; // Mengisi properti nim dengan nilai yang diberikan
        $this->jurusan = $jurusan; // Mengisi properti jurusan dengan nilai yang diberikan
    }

    //Fungsi ini untuk mengambil (mendapatkan) nilai nama mahasiswa
    Public function getNama() {
        return $this->nama;
    }

    //Fungsi ini untuk mengambil (mendapatkan) nilai nim mahasiswa
    Public function getNim() {
        return $this->nim;
    }

    //Fungsi ini untuk mengambil (mendapatkan) nilai jurusan mahasiswa
    Public function getJurusan() {
        return $this->jurusan;
    }

    //Fungsi ini untuk mengubah (mengatur) nama mahasiswa dengan nilai baru
    Public function setNama($nama) {
        $this->nama = $nama;
    }

    //Fungsi ini untuk mengubah (mengatur) nim mahasiswa dengan nilai baru
    Public function setNim($nim) {
        $this->nim = $nim;
    }

    //Fungsi ini untuk mengubah (mengatur) jurusan mahasiswa dengan nilai baru
    Public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat object baru dari class Mahasiswa dengan data yang diberikan
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");

?>