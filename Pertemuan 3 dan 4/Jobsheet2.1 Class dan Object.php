<?php

//Buat class Mahasiswa untuk menyimpan data mahasiswa
Class Mahasiswa {
    //Deklarasi properti untuk menyimpan nama, NIM, dan jurusan mahasiswa
    Public $nama;
    Public $nim;
    Public $jurusan;

    //Constructor digunakan pada saat membuat objek baru
    Public function __construct ($nama, $nim, $jurusan) {
        $this->nama = $nama; // Menetapkan nilai properti nama dengan nilai yang diberikan
        $this->nim = $nim; // Menetapkan nilai properti nim dengan nilai yang diberikan
        $this->jurusan = $jurusan; // Menetapkan nilai properti jurusan dengan nilai yang diberikan
    }

    //Fungsi ini digunakan untuk menampilkan data Mahasiswa
    Public function tampilkanData(){
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
}

//Buat objek Mahasiswa baru
$mahasiswa1 = new Mahasiswa("Ghina","230102012","Komputer Dan Bisnis");
//Echo untuk menampilkan data 
Echo $mahasiswa1->tampilkanData(); //Output : "Nama: Ghina, NIM: 230102012, Jurusan: Komputer Dan Bisnis"

?>